<?php

namespace App\Http\Controllers\Admin\Hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index() {
        return view('admin.hotel.index');
    }
    public function new() {
        return view('admin.hotel.new');
    }

    public function create(Request $request) {

        $request->validate([
            'name' => 'required',
            'state' => 'required',
            'city' =>  'required',
            'street' => 'required',
            'number' => 'required',
            'rooms' => 'required',
        ]);

        return redirect()->route('admin.hotel.index');
    }
}
