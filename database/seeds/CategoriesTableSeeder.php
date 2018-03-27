<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Earrings',
            'image_path' => '/images/earrings-crop.jpg',
            'slug' => 'pre-owned-earrings',            
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s')
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Necklaces',
            'image_path' => '/images/necklace-crop.jpg',
            'slug' => 'pre-owned-necklaces',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Bracelets',
            'image_path' => '/images/bracelet-crop.jpg',
            'slug' => 'pre-owned-bracelets',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Rings',
            'image_path' => '/images/rings-crop2.jpg',
            'slug' => 'pre-owned-rings',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Brooches',
            'image_path' => '/images/brooches.jpg',
            'slug' => 'pre-owned-brooches',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Sets',
            'image_path' => '/images/jewelry-set-crop2.jpg',
            'slug' => 'pre-owned-sets',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]);

        DB::table('categories')->insert([
            'name' => 'Five-Dollar',
            'image_path' => '/images/treasure-chest-crop2.jpg',
            'slug' => 'five-dollar',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        ]); 
    }
}
