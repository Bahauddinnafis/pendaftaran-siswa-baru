<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{	
    public function index($id = null)
	{
		if ($id === null) {
            $admin = AdminModel::get();
        } else {
            $admin = AdminModel::find($id);
        }
        $response = [
            'status' => true,
            'message' => 'Success get data admin',
            'data' => $admin,
        ];
		return view('admin.index');
	}
 
	public function login(){
		return view('user.auth.login');
	}
 
	public function kontak(){
		return view('kontak');
	}
}
