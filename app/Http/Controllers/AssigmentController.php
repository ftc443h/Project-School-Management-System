<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assigment;
use App\Student;
use Hamcrest\Core\AllOf;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AssigmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Join Table Assigment, Student */
        $assigment = DB::table('tbl_assigment')
            ->join('tbl_student', 'tbl_student.id', '=', 'tbl_assigment.tbl_student_id')
            ->select('tbl_assigment.*', 'tbl_student.photo_student as photo', 'tbl_student.name_student as student')
            ->get();

        $assigmentCount = $assigment->count();
        return view('admin.assigment.index', compact('assigment', 'assigmentCount'), [
            'active' => 'assigment',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studentAssig = Student::all();
        $assigmentCreate = Assigment::all();
        $assigmentCount = $assigmentCreate->count();
        return view('admin.assigment.create', compact('assigmentCreate', 'studentAssig', 'assigmentCount'), [
            'active' => 'assigment',
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
        /* Validate Assigment */
        $request->validate([
            'code_assigment' => 'required',
            'file_assigment' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,txt,csv,xlsm,pptx|min:2|max:990',
            'clock_assigment' => 'required',
            'tbl_student_id' => 'required'
        ],
        
        /* Message Error Student*/
        [
            'code_assigment.max' => 'Input Code Max 10',
            'file_assigment.max' => 'Input File Max 280',
            'file_assigment.min' => 'Input File Min 2 MB',
            'file_assigment.mimes' => 'Input pdf,doc,docx,xls,xlsx,txt,csv,xlsm,pptx',
            'file_assigment.file' => 'This File Is Not An File',
            'clock_assigment' => 'Input Clock File Assigment',
            'tbl_student_id' => 'Input Student'
        ]);

        /* New File Assigment Student */
        if (!empty($request->file_assigment)) {
            $fileName = 'file_' . $request->code_assigment . '.' . $request->file_assigment->extension();
            $request->file_assigment->move(public_path('admin/assets/assigment/student'), $fileName);
        } else {
            $fileName = '';
        }

        try{
            DB::table('tbl_assigment')->insert([
                'code_assigment' => $request->code_assigment,
                'file_assigment' => $fileName,
                'clock_assigment' => $request->clock_assigment,
                'tbl_student_id' => $request->tbl_student_id
            ]);
            return redirect()->route('assigment.index')->with('success', 'New Assigment Data Has Been Successfully Saved');
        }
        catch(\Exception $allertStore){
            return redirect()->route('assigment.index')->with('error', 'New Assigment Data Has Been Error Saved');
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
        $student_viewAssigment = Student::all();
        $assigment_View = Assigment::find($id);

        return view('admin.assigment.view', compact('assigment_View', 'student_viewAssigment'),[
            'active' => 'assigment',
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
        $student_EdtAssigment = Student::all();
        $assigment_edit = Assigment::find($id);
        $assigmentCount = $assigment_edit->count();
        return view('admin.assigment.edit', compact('assigment_edit', 'student_EdtAssigment', 'assigmentCount'),[
            'active' => 'assigment',
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
        $request->validate([
            'code_assigment' => 'required',
            'file_assigment' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,txt,csv,xlsm,pptx|min:2|max:990',
            'clock_assigment' => 'required',
            'tbl_student_id' => 'required'
        ],
        
        /* Message Error Student*/
        [
            'code_assigment' => 'Input Code Max 10',
            'file_assigment.max' => 'Input File Max 280',
            'file_assigment.min' => 'Input File Min 2 MB',
            'file_assigment.mimes' => 'Input pdf,doc,docx,xls,xlsx,txt,csv,xlsm,pptx',
            'file_assigment.file' => 'This File Is Not An File',
            'clock_assigment' => 'Input Clock File Assigment',
            'tbl_student_id' => 'Input Student'
        ]);

        /* Delete OLD File Assigment Student */
        $foto = DB::table('tbl_assigment')
            ->select('file_assigment')
            ->where('id', $id)
            ->get();
        foreach($foto as $a) {
            $filePDFOld = $a->file_assigment;
        }

        if (!empty($request->file_assigment)) {
            if (!empty($filePDFOld)) unlink('admin/assets/assigment/student/'.$filePDFOld);
            $fileName = 'file_' . $request->code_assigment . '.' . $request->file_assigment->extension();
            $request->file_assigment->move(public_path('admin/assets/assigment/student'), $fileName);
        } else {
            $fileName = $filePDFOld;
        }

        DB::table('tbl_assigment')->where('id', $id)->update([
            'file_assigment' => $fileName,
            'code_assigment' => $request->code_assigment,
            'clock_assigment' => $request->clock_assigment,
            'tbl_student_id' => $request->tbl_student_id
        ]);
        return redirect()->route('assigment.index')->with('success', 'Legacy Assigment Data Has Been Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assigment_delete = Assigment::find($id);
        if (!empty($assigment_delete->file_assigment)) unlink('admin/assets/assigment/student/' . $assigment_delete->file_assigment);
        Assigment::where('id', $id)->delete();

        /* Alert Delete Global Laravel 5.8 */
        toast('Success Delete Data File Assigment', 'success');
        return redirect()->back();
    }
}
