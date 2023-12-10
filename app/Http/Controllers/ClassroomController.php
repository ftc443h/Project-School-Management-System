<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Classroom;
use App\Learning;
use App\Student;
use App\Teacher;
use App\User;
use Illuminate\Database\Eloquent\Model;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Join Table Classroom, Teacher, Student, Learning */
        $classroom = DB::table('tbl_classroom')
            ->join('tbl_teacher', 'tbl_teacher.id', '=', 'tbl_classroom.tbl_teacher_id')
            ->join('tbl_student', 'tbl_student.id', '=', 'tbl_classroom.tbl_student_id')
            ->join('tbl_learning', 'tbl_learning.id', '=', 'tbl_classroom.tbl_learning_id')
            ->select('tbl_classroom.*', 'tbl_teacher.name_teacher as teacher', 'tbl_student.name_student as student', 'tbl_learning.learning_class as learning')
            ->get();

        $classroomCount = $classroom->count();
        return view('admin.classroom.index', compact('classroom', 'classroomCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* Run Create Classroom */
        $teacher = Teacher::all();
        $student = Student::all();
        $learning = Learning::all();
        $users = User::all();
        $classroom_create = Classroom::all();
        return view('admin.classroom.create', compact('classroom_create', 'teacher', 'student', 'learning', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Validate Classroom */
        $request->validate(
            [
                'offline_classroom' => 'required|max:255',
                'online_classroom' => 'required|max:255',
                'clock_start' => 'required',
                'clock_end' => 'required',
                'date_start' => 'required',
                'date_end' => 'required',
                'tbl_student_id' => 'required',
                'tbl_teacher_id' => 'required',
                'tbl_learning_id' => 'required',
                'tbl_users_id' => 'required',
            ],

            /* Message Error Classroom */
            [
                'offline_classroom.required' => 'Input Code Classroom',
                'offline_classroom.max' => 'Input Code Max 255',
                'online_classroom.required' => 'Input Link Classroom',
                'online_classroom.unique' => 'Meet link already exists',
                'online_classroom.max' => 'Meet link Max 255',
                'clock_start.required' => 'Input Clock Start Classroom',
                'clock_end.required' => 'Input Clock End Classroom',
                'date_start.required' => 'Input Date Start Classroom',
                'date_end.required' => 'Input Date End Classroom',
                'tbl_student_id.required' => 'Input Student Classroom',
                'tbl_teacher_id.required' => 'Input Teacher Classroom',
                'tbl_learning_id.required' => 'Input Learning Classroom',
                'tbl_users_id.required' => 'Input users Classroom',
            ]
        );

        /* DB Table Classroom */
        DB::table('tbl_classroom')->insert([
            'offline_classroom' => $request->offline_classroom,
            'online_classroom' => $request->online_classroom,
            'clock_start' => $request->clock_start,
            'clock_end' => $request->clock_end,
            'date_start' => $request->date_start,
            'date_end' => $request->date_end,
            'tbl_student_id' => $request->tbl_student_id,
            'tbl_teacher_id' => $request->tbl_teacher_id,
            'tbl_learning_id' => $request->tbl_learning_id,
            'tbl_users_id' => $request->users_id,
        ]);

        return redirect()->route('classroom.index')->with('success', 'Class Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* View Table Classroom */
        $teacher_shw = Teacher::all();
        $student_shw = Student::all();
        $learning_shw = Learning::all();
        $classroom_view = Classroom::find($id);
        $classroomCount = $classroom_view->count();
        return view('admin.classroom.view', compact('classroom_view', 'classroomCount', 'teacher_shw', 'student_shw', 'learning_shw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* Edit Table Classroom */
        $teacher_edit = Teacher::all();
        $student_edit = Student::all();
        $learning_edit = Learning::all();
        $users_edit = User::all();
        $classroom_edit = Classroom::find($id);
        return view('admin.classroom.edit', compact('classroom_edit', 'teacher_edit', 'student_edit', 'learning_edit', 'users_edit'));
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
        /* Update Validate Table Classroom */
        $request->validate(
            [
                'offline_classroom' => 'required|max:255',
                'online_classroom' => 'required|max:255',
                'clock_start' => 'required',
                'clock_end' => 'required',
                'date_start' => 'required',
                'date_end' => 'required',
                'tbl_student_id' => 'required',
                'tbl_teacher_id' => 'required',
                'tbl_learning_id' => 'required',
                'tbl_users_id' => 'required',
            ],

            /* Message Edit / Update Error Classroom */
            [
                'offline_classroom.required' => 'Input Code Classroom',
                'offline_classroom.max' => 'Input Code Max 255',
                'online_classroom.required' => 'Input Link Classroom',
                'online_classroom.unique' => 'Meet link already exists',
                'online_classroom.max' => 'Meet link Max 255',
                'clock_start.required' => 'Input Clock Start Classroom',
                'clock_end.required' => 'Input Clock End Classroom',
                'date_start.required' => 'Input Date Start Classroom',
                'date_end.required' => 'Input Date End Classroom',
                'tbl_student_id.required' => 'Input Student Classroom',
                'tbl_teacher_id.required' => 'Input Teacher Classroom',
                'tbl_learning_id.required' => 'Input Learning Classroom',
                'tbl_users_id.required' => 'Input users Classroom',
            ]);

        /* Edit Data OLD Classroom */
        DB::table('tbl_classroom')->where('id', $id)->update([
            'offline_classroom' => $request->offline_classroom,
            'online_classroom' => $request->online_classroom,
            'clock_start' => $request->clock_start,
            'clock_end' => $request->clock_end,
            'date_start' => $request->date_start,
            'date_end' => $request->date_end,
            'tbl_student_id' => $request->tbl_student_id,
            'tbl_teacher_id' => $request->tbl_teacher_id,
            'tbl_learning_id' => $request->tbl_learning_id,
            'users_id' => $request->users_id,
            'update_at' => now(),
        ]);

        return redirect()->route('classroom.index')->with('success', 'Old Classroom Data Has Been Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classroom_delete = Classroom::find($id);
        Classroom::where('id', $id)->delete();
        return redirect()->route('classroom.index')->with('success', 'Success Delete Data Classroom');
    }
}
