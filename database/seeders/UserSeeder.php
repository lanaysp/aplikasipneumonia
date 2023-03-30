<?php

namespace Database\Seeders;

use Faker\Core\Number;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 100; $i++){
            DB::table('users')->insert([
                'name' => $faker->name,
                'email'=>$faker->email,
                'telepon' => $faker->phoneNumber,
                'alamat' => 'Kec. Karangawen Kabupaten Rt/Rw'. $faker->randomDigit() .'/'. $faker->randomDigit() .'Demak Jawa Tengah',
                'password' => Hash::make('password'),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
        }
    }
}
