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
            ->select('tbl_grade.*', 'tbl_learning.learning_class as learning', 'tbl_student.name_student as student')
            ->get();

            foreach ($lessonValue as $value) {
                $value->average_grade = ($value->dailytasks_grade + $value->uts_grade + $value->uas_grade) / 3;
                $ket_nilai = ($value->average_grade >= 60) ? 'Lulus' : 'Tidak Lulus';
        
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
            };
            
        $lessonValueCount = $lessonValue->count();
        return view('admin.lesson_value.index', compact('lessonValue', 'lessonValueCount'));
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

        return view('admin.lesson_value.create', compact('studendt_creat', 'lessonVa_creat', 'learning_creatt'));
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

        $averageGrade = ($request->dailytasks_grade + $request->uts_grade + $request->uas_grade) / 3;

        DB::table('tbl_grade')->insert([
            'dailytasks_grade' => $request->dailytasks_grade,
            'uts_grade' => $request->uts_grade,
            'uas_grade' => $request->uas_grade,
            'tbl_learning_id' => $request->tbl_learning_id,
            'tbl_student_id' => $request->tbl_student_id,
            'average_grade' => $averageGrade,
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
