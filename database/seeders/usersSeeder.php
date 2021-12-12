<?php

namespace Database\Seeders;

use App\Models\users; 
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\File;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $json_file = File::get('database/data/users.json'); 
        DB::table('users')->delete(); 
        $data = json_decode($json_file); 
        foreach ($data as $obj) {
            users::create(array(
                'name' => $obj->name,
                'email' => $obj->email,
                'password' => $obj->password
                
            ));
        } 
    }
}
