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
        DB::table('products')->insert([
            'category_id' => '1',
            'name' => 'Amber Glass Teardrop Earrings',
            'description' => 'These have a graceful shape, small hooks and hang 1 1/2 inches.',
            'price' => '16',
            'image_path' => '/images/products/amber-teardrop-earrings.jpg',      'paypal_button' => 'PDMQBULL82TE6',                           
            'is_vintage' => '1',
            'is_precious' => '0',
            'is_gemstone' => '0',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '1',
            'name' => 'Purple Dangle Earrings',
            'description' => 'Pretty 1 1/2 inch dangle earrings with small light purple beads.',
            'price' => '12',
            'image_path' => '/images/products/purple-drop-earrings.jpg',         'paypal_button' => 'SXPUZ7YTHBVBG',                           
            'is_vintage' => '0',
            'is_precious' => '0',
            'is_gemstone' => '0',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '6',
            'name' => 'Sterling Silver Flower Jewelry Set',
            'description' => 'A lovely hand-made set from Ann McKay Studios in Williamsport, PA.',
            'price' => '36',
            'image_path' => '/images/products/silver-jewelry-set.jpg',           'paypal_button' => 'KRGB3WNNTH76G',                         
            'is_vintage' => '1',
            'is_precious' => '1',
            'is_gemstone' => '0',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '1',
            'name' => 'Pewter Earrings',
            'description' => 'These cute earrings have the Arthur Pepper mark and measure 3/4 inch in diameter.',
            'price' => '14',
            'image_path' => '/images/products/pewter-hoop-earrings.jpg',         'paypal_button' => '2PHRZ2DPK63ZC',                           
            'is_vintage' => '1',
            'is_precious' => '0',
            'is_gemstone' => '0',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '1',
            'name' => 'Copper Glyph Earrings',
            'description' => '5/8 inch diameter hoop/stud earrings wih Native American symbols.',
            'price' => '16',
            'image_path' => '/images/products/copper-glyph-earrings.jpg',        'paypal_button' => 'VA3PTL73LU5DU',                            
            'is_vintage' => '0',
            'is_precious' => '0',
            'is_gemstone' => '0',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '3',
            'name' => 'Sterling Silver Anklet',
            'description' => 'A simple and elegant 9 inch ankle chain.',
            'price' => '10',
            'image_path' => '/images/products/silver-anklet.jpg','paypal_button' => 'DWK5KRAUWXLZW',                                    
            'is_vintage' => '0',
            'is_precious' => '1',
            'is_gemstone' => '0',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '3',
            'name' => 'Tiger Eye Bracelet',
            'description' => '7 inch bracelet with shimmery tiger eye chips.',
            'price' => '10',
            'image_path' => '/images/products/tiger-eye-bracelet.jpg',           'paypal_button' => 'JH6RGXSN6JR7U',                         
            'is_vintage' => '0',
            'is_precious' => '0',
            'is_gemstone' => '1',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Wish Necklace',
            'description' => 'A glass ball containing three dandelion seeds, commonly known as a wish necklace.',
            'price' => '12',
            'image_path' => '/images/products/wish-necklace-closeup.jpg',        'paypal_button' => 'Y5RGQCJR598LS',                            
            'is_vintage' => '0',
            'is_precious' => '0',
            'is_gemstone' => '0',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '1',
            'name' => 'Copper Drop Earrings',
            'description' => 'Small round copper earrings with a cute sun bead.',
            'price' => '12',
            'image_path' => '/images/products/copper-drop-earrings.jpg',         'paypal_button' => 'J2TK43H4SRRTL',                           
            'is_vintage' => '1',
            'is_precious' => '0',
            'is_gemstone' => '0',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '1',
            'name' => 'Maroon Triangle Earrings',
            'description' => 'Fun and lightweight triangle-shaped stud earrings.',
            'price' => '10',
            'image_path' => '/images/products/maroon-triangle-earrings.jpg',     'paypal_button' => '5PHLZNT53XC2G',                               
            'is_vintage' => '1',
            'is_precious' => '0',
            'is_gemstone' => '0',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '1',
            'name' => 'Blue Topaz Earring (single)',
            'description' => 'Beautiful topaz and sterling silver stud. One earring only, not a pair.',
            'price' => '8',
            'image_path' => '/images/products/topaz-stud-earring.jpg',           'paypal_button' => 'PSNPHWG6LJXY4',                         
            'is_vintage' => '0',
            'is_precious' => '1',
            'is_gemstone' => '1',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Bella Luce Pendant with Chain',
            'description' => '3.38 ctw rhodium plated sterling silver pendant and 18 inch chain.',
            'price' => '25',
            'image_path' => '/images/products/bella-luce-pendant.jpg',           'paypal_button' => 'NUZ3SF9XGHQL4',                         
            'is_vintage' => '0',
            'is_precious' => '1',
            'is_gemstone' => '0',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Crystal Mala Beads',
            'description' => '108 bead hand-knotted crystal mala.',
            'price' => '50',
            'image_path' => '/images/products/crystal-mala.jpg', 'paypal_button' => 'LXDVW6CGRH2JC',                                   
            'is_vintage' => '0',
            'is_precious' => '0',
            'is_gemstone' => '0',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Sandalwood Half Mala with Hanuman Charm',
            'description' => 'Pretty half mala from India.',
            'price' => '44',
            'image_path' => '/images/products/crystal-mala.jpg', 'paypal_button' => 'QAJFNJ6VKBN76',                                   
            'is_vintage' => '0',
            'is_precious' => '0',
            'is_gemstone' => '0',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Freshwater Pearl Necklace',
            'description' => 'Lovely string of pearls from India.',
            'price' => '26',
            'image_path' => '/images/products/pearl-necklace.jpg',               'paypal_button' => 'C6XBTV2MFBUV8',                     
            'is_vintage' => '0',
            'is_precious' => '0',
            'is_gemstone' => '1',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '5',
            'name' => 'Silvertone Rhinestone Brooch',
            'description' => 'Dainty vintage filigree brooch, 3/4 inch x 2 inch.',
            'price' => '24',
            'image_path' => '/images/products/vintage-rhinestone-brooch.jpg',    'paypal_button' => '4HQ64K698BC3Q',                                
            'is_vintage' => '1',
            'is_precious' => '0',
            'is_gemstone' => '0',
            'is_rhinestone' => '1',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Silver Sapphire Pendant with Chain',
            'description' => 'High quality gemstone set in sterling silver. Verified by jeweler to be a sapphire. Previous owner called it a Padparadscha but this has not been verified. 1 3/4 inch x 1 inch.',
            'price' => '98',
            'image_path' => '/images/products/silver-sapphire-pendant.jpg',      'paypal_button' => 'JL9NKZDCWV4QU',                              
            'is_vintage' => '0',
            'is_precious' => '1',
            'is_gemstone' => '1',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '5',
            'name' => 'Sterling Silver Rhinestone Brooch',
            'description' => 'Pretty vintage brooch with secure rollover clasp.',
            'price' => '32',
            'image_path' => '/images/products/silver-rhinestone-brooch.jpg',     'paypal_button' => '8N73Y4BZ9ZVEU',                               
            'is_vintage' => '1',
            'is_precious' => '1',
            'is_gemstone' => '0',
            'is_rhinestone' => '1',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);

        DB::table('products')->insert([
            'category_id' => '1',
            'name' => 'Onyx and Silver Clip-On Earrings',
            'description' => "Lovely vintage clip-ons, marked 'm Germany Sterling'.",
            'price' => '40',
            'image_path' => '/images/products/vintage-onyx-clip-on-earrings.jpg','paypal_button' => 'ZBJPB3KB3C6DY',                                    
            'is_vintage' => '1',
            'is_precious' => '1',
            'is_gemstone' => '1',
            'is_rhinestone' => '0',
            'is_other' => '0',
            'is_active' => '1',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),  
        ]);
    }
}
