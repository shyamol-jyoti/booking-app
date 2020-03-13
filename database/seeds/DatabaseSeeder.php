<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Item;
use App\Image;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //factory(User::class, 50)->create();
        //factory(Item::class, 50)->create();
        factory(Image::class, 50)->create();


    }
}
