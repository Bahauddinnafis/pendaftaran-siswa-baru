<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use APp\Models\CalonSiswaModel;
use App\Models\UserModel;

class SiswaController extends Controller
{
    public function index()
	{
        $user = UserModel::get();
		return view('admin.index', compact('user'));
	}
}
