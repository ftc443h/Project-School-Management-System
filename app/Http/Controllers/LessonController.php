<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Teacher;
use App\Learning;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /* Join Table Student & Learning */
        $lessonValue = DB::table('tbl_grade')
            ->join('tbl_student', 'tbl_student.id', '=', 'tbl_grade.tbl_student_id')
            ->join('tbl_learning', 'tbl_learning.id', '=', 'tbl_grade.tbl_learning_id')
            ->select(
                'tbl_grade.*',
                'tbl_learning.learning_class as learning',
                'tbl_student.name_student as student',
                'tbl_student.photo_student as photo',
                'tbl_student.code_student as code',
                'tbl_student.gender_student as gender'
            )
            ->get();

        foreach ($lessonValue as $value) {
            $value->average_grade = ($value->dailytasks_grade + $value->uts_grade + $value->uas_grade) / 3;
            $ketnilai = ($value->average_grade >= 60) ? 'Graduate' : 'Not Pass';

            if ($value->average_grade >= 86 && $value->average_grade <= 100) {
                $grade = 'A';
            } elseif ($value->average_grade >= 76 && $value->average_grade < 86) {
                $grade = 'B';
            } elseif ($value->average_grade >= 60 && $value->average_grade < 76) {
                $grade = 'C';
            } elseif ($value->average_grade >= 31 && $value->average_grade < 60) {
                $grade = 'D';
            } elseif ($value->average_grade >= 0 && $value->average_grade < 31) {
                $grade = 'E';
            } else {
                $grade = ' ';
            }

            switch ($grade) {
                case 'A':
                    $predikat = 'Very Good';
                    break;
                case 'B':
                    $predikat = 'Good';
                    break;
                case 'C':
                    $predikat = 'Enough';
                    break;
                case 'D':
                    $predikat = 'Bad';
                    break;
                case 'E':
                    $predikat = 'Very Bad';
                    break;
                default:
                    $predikat = '';
            };

            $value->grade = $grade;
            $value->predikat = $predikat;
            $value->ketnilai = $ketnilai;
        };

        $lessonValueCount = $lessonValue->count();
        return view('admin.lesson_value.index', compact('lessonValue', 'lessonValueCount'),[
            'active' => 'lesson',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studendt_creat = Student::all();
        $learning_creatt = Learning::all();
        $lessonVa_creat = Lesson::all();

        return view('admin.lesson_value.create', compact('studendt_creat', 'lessonVa_creat', 'learning_creatt'),[
            'active' => 'lesson',
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
        /* Validate Lesson Value */
        $request->validate(
            [
                'dailytasks_grade' => 'required',
                'uts_grade' => 'required',
                'uas_grade' => 'required',
                'tbl_learning_id' => 'required',
                'tbl_student_id' => 'required'
            ],

            /* Message Error Lesson Value */
            [
                'dailytasks_grade.required' => 'Input Value daily tasks',
                'uts_grade.required' => 'Input Value UTS',
                'uas_grade.required' => 'Input Value UAS',
                'tbl_learning_id.required' => 'Input Learning Class',
                'tbl_student_id.required' => 'Input Student Class'
            ]
        );

        DB::table('tbl_grade')->insert([
            'dailytasks_grade' => $request->dailytasks_grade,
            'uts_grade' => $request->uts_grade,
            'uas_grade' => $request->uas_grade,
            'tbl_learning_id' => $request->tbl_learning_id,
            'tbl_student_id' => $request->tbl_student_id,
        ]);

        return redirect()->route('lesson_value.index')->with('success', 'Value Data Student Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studeview_Val = Student::all();
        $lesson_View = Lesson::find($id);

        return view('admin.lesson_value.view', compact('studeview_Val', 'lesson_View'),[
            'active' => 'lesson',
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
        $Std_Edit = Student::all();
        $lear_Edit = Learning::all();
        $lesson_Edit = Lesson::find($id);

        return view('admin.lesson_value.edit', compact('Std_Edit', 'lesson_Edit', 'lear_Edit'),[
            'active' => 'lesson',
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
        /* Validate Lesson Value */
        $request->validate(
            [
                'dailytasks_grade' => 'required',
                'uts_grade' => 'required',
                'uas_grade' => 'required',
                'tbl_learning_id' => 'required',
                'tbl_student_id' => 'required'
            ],

            /* Message Error Lesson Value */
            [
                'dailytasks_grade.required' => 'Input Value daily tasks',
                'uts_grade.required' => 'Input Value UTS',
                'uas_grade.required' => 'Input Value UAS',
                'tbl_learning_id.required' => 'Input Learning Class',
                'tbl_student_id.required' => 'Input Student Class'
            ]
        );

        DB::table('tbl_grade')->where('id', $id)->update([
            'dailytasks_grade' => $request->dailytasks_grade,
            'uts_grade' => $request->uts_grade,
            'uas_grade' => $request->uas_grade,
            'tbl_learning_id' => $request->tbl_learning_id,
            'tbl_student_id' => $request->tbl_student_id
        ]);

        return redirect()->route('lesson_value.index')->with('success', 'Value Data Student Edit Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson_delete = Lesson::find($id);
        Lesson::where('id', $id)->delete();
        return redirect()->route('lesson_value.index')->with('success', 'Success Delete Data Lesson Value Student');
    }
}
