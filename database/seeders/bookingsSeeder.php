<?php

namespace Database\Seeders;

use App\Models\bookings; 
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\File;

class bookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $json_file = File::get('database/data/bookings.json');  
        DB::table('bookings')->delete(); 
        $data = json_decode($json_file); 
        foreach ($data as $obj) {
            bookings::create(array( 
                                       
                'date' => $obj->date,
                'starttime' => $obj->starttime,
                'endtime' => $obj->endtime,
                'type' => $obj->type,
                'rooms_id' => $obj->rooms_id,
                'user_id' => $obj->user_id
            ));
        } 
    }
}
