<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Connect All Database */
        $teacher = Teacher::all();
        $teacherCount = $teacher->count();
        return view('admin.teacher.index', compact('teacher', 'teacherCount'),[
            'active' => 'teacher',
        ]);

    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* Run Create Teacher */
        $teacher_create = Teacher::all();
        return view('admin.teacher.create', compact('teacher_create'),[
            'active' => 'teacher',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Validate Teacher */
        $request->validate([
            'photo_teacher' => 'required|image|mimes:jpg,png,gif,svg|min:2|max:280',
            'code_teacher' => 'required|max:6',
            'name_teacher' => 'required|max:100',
            'gender_teacher' => 'required',
            'birthday_teacher' => 'required',
            'email_teacher' => 'required|max:20',
            'phone_teacher' => 'required|max:15',
            'address_teacher' => 'required',
        ],

            /* Message Error Store Teacher */
            [
                'phone_teacher.max' => 'Input Telephone Max 15',
                'photo_teacher.max' => 'Input File Max 280',
                'photo_teacher.min' => 'Input File Min 2 MB',
                'photo_teacher.mimes' => 'Input jpg,png,gif,svg',
                'photo_teacher.image' => 'This File Is Not An Image',
                'code_teacher.required' => 'Input Code Teacher',
                'code_teacher.max' => 'Input Code Max 6',
                'code_teacher.unique' => 'Must Not Be The Same Code',
                'gender_teacher.required' => 'Input Select Gender Male / Female',
                'email_teacher.required' => 'Input E-Mail Teacher',
                'email_teacher.max' => 'Input E-Mail Max 20',
                'email_teacher.unique' => 'Cant Match Existing Email',
                'phone_teacher.required' => 'Input Telephone',
                'phone_teacher.integer' => 'Input Number Telephone',
            ]
        );

        /* Delete Photo New File Profile */
        if (!empty($request->photo_teacher)) {
            $fileName = 'teacher_' . $request->code_teacher . '.' . $request->photo_teacher->extension();
            $request->photo_teacher->move(public_path('admin/assets/img/profile'), $fileName);
        } else {
            $fileName = '';
        }

        /* Alert Global Laravel 5.8 */
        try{
            DB::table('tbl_teacher')->insert([
                'photo_teacher' => $fileName,
                'code_teacher' => $request->code_teacher,
                'name_teacher' => $request->name_teacher,
                'gender_teacher' => $request->gender_teacher,
                'birthday_teacher' => $request->birthday_teacher,
                'email_teacher' => $request->email_teacher,
                'phone_teacher' => $request->phone_teacher,
                'address_teacher' => $request->address_teacher,
            ]);
            return redirect()->route('teacher.index')->with('success', 'New Teacher Data Has Been Successfully Saved');
        }
        catch(\Exception $allertStore){
            return redirect()->route('teacher.index')->with('error', 'New Teacher Data Has Been Error Saved');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher_view = Teacher::find($id);
        return view('admin.teacher.view', compact('teacher_view'),[
            'active' => 'teacher',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher_edit = Teacher::find($id);
        return view('admin.teacher.edit', compact('teacher_edit'),[
            'active' => 'teacher',
        ]);
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
                'photo_teacher' => 'required|image|mimes:jpg,png,gif,svg|min:2|max:280',
                'code_teacher' => 'required|max:6',
                'name_teacher' => 'required|max:100',
                'gender_teacher' => 'required',
                'birthday_teacher' => 'required',
                'email_teacher' => 'required|max:20',
                'phone_teacher' => 'required|max:15',
                'address_teacher' => 'required',
            ],

            /* Validate Edit Teacher */
            [
                'phone_teacher.max' => 'Input Telephone Max 15',
                'photo_teacher.max' => 'Input File Max 280',
                'photo_teacher.min' => 'Input File Min 2 MB',
                'photo_teacher.mimes' => 'Input jpg,png,gif,svg',
                'photo_teacher.image' => 'This File Is Not An Image',
                'code_teacher.required' => 'Input Code Teacher',
                'code_teacher.max' => 'Input Code Max 6',
                'code_teacher.unique' => 'Must Not Be The Same Code',
                'gender_teacher.required' => 'Input Select Gender Male / Female',
                'email_teacher.required' => 'Input E-Mail Teacher',
                'email_teacher.max' => 'Input E-Mail Max 20',
                'email_teacher.unique' => 'Cant Match Existing Email',
                'phone_teacher.required' => 'Input Telephone',
                'phone_teacher.integer' => 'Input Number Telephone',
            ]
        );

        /* Delete Photo OLD File Profile */
        $foto = DB::table('tbl_teacher')
            ->select('photo_teacher')
            ->where('id', $id)
            ->get();
        foreach($foto as $a) {
            $photoOld = $a->photo_teacher;
        }

        if (!empty($request->photo_teacher)) {
            if (!empty($photoOld)) unlink('admin/assets/img/profile/'.$photoOld);
            $fileName = 'teacher_' . $request->code_teacher . '.' . $request->photo_teacher->extension();
            $request->photo_teacher->move(public_path('admin/assets/img/profile'), $fileName);
        } else {
            $fileName = $photoOld;
        }

        /* Edit Data OLD Teacher */
        DB::table('tbl_teacher')->where('id', $id)->update([
            'photo_teacher' => $fileName,
            'code_teacher' => $request->code_teacher,
            'name_teacher' => $request->name_teacher,
            'gender_teacher' => $request->gender_teacher,
            'birthday_teacher' => $request->birthday_teacher,
            'email_teacher' => $request->email_teacher,
            'phone_teacher' => $request->phone_teacher,
            'address_teacher' => $request->address_teacher,
            'update_at' => now(),
        ]);

        return redirect()->route('teacher.index')->with('success', 'Legacy Teacher Data Has Been Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher_delete = Teacher::find($id);
        if (!empty($teacher_delete->photo_teacher)) unlink('admin/assets/img/profile/' . $teacher_delete->photo_teacher);
        Teacher::where('id', $id)->delete();

        /* Alert Delete Global Laravel 5.8 */
        toast('Success Delete Data Teacher', 'success');
        return redirect()->back();
    }
}
