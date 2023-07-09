<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $nama = ['admin1', 'admin2', 'admin3', 'admin4'];
        $username = ['siadmin1', 'siadmin2', 'siadmin3', 'siadmin4'];
        for($i = 0; $i < sizeof($nama); $i++){
            DB::table('users')->insert([
                'name' => $nama[$i],
                'usernam' => $username[$i],
                'email' => strtolower($nama[$i] . '@gmail.com'),
                'password' => Hash::make(strtolower($nama[$i]. '_123')),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'id_admin' => 1,
            ]);
        }
    }
}
