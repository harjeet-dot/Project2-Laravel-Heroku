<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rooms;

class roomsController extends Controller
{
    public function index()
    {

        return rooms:: all();
        
    }

    public function show($id)
    {
        return rooms::find($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_num' => 'required',
            'location' => 'required',
            'capacity' => 'required'
           

        ]);

        return rooms::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $rooms = rooms::find($id);
        $rooms->update($request->all());
        return $rooms;
    }

    public function destroy($id)
    {
        return rooms::destroy($id);
    }
}
