<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class)->make([
            'name' => 'admin',
            'email' => 'admin@test.com'
        ])->save();
        
    }
}
