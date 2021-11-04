<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\User;

class DataController extends Controller
{
    public function dashboard()
    {
       $sidebar = 'dashboard';
       return view('admin.dashboard.index', compact('sidebar')); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sidebar = 'dataundangan';
        $undangan = Data::latest()->get();
        return view('admin.undangan.index', compact('undangan', 'sidebar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sidebar = 'dataundangan';
        $user = User::latest()->get();
        return view('admin.undangan.tambah_data', compact('user', 'sidebar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_user' => 'required',
            'foto_pria' => 'required|image|mimes:png,jpg,jpeg|max:3048',
            'foto_wanita' => 'required|image|mimes:png,jpg,jpeg|max:3048',
            'embed_maps' => 'required|string|min:14',
            'salam_pembuka'=> 'required|string|min:14',
        ]);

                // UPLOAD IMAGE IN PUBLIC
                if ($request->foto_pria) {
                    $avatar = $request->foto_pria;
                    $new_avatar = date('YmdHis').'.'.$avatar->getClientOriginalExtension();
                    $avatar->move('images/foto_undangan/', $new_avatar);
            
                    $user = User::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'role' => $request->role,
                        'avatar' => $new_avatar,
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
    public function destroy($id)
    {
        //
    }
}
