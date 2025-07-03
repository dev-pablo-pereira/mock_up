<?php

namespace App\Http\Controllers\Admin\Hotel;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index() {
        return view('admin.hotel.index');
    }
    public function create() {
        return view('admin.hotel.new');
    }

    public function store(Request $request) {

        $data = $request->validate([
            'name' => 'required',
            'state' => 'required',
            'city' =>  'required',
            'street' => 'required',
            'number' => 'required',
            'room' => 'required',
        ]);

        $data['user_id'] = 1;

        Hotel::create($data);
        return view('admin.hotel.index');
    }
}
