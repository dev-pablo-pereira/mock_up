<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return redirect()->route('admin.index');
    }

    public function index()
    {
        $hotels = Hotel::with('images')->where('user_id', Auth::id())->get();
        
        return view('admin.index',['hotels' => $hotels]);
    }
}
