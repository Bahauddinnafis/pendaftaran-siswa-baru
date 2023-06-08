<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function profil()
	{   
        $id = Auth::guard('admin')->id();
        $admin = AdminModel::find($id);
        return view('admin.profil', compact('admin'))->with('success', 'Data siswa telah dimuat.');
	}
}
