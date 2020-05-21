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
        // $this->call(UserSeeder::class);
         $this->call(addUser::class);
         $this->call(addAnh::class);
          $this->call(addSlide::class);
         // $this->call(addDichvu::class);
    }
}


