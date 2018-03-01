<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_pro')->insert([
            'name_pro' => 'Amber Glass Teardrop Earrings',
            'description_pro' => 'These have a graceful shape, small hooks, and hang about 1 1/2 inches.',
        ]);
    }
}
