<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{

    public function index()
    {
        return view('/admin/dashboard_admin');
    }
    
    public function view_user()
    {
        $data['no'] = 1;
        $data['users'] = User::all();
        return view('admin/user/user',$data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($email)
    {
        $user = User::findOrFail($email);
        return view('admin/user/edit_user',$data)->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
