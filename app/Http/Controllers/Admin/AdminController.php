<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function create() {
        return view('admin.new');
    }

    public function store(Request $request) {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            ]
        );
        User::create($data);
        return redirect()->route('admin.login');
    }

    public function index()
    {
        return view('admin.login');
    }

    public function present(Request $request) {
        
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        return redirect()->route('admin.hotel.new');
    }
}
