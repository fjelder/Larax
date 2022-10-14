<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contracts')->insert([
            'name' => Str::random(10),
            'task_name' => Str::random(10),
            'contract_number' => Str::random(10),
            'prefix' => null,
            'start_date' => null,
            'stop_date' => null,
            'contract_stage_id' => 1,
            'contract_study_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
