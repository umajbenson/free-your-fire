<?php

use Illuminate\Database\Seeder;

class CategoriesCatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_cat')->insert([
            'name_cat' => 'Earrings',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s')
        ]);
        
        DB::table('categories_cat')->insert([
            'name_cat' => 'Necklaces',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);

        DB::table('categories_cat')->insert([
            'name_cat' => 'Bracelets',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);

        DB::table('categories_cat')->insert([
            'name_cat' => 'Rings',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);

        DB::table('categories_cat')->insert([
            'name_cat' => 'Brooches',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);

        DB::table('categories_cat')->insert([
            'name_cat' => 'Sets',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);

        DB::table('categories_cat')->insert([
            'name_cat' => 'Five-Dollar',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]); 
    }
}
