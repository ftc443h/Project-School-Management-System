<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        $studentCount = $student->count();
        return view('admin.student.index', compact('student', 'studentCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student_create = Student::all();
        return view('admin.student.create', compact('student_create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Validate Student */
        $request->validate([
            'code_student' => 'required|max:6',
            'name_student' => 'required|max:100',
            'gender_student' => 'required',
            'birthday_student' => 'required',
            'email_student' => 'required|max:20',
            'phone_student' => 'required|max:15',
            'address_student' => 'required',
            'photo_student' => 'required|image|mimes:jpg,png,gif,svg|min:2|max:280'
        ],

        /* Message Error Student*/
        [
            'code_student.required' => 'Input Code Student',
            'code_student.max' => 'Input Code Max 6',
            'code_student.unique' => 'Must Not Be The Same Code',
            'gender_student.required' => 'Input Select Gender Male / Female',
            'email_student.required' => 'Input E-Mail Student',
            'email_student.max' => 'Input E-Mail Max 20',
            'email_student.unique' => 'Cant Match Existing Email',
            'phone_student.required' => 'Input Telephone',
            'phone_student.integer' => 'Input Number Telephone',
            'phone_student.max' => 'Input Telephone Max 15',
            'address_student' => 'Input Address Student Invalid',
            'photo_tstudent.max' => 'Input File Max 280',
            'photo_student.min' => 'Input File Min 2 MB',
            'photo_student.mimes' => 'Input jpg,png,gif,svg',
            'photo_student.image' => 'This File Is Not An Image'
        ]);

        /* Delete Photo OLD File Profile */
        if (!empty($request->photo_student)) {
            $fileName = 'student_' . $request->code_student . '.' . $request->photo_student->extension();
            $request->photo_student->move(public_path('admin/assets/img/profile'), $fileName);
        } else {
            $fileName = '';
        }

        DB::table('tbl_student')->insert([
            'code_student' => $request->code_student,
            'name_student' => $request->name_student,
            'gender_student' => $request->gender_student,
            'birthday_student' => $request->birthday_student,
            'email_student' => $request->email_student,
            'phone_student' => $request->phone_student,
            'address_student' => $request->address_student,
            'photo_student' => $fileName
        ]);
        return redirect()->route('student.index')->with('success', 'New student data has been successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student_view = Student::find($id);
        return view('admin.student.view', compact('student_view'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student_edit = Student::find($id);
        return view('admin.student.edit', compact('student_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'photo_student' => 'required|image|mimes:jpg,png,gif,svg|min:2|max:280',
                'code_student' => 'required|max:6',
                'name_student' => 'required|max:100',
                'gender_student' => 'required',
                'birthday_student' => 'required',
                'email_student' => 'required|max:20',
                'phone_student' => 'required|max:15',
                'address_student' => 'required',
            ],

            /* Validate Edit Student */
            [
                'phone_student.max' => 'Input Telephone Max 15',
                'photo_student.max' => 'Input File Max 280',
                'photo_student.min' => 'Input File Min 2 MB',
                'photo_student.mimes' => 'Input jpg,png,gif,svg',
                'photo_student.image' => 'This File Is Not An Image',
                'code_student.required' => 'Input Code Student',
                'code_student.max' => 'Input Code Max 6',
                'code_student.unique' => 'Must Not Be The Same Code',
                'gender_student.required' => 'Input Select Gender Male / Female',
                'email_student.required' => 'Input E-Mail Student',
                'email_student.max' => 'Input E-Mail Max 20',
                'email_student.unique' => 'Cant Match Existing Email',
                'phone_student.required' => 'Input Telephone',
                'phone_student.integer' => 'Input Number Telephone',
            ]
        );

        /* Delete Photo OLD File Profile */
        $foto = DB::table('tbl_student')
            ->select('photo_student')
            ->where('id', $id)
            ->get();
        foreach($foto as $a) {
            $photoOld = $a->photo_student;
        }

        if (!empty($request->photo_student)) {
            if (!empty($photoOld)) unlink('admin/assets/img/profile/'.$photoOld);
            $fileName = 'student_' . $request->code_student . '.' . $request->photo_student->extension();
            $request->photo_student->move(public_path('admin/assets/img/profile'), $fileName);
        } else {
            $fileName = $photoOld;
        }

        /* Edit Data OLD Student */
        DB::table('tbl_student')->where('id', $id)->update([
            'photo_student' => $fileName,
            'code_student' => $request->code_student,
            'name_student' => $request->name_student,
            'gender_student' => $request->gender_student,
            'birthday_student' => $request->birthday_student,
            'email_student' => $request->email_student,
            'phone_student' => $request->phone_student,
            'address_student' => $request->address_student,
            'update_at' => now(),
        ]);

        return redirect()->route('student.index')->with('success', 'Legacy Student Data Has Been Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student_delete = Student::find($id);
        if (!empty($student_delete->photo_student)) unlink('admin/assets/img/profile/' . $student_delete->photo_student);
        Student::where('id', $id)->delete();
        return redirect()->route('student.index')->with('success', 'Success Delete Data Student');
    }
}
