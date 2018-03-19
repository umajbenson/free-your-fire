<?php

use Illuminate\Database\Seeder;

class RolesRolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles_rol')->insert([
            'name_rol' => 'Member',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);

        DB::table('roles_rol')->insert([
            'name_rol' => 'Customer',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);

        DB::table('roles_rol')->insert([
            'name_rol' => 'Member/Customer',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);
    }
}
