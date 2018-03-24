<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Member',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);

        DB::table('roles')->insert([
            'name' => 'Customer',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);

        DB::table('roles')->insert([
            'name' => 'Member/Customer',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);
    }
}
