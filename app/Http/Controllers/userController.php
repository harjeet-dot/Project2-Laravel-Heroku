<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class userController extends Controller
{
    public function index() {
        return users::all();
        
        
    }
    
    public function show($id) {
        return users::find($id);
    
        
    }
    
    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
           

        ]);
        return users::create($request->all());
        
 
    }
    
    public function update(Request $request, $id) {
        $user = users::find($id);
        $user->update($request->all());
        return $user;
    
    }

    public function destroy($id) {
        return users::destroy($id);
        
       
    }
}
