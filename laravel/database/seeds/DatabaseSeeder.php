<?php

use Illuminate\Database\Seeder;
use App\User;
use App\resource;
use App\balancedscorecard;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.          //php artisan db:seed
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // DB::table('users')->delete();

        // User::create([
        //     'name' => 'Rita',
        //     'position'    => 'manager',
        //     'password' => 'www',
        // ]);

        // resource::create([
        //     'resource_name' => 'finance'        //manufacture、marketing、development、finance
        // ]);

         balancedscorecard::create([
            'bsc_name' => 'learn_growth'        //finance、customer、inprocess、learn_growth
        ]);
		// $this->call('/UserTableSeeder');

    }
}
