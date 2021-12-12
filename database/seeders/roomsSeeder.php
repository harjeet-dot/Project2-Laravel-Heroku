<?php

namespace Database\Seeders;

use App\Models\rooms; 
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\File;

class roomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $json_file = File::get('database/data/rooms.json'); 
        DB::table('rooms')->delete(); 
        $data = json_decode($json_file); 
        foreach ($data as $obj) {
            rooms::create(array(
                'room_num' => $obj->room_num,
                'location' => $obj->location,
                'capacity' => $obj->capacity
                
            ));
        } 
    }
}
