<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Aboutme;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user1 = User::create([
            'name' => 'Abanoub Ayad',
            'email' => 'abanob.ayad.2015@gmail.com',
            'password' => Hash::make('123'),

        ]);

        $user2 = User::create([
            'name' => 'Remon Ayad',
            'email' => 'remonabdelmalakme@gmail.com',
            'password' => Hash::make('Tgnm@12060478$s'),

        ]);


        $about = About::create(
            [
                'name' => 'Abanoub Ayad',
                'email' => 'abanob.ayad.2015@gmail.com',
                'JobTitle' => 'Backend Developer',
                'desc' => 'Abanoub Ayad Portfolio',
                'phone' => '01284902397',
                'address' => '11 st Abu Heraira - Moharm Bek - Alexandria - Egypt',
                'titles' => 'Social Media Manager , Software Engineer',
            ]
        );
    }
}
