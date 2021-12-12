<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookings;

class bookingsController extends Controller
{
    public function index() {
        return Bookings::join('users', 'bookings.user_id', '=', 'users.id')
        ->join('rooms', 'bookings.id', '=', 'rooms.id')
        ->get([
        'bookings.id',
        'bookings.date',
        'bookings.starttime',
        'bookings.endtime',
        'rooms.room_num',
        'rooms.location',
        'rooms.capacity',
        'bookings.type'
        
        ]);
        

    }
   
    public function show($id) {
        return bookings::find($id);
    
    }
  
    public function store(Request $request) {

        $request->validate([
            'date' => 'required',
            'starttime' => 'required',
            'endtime' => 'required',
            'type' => 'required'

        ]);
        return bookings::create($request->all());
        
 
    }
    
    public function update(Request $request, $id) {
        $bookings = bookings::find($id);
        $bookings->update($request->all());
        return $bookings;
    
       
    }
    
    public function destroy($id) {
        return bookings::destroy($id);
        
       
    }
}
