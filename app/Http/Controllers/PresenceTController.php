<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PresenceT;
use App\Student;
use Illuminate\Support\Facades\DB;
use App\Teacher;

class PresenceTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Join Table Presence, Teacher */
        $presensi_t = DB::table('tbl_presence_tec')
            ->join('tbl_teacher', 'tbl_teacher.id', '=', 'tbl_presence_tec.tbl_teacher_id')
            ->select('tbl_presence_tec.*', 'tbl_teacher.name_teacher as teacher', 'tbl_teacher.photo_teacher as photoT')
            ->get();
        
        $presensi_tCount = $presensi_t->count();
        return view('admin.presence_tc.index', compact('presensi_t', 'presensi_tCount'),[
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
        /* Create Presence & Teacher */
        $teacher_cre = Teacher::all();
        $presence_Tcreate = PresenceT::all();
        return view('admin.presence_tc.create', compact('presence_Tcreate', 'teacher_cre'),[
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

        /* Validate Presence & Teacher */
        $request->validate([
            'date_teac' => 'required',
            'status_teac' => 'required',
            'tbl_teacher_id' => 'required'
        ], 
        
        /* Message Error Classroom */
        [
            'date_teac.required' => 'Input Date Presence',
            'status_teac.required' => 'Input Status Presence',
            'tbl_teacher_id.required' => 'Input Teacher Presence'
        ]);

        DB::table('tbl_presence_tec')->insert([
            'date_teac' => $request->date_teac,
            'status_teac' => $request->status_teac,
            'tbl_teacher_id' => $request->tbl_teacher_id
        ]);

        return redirect()->route('presence_tc.index')->with('success', 'Presence Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher_ShView = Teacher::all();
        $presens_view = PresenceT::find($id);
        return view('admin.presence_tc.view', compact('presens_view', 'teacher_ShView'),[
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
        $teacher_Edt = Teacher::all();
        $presence_Tedit = PresenceT::find($id);

        return view('admin.presence_tc.edit', compact('presence_Tedit', 'teacher_Edt'));
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

        $request->validate([
            'date_teac' => 'required',
            'status_teac' => 'required',
            'tbl_teacher_id' => 'required'
        ],
        
        /* Message Error Presence Teacher */
        [
            'date_teac.required' => 'Input Date Presence Teacher',
            'status_teac.required' => 'Input Date Status Teacher',
            'tbl_teacher_id.required' => 'Input Name Presence Teacher'
        ]);

        /* DB Table Presence Teacher */
        DB::table('tbl_presence_tec')->where('id', $id)->update([
            'date_teac' => $request->date_teac,
            'status_teac' => $request->status_teac,
            'tbl_teacher_id' => $request->tbl_teacher_id,
            'update_at' => now(),
        ]);

        return redirect()->route('presence_tc.index')->with('success', 'Presence Teacher Data Edit Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $presen_DLT = PresenceT::find($id);
        PresenceT::where('id', $id)->delete();
        return redirect()->route('presence_tc.index')->with('success', 'Success Delete Data Presence Teacher');
    }
}