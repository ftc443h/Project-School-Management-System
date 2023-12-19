<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myuser = Profile::all();
        return view('admin.profile.index', compact('myuser'),[
            'active' => 'profile',]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $my_edt = Profile::find($id);
        return view('admin.profile.edit', compact('my_edt'));
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
                'photo' => 'required|image|mimes:jpg,png,gif,svg|min:2|max:280',
                'name' => 'required|max:100',
                'email' => 'required|max:50',
                'phone_users' => 'required|max:15',
                'address_users' => 'required',
            ],

            /* Validate Edit Teacher */
            [
                'address_users.required' => 'Input Address Users',
                'name.required' => 'Input Name Users',
                'phone_users.max' => 'Input Telephone Max 15',
                'photo.max' => 'Input File Max 280',
                'photo.min' => 'Input File Min 2 MB',
                'photo.mimes' => 'Input jpg,png,gif,svg',
                'photo.image' => 'This File Is Not An Image',
                'email.required' => 'Input E-Mail Teacher',
                'email.max' => 'Input E-Mail Max 50',
                'email.unique' => 'Cant Match Existing Email',
                'phone_users.required' => 'Input Telephone',
                'phone_users.integer' => 'Input Number Telephone',
            ]
        );

        /* Delete Photo OLD File Profile */
        $foto = DB::table('users')
            ->select('photo')
            ->where('id', $id)
            ->get();
        foreach($foto as $a) {
            $photoOld = $a->photo;
        }

        if (!empty($request->photo)) {
            if (!empty($photoOld)) unlink('admin/assets/img/users/'.$photoOld);
            $fileName = 'foto_' . $request->name . '.' . $request->photo->extension();
            $request->photo->move(public_path('admin/assets/img/users'), $fileName);
        } else {
            $fileName = $photoOld;
        }

        /* Edit Data OLD Teacher */
        DB::table('users')->where('id', $id)->update([
            'photo' => $fileName,
            'name' => $request->name,
            'email' => $request->email,
            'phone_users' => $request->phone_users,
            'address_users' => $request->address_users,
            'update_at' => now(),
        ]);

        return redirect()->route('profile.index')->with('success', 'Legacy User Data Has Been Successfully Edited');
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
