<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CityRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = DB::table('cities')->get();
        $rooms = DB::table('rooms')->get();
        foreach ($cities as $city) {
            foreach ($rooms as $room) {
                DB::table('city_room')->insert([
                    'room_id' => $room->id,
                    'city_id' => $city->id,
                ]);
            }
        }
    }
}
