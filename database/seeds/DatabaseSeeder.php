<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesRolTableSeeder::class);
        $this->call(StatesStaTableSeeder::class);
        $this->call(AddressTypeTypTableSeeder::class);
        $this->call(CategoriesCatTableSeeder::class);
        $this->call(ProductsProTableSeeder::class);           
    }
}
