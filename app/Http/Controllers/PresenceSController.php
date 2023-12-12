<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PresenceS;
use Illuminate\Support\Facades\DB;
use App\Student;

class PresenceSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $presensi_s = PresenceS::all();
        $presensi_s = DB::table('tbl_presence_st')
            ->join('tbl_student', 'tbl_student.id', '=', 'tbl_presence_st.tbl_student_id')
            ->select('tbl_presence_st.*', 'tbl_student.name_student as student', 'tbl_student.photo_student as photoS')
            ->get();

        $presensi_sCount = $presensi_s->count();
        return view('admin.presence_st.index', compact('presensi_s', 'presensi_sCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student_Crea = Student::all();
        $presensi_create = PresenceS::all();
        return view('admin.presence_st.create', compact('presensi_create', 'student_Crea'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Validate Presence & Student */
        $request->validate([
            'date_stud' => 'required',
            'status_stud' => 'required',
            'tbl_student_id' => 'required'
        ],
        
        /* Message Error Classroom */
        [
            'date_stud.required' => 'Input Date Presence',
            'status_stud.required' => 'Input Status Presence',
            'tbl_student_id.required' => 'Input Student Presence'
        ]);

        DB::table('tbl_presence_st')->insert([
            'date_stud' => $request->date_stud,
            'status_stud' => $request->status_stud,
            'tbl_student_id' => $request->tbl_student_id
        ]);

        return redirect()->route('presence_st.index')->with('success', 'Presence Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student_SView = Student::all();
        $presensist_view = PresenceS::find($id);
        return view('admin.presence_st.view', compact('presensist_view', 'student_SView'));
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
