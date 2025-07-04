<?php

namespace App\Http\Controllers\Admin\Hotel;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Image;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HotelController extends Controller
{   
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
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,svg|max:2048',

        ]);

        $data['user_id'] = Auth::user()->id;
        $hotel = Hotel::create($data);

        if ($request->hasFile('image')) {
            $images = $request->file('image');

            foreach ($images as $image) {
                $image->storeAs('images', $image->hashName(), 'public');

                Image::create([
                'path' => $image->hashName(),
                'hotel_id' => $hotel->id
                ]);
            }
        }

        return redirect()->route('admin.index');
    }

    public function edit($id) {
        $hotel = Hotel::findOrFail($id);
        $images = Image::where('hotel_id', $hotel->id)->get();

        return view('admin.hotel.edit', ['hotel' => $hotel, 'images' => $images]);
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
