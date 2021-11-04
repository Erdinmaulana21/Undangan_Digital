<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\UpdateProfileRequest;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\Admin\UserRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id', '!=', auth()->id())->latest()->get();
        $sidebar = 'users';
        return view('admin.users.index', compact('users', 'sidebar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sidebar = 'users';
        return view('admin.users.tambah_user', compact('sidebar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        // UPLOAD IMAGE IN PUBLIC
        if ($request->avatar) {
            $avatar = $request->avatar;
            $new_avatar = date('YmdHis').'.'.$avatar->getClientOriginalExtension();
            $avatar->move('images/avatar_users/', $new_avatar);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'avatar' => $new_avatar,
            ]);
        } else {
            $avatar = 'default_avatar_users.png';
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'avatar' => $avatar,
            ]);
        }
    
        if($user){
            Alert::success('BERHASIL', 'Data User Berhasil Disimpan!');
            return redirect('/users');
        }else{
            Alert::warning('GAGAL', 'Data User Gagal Disimpan!');    
            return redirect('/users');
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
    public function deleteUser($id)
    { 
        $user = User::destroy($id);
    
      if($user){
        return redirect('/users');
    }else{
        Alert::warning('GAGAL', 'Data User Gagal Dihapus!');
        return redirect('/users');
    }
    }

    public function deleteAllUser($id)
    {
        $users = User::where('id', '!=', $id)->delete();

        if($users){
            return redirect('/users');
        }else{
            Alert::warning('GAGAL', 'Data User Gagal Dihapus!');
            return redirect('/users');
        }
    }
}
