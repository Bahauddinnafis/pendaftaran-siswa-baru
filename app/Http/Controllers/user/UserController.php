<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{	
    public function index($id = null)
	{
		if ($id === null) {
            $user = UserModel::get();
        } else {
            $user = UserModel::find($id);
        }
        $response = [
            'status' => true,
            'message' => 'Success get data user',
            'data' => $user,
        ];
		return view('admin.index');
	}
}
