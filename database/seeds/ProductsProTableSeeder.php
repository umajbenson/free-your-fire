<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class ProductsProTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_pro')->insert([
            'id_cat' => '1',
            'name_pro' => 'Amber Glass Teardrop Earrings',
            'description_pro' => 'These have a graceful shape, small hooks and hang 1 1/2 inches.',
            'price_pro' => '16',
            'image_path_pro' => 'images/products/amber-teardrop-earrings.jpg',                                    
            'is_vintage_pro' => '1',
            'is_precious_pro' => '0',
            'is_gemstone_pro' => '0',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '1',
            'name_pro' => 'Purple Dangle Earrings',
            'description_pro' => 'Pretty 1 1/2 inch dangle earrings with small light purple beads.',
            'price_pro' => '12',
            'image_path_pro' => 'images/products/purple-drop-earrings.jpg',                                    
            'is_vintage_pro' => '0',
            'is_precious_pro' => '0',
            'is_gemstone_pro' => '0',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '6',
            'name_pro' => 'Sterling Silver Flower Jewelry Set',
            'description_pro' => 'A lovely hand-made set from Ann McKay Studios in Williamsport, PA.',
            'price_pro' => '36',
            'image_path_pro' => 'images/products/silver-jewelry-set.jpg',                                    
            'is_vintage_pro' => '1',
            'is_precious_pro' => '1',
            'is_gemstone_pro' => '0',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '1',
            'name_pro' => 'Pewter Earrings',
            'description_pro' => 'These cute earrings have the Arthur Pepper mark and measure 3/4 inch in diameter.',
            'price_pro' => '14',
            'image_path_pro' => 'images/products/pewter-hoop-earrings.jpg',                                    
            'is_vintage_pro' => '1',
            'is_precious_pro' => '0',
            'is_gemstone_pro' => '0',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '1',
            'name_pro' => 'Copper Glyph Earrings',
            'description_pro' => '5/8 inch diameter hoop/stud earrings wih Native American symbols.',
            'price_pro' => '16',
            'image_path_pro' => 'images/products/copper-glyph-earrings.jpg',                                    
            'is_vintage_pro' => '0',
            'is_precious_pro' => '0',
            'is_gemstone_pro' => '0',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '3',
            'name_pro' => 'Sterling Silver Anklet',
            'description_pro' => 'A simple and elegant 9 inch ankle chain.',
            'price_pro' => '10',
            'image_path_pro' => 'images/products/silver-anklet.jpg',                                    
            'is_vintage_pro' => '0',
            'is_precious_pro' => '1',
            'is_gemstone_pro' => '0',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '3',
            'name_pro' => 'Tiger Eye Bracelet',
            'description_pro' => '7 inch bracelet with shimmery tiger eye chips.',
            'price_pro' => '10',
            'image_path_pro' => 'images/products/tiger-eye-bracelet.jpg',                                    
            'is_vintage_pro' => '0',
            'is_precious_pro' => '0',
            'is_gemstone_pro' => '1',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '2',
            'name_pro' => 'Wish Necklace',
            'description_pro' => 'A glass ball containing three dandelion seeds, commonly known as a wish necklace.',
            'price_pro' => '12',
            'image_path_pro' => 'images/products/wish-necklace-closeup.jpg',                                    
            'is_vintage_pro' => '0',
            'is_precious_pro' => '0',
            'is_gemstone_pro' => '0',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '1',
            'name_pro' => 'Copper Drop Earrings',
            'description_pro' => 'Small round copper earrings with a cute sun bead.',
            'price_pro' => '12',
            'image_path_pro' => 'images/products/copper-drop-earrings.jpg',                                    
            'is_vintage_pro' => '1',
            'is_precious_pro' => '0',
            'is_gemstone_pro' => '0',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '1',
            'name_pro' => 'Maroon Triangle Earrings',
            'description_pro' => 'Fun and lightweight triangle-shaped stud earrings.',
            'price_pro' => '10',
            'image_path_pro' => 'images/products/maroon-triangle-earrings.jpg',                                    
            'is_vintage_pro' => '1',
            'is_precious_pro' => '0',
            'is_gemstone_pro' => '0',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '1',
            'name_pro' => 'Blue Topaz Earring (single)',
            'description_pro' => 'Beautiful topaz and sterling silver stud. One earring only, not a pair.',
            'price_pro' => '8',
            'image_path_pro' => 'images/products/topaz-stud-earring.jpg',                                    
            'is_vintage_pro' => '0',
            'is_precious_pro' => '1',
            'is_gemstone_pro' => '1',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '2',
            'name_pro' => 'Bella Luce Pendant with Chain',
            'description_pro' => '3.38 ctw rhodium plated sterling silver pendant and 18 inch chain.',
            'price_pro' => '25',
            'image_path_pro' => 'images/products/bella-luce-pendant.jpg',                                    
            'is_vintage_pro' => '0',
            'is_precious_pro' => '1',
            'is_gemstone_pro' => '0',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '2',
            'name_pro' => 'Crystal Mala Beads',
            'description_pro' => '108 bead hand-knotted crystal mala.',
            'price_pro' => '50',
            'image_path_pro' => 'images/products/crystal-mala.jpg',                                    
            'is_vintage_pro' => '0',
            'is_precious_pro' => '0',
            'is_gemstone_pro' => '0',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '2',
            'name_pro' => 'Sandalwood Half Mala with Hanuman Charm',
            'description_pro' => 'Pretty half mala from India.',
            'price_pro' => '44',
            'image_path_pro' => 'images/products/crystal-mala.jpg',                                    
            'is_vintage_pro' => '0',
            'is_precious_pro' => '0',
            'is_gemstone_pro' => '0',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '2',
            'name_pro' => 'Freshwater Pearl Necklace',
            'description_pro' => 'Lovely string of pearls from India.',
            'price_pro' => '26',
            'image_path_pro' => 'images/products/pearl-necklace.jpg',                                    
            'is_vintage_pro' => '0',
            'is_precious_pro' => '0',
            'is_gemstone_pro' => '1',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '5',
            'name_pro' => 'Silvertone Rhinestone Brooch',
            'description_pro' => 'Dainty vintage filigree brooch, 3/4 inch x 2 inch.',
            'price_pro' => '24',
            'image_path_pro' => 'images/products/vintage-rhinestone-brooch.jpg',                                    
            'is_vintage_pro' => '1',
            'is_precious_pro' => '0',
            'is_gemstone_pro' => '0',
            'is_rhinestone_pro' => '1',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '2',
            'name_pro' => 'Silver Sapphire Pendant with Chain',
            'description_pro' => 'High quality gemstone set in sterling silver. Verified by jeweler to be a sapphire. Previous owner called it a Padparadscha but this has not been verified. 1 3/4 inch x 1 inch.',
            'price_pro' => '98',
            'image_path_pro' => 'images/products/silver-sapphire-pendant.jpg',                                    
            'is_vintage_pro' => '0',
            'is_precious_pro' => '1',
            'is_gemstone_pro' => '1',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '5',
            'name_pro' => 'Sterling Silver Rhinestone Brooch',
            'description_pro' => 'Pretty vintage brooch with secure rollover clasp.',
            'price_pro' => '32',
            'image_path_pro' => 'images/products/silver-rhinestone-brooch.jpg',                                    
            'is_vintage_pro' => '1',
            'is_precious_pro' => '1',
            'is_gemstone_pro' => '0',
            'is_rhinestone_pro' => '1',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products_pro')->insert([
            'id_cat' => '1',
            'name_pro' => 'Onyx and Silver Clip-On Earrings',
            'description_pro' => "Lovely vintage clip-ons, marked 'm Germany Sterling'.",
            'price_pro' => '40',
            'image_path_pro' => 'images/products/vintage-onyx-clip-on-earrings.jpg',                                    
            'is_vintage_pro' => '1',
            'is_precious_pro' => '1',
            'is_gemstone_pro' => '1',
            'is_rhinestone_pro' => '0',
            'is_other_pro' => '0',
            'is_active_pro' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);
    }
}
