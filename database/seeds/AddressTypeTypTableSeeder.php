<?php

use Illuminate\Database\Seeder;

class AddressTypeTypTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('address_type_typ')->insert([
            'name_typ' => 'Shipping',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);

        DB::table('address_type_typ')->insert([
            'name_typ' => 'Billing',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);
    }
}
