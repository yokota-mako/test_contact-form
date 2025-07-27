<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($contacts as $type) {
            DB::table('contacts')->insert([
                'first_name' => $type,
                'last_name' => $type,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
