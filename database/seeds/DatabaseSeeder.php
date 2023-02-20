<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompanySeeder::class);

        $this->call(UserSeeder::class);
        
        $this->call(CommentSeeder::class);

        $this->call(RoomSeeder::class);

        $this->call(CitySeeder::class);

        $this->call(ReservationSeeder::class);

        $this->call(CityRoomSeeder::class);

        $this->call(ImageSeeder::class);
    }
}
