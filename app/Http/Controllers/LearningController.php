<?php

namespace App\Http\Controllers;

use App\Learning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LearningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Connect Database Learning ALL */
        $learning = Learning::all();
        $learningCount = $learning->count();
        return view('admin.learning.index', compact('learning', 'learningCount'),[
            'active' => 'learning',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* Run Create Learning */
        $learning_create = Learning::all();
        return view('admin.learning.create', compact('learning_create'),[
            'active' => 'learning',
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
        /* Validate Learning */
        $request->validate(
            [
                'learning_class' => 'required',
                'category_class' => 'required'
            ],

            /* Message Error learning */
            [
                'learning_class' => 'Input Learning Classroom',
                'category_class' => 'Input Category Learning'
            ]
        );

        /* DB Table Learning */
        DB::table('tbl_learning')->insert([
            'learning_class' => $request->learning_class,
            'category_class' => $request->category_class
        ]);

        return redirect()->route('learning.index')->with('success', 'Learning Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* Show Learning */
        $learning_view = Learning::find($id);
        $learningCount = $learning_view->count();
        $classroomCount = $learning_view->count();
        return view('admin.learning.view', compact('learning_view', 'classroomCount', 'learningCount'),[
            'active' => 'learning',
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
        $learning_edit = Learning::find($id);
        return view('admin.learning.edit', compact('learning_edit'),[
            'active' => 'learning',
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
        /* Validate Learning */
        $request->validate(
            [
                'learning_class' => 'required',
                'category_class' => 'required'
            ],

            /* Message Error learning */
            [
                'learning_class' => 'Input Learning Classroom',
                'category_class' => 'Input Category Learning'
            ]
        );

        /* Edit Data OLD Classroom */
        DB::table('tbl_learning')->where('id', $id)->update([
            'learning_class' => $request->learning_class,
            'category_class' => $request->category_class,
            'update_at' => now(),
        ]);

        return redirect()->route('learning.index')->with('success', 'Old Learning Data Has Been Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $learning_delete = Learning::find($id);
        Learning::where('id', $id)->delete();
        return redirect()->route('learning.index')->with('success', 'Success Delete Data Learning');
    }
}
