<?php

namespace App\Http\Controllers\Admin\Hotel;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Support\Facades\Auth;
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

        $data['user_id'] = Auth::user()->id;

        Hotel::create($data);
        return view('admin.index');
    }

    public function edit($id) {
        $hotel = Hotel::findOrFail($id);

        return view('admin.hotel.edit', ['hotel' => $hotel]);
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required',
            'state' => 'required',
            'city' =>  'required',
            'street' => 'required',
            'number' => 'required',
            'room' => 'required',
        ]);

        $hotel = Hotel::findOrFail($id);
        $hotel->update($data);

        return redirect()->route('admin.index');
    }

    public function destroy($id) {
        $hotel = Hotel::find($id);
        $hotel->delete();

        return redirect()->route('admin.index');
    }
}
