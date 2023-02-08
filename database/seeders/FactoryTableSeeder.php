<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Upsell;

class FactoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Categories of products
        Categories::create([
            'name' => 'Hoodiees',
        ]);
        Categories::create([
            'name' => 'Pants',
        ]);
        Categories::create([
            'name' => 'Headwars',
        ]);
        Categories::create([
            'name' => 'Teeshirts',
        ]);

        // Products
        Product::create([
            'name' => 'BOSSALINI FLY HOODIE - BLACK',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 1,
            'length' => 1,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY HEADWARS - WHITE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 2,
            'length' => 2,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY PANT - GREEN',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 3,
            'length' => 3,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY HOOD - BLUE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 4,
            'length' => 4,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY KEEP - ROSE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 1,
            'length' => 5,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY TEE - INDIGO',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 2,
            'length' => 6,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY HOOD - BLUE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 3,
            'length' => 1,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY KEEP - ROSE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 4,
            'length' => 2,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY TEE - INDIGO',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 1,
            'length' => 3,
        ]);

        // Images of products

        //Produit 1
        ProductImage::create([
            'product_id' => 1,
            'image' => 'slider_home01.6ec5af8b.jpg',
        ]);

        ProductImage::create([
            'product_id' => 1,
            'image' => 'pant.0bac1d9b.png',
        ]);
        ProductImage::create([
            'product_id' => 1,
            'image' => 'hoodie.9d6d5b9c.png',
        ]);
        ProductImage::create([
            'product_id' => 1,
            'image' => 'headwear.a230fc06.png',
        ]);

        //Produit 2
        ProductImage::create([
            'product_id' => 2,
            'image' => 'slider_home01-2.6afd85d3.jpg',
        ]);
        ProductImage::create([
            'product_id' => 2,
            'image' => 'slid2.bd8542ed.png',
        ]);
        ProductImage::create([
            'product_id' => 2,
            'image' => 'slider_home01-2.a3f63785.png',
        ]);
        ProductImage::create([
            'product_id' => 2,
            'image' => 'slider_home01-1.60fa60c3.png',
        ]);

        //Produit 3
        ProductImage::create([
            'product_id' => 3,
            'image' => 'slider_3.e8f23f91.jpg',
        ]);
        ProductImage::create([
            'product_id' => 3,
            'image' => 'slider_home01-3.fcf28f1c.png',
        ]);
        ProductImage::create([
            'product_id' => 3,
            'image' => 'slider_home01-4.74a08d5b.png',
        ]);
        ProductImage::create([
            'product_id' => 3,
            'image' => 'IGpost_home1.0d99ea0b.jpg',
        ]);

        //Produit 4
        ProductImage::create([
            'product_id' => 4,
            'image' => 'slider_home01-3.7968701f.jpg',
        ]);
        ProductImage::create([
            'product_id' => 4,
            'image' => 'IGpost_home03.8407ddd7.png',
        ]);
        ProductImage::create([
            'product_id' => 4,
            'image' => 'IGpost_home05.cf86fc3b.png',
        ]);
        ProductImage::create([
            'product_id' => 4,
            'image' => 'IGpost_home02.d1ca89ee.png',
        ]);

        //Produit 5
        ProductImage::create([
            'product_id' => 5,
            'image' => 'slide_fine.b2a895d1.png',
        ]);
        ProductImage::create([
            'product_id' => 5,
            'image' => 'pant.0bac1d9b.png',
        ]);
        ProductImage::create([
            'product_id' => 5,
            'image' => 'hoodie.9d6d5b9c.png',
        ]);
        ProductImage::create([
            'product_id' => 5,
            'image' => 'headwear.a230fc06.png',
        ]);

        //Produit 6
        ProductImage::create([
            'product_id' => 6,
            'image' => 'format.bad97007.png',
        ]);
        ProductImage::create([
            'product_id' => 6,
            'image' => 'slid2.bd8542ed.png',
        ]);
        ProductImage::create([
            'product_id' => 6,
            'image' => 'slider_home01-2.a3f63785.png',
        ]);
        ProductImage::create([
            'product_id' => 6,
            'image' => 'slider_home01-1.60fa60c3.png',
        ]);

        //Produit 7
        ProductImage::create([
            'product_id' => 7,
            'image' => '1674478440category.png',
        ]);
        ProductImage::create([
            'product_id' => 7,
            'image' => 'slider_home01-3.fcf28f1c.png',
        ]);
        ProductImage::create([
            'product_id' => 7,
            'image' => 'slider_home01-4.74a08d5b.png',
        ]);
        ProductImage::create([
            'product_id' => 7,
            'image' => 'IGpost_home1.0d99ea0b.jpg',
        ]);

        //Produit 8
        ProductImage::create([
            'product_id' => 8,
            'image' => '1675024764category.png',
        ]);
        ProductImage::create([
            'product_id' => 8,
            'image' => 'IGpost_home03.8407ddd7.png',
        ]);
        ProductImage::create([
            'product_id' => 8,
            'image' => 'IGpost_home05.cf86fc3b.png',
        ]);
        ProductImage::create([
            'product_id' => 8,
            'image' => 'IGpost_home02.d1ca89ee.png',
        ]);

        //Produit 9
        ProductImage::create([
            'product_id' => 9,
            'image' => '1675024893category.png',
        ]);
        ProductImage::create([
            'product_id' => 9,
            'image' => 'pant.0bac1d9b.png',
        ]);
        ProductImage::create([
            'product_id' => 9,
            'image' => 'hoodie.9d6d5b9c.png',
        ]);
        ProductImage::create([
            'product_id' => 9,
            'image' => 'headwear.a230fc06.png',
        ]);

        //Upsell of Products

        Upsell::create([
            'product_id' => 1,
            'upsell_product_id' => 7,
        ]);
        Upsell::create([
            'product_id' => 1,
            'upsell_product_id' => 8,
        ]);
        Upsell::create([
            'product_id' => 1,
            'upsell_product_id' => 9,
        ]);

        Upsell::create([
            'product_id' => 2,
            'upsell_product_id' => 5,
        ]);
        Upsell::create([
            'product_id' => 2,
            'upsell_product_id' => 6,
        ]);
        Upsell::create([
            'product_id' => 2,
            'upsell_product_id' => 4,
        ]);

        Upsell::create([
            'product_id' => 3,
            'upsell_product_id' => 1,
        ]);
        Upsell::create([
            'product_id' => 3,
            'upsell_product_id' => 7,
        ]);
        Upsell::create([
            'product_id' => 3,
            'upsell_product_id' => 8,
        ]);


        Upsell::create([
            'product_id' => 4,
            'upsell_product_id' => 7,
        ]);
        Upsell::create([
            'product_id' => 4,
            'upsell_product_id' => 2,
        ]);
        Upsell::create([
            'product_id' => 4,
            'upsell_product_id' => 5,
        ]);

        Upsell::create([
            'product_id' => 5,
            'upsell_product_id' => 9,
        ]);
        Upsell::create([
            'product_id' => 5,
            'upsell_product_id' => 2,
        ]);
        Upsell::create([
            'product_id' => 5,
            'upsell_product_id' => 6,
        ]);

        Upsell::create([
            'product_id' => 6,
            'upsell_product_id' => 1,
        ]);
        Upsell::create([
            'product_id' => 6,
            'upsell_product_id' => 8,
        ]);
        Upsell::create([
            'product_id' => 6,
            'upsell_product_id' => 3,
        ]);

        Upsell::create([
            'product_id' => 7,
            'upsell_product_id' => 3,
        ]);
        Upsell::create([
            'product_id' => 7,
            'upsell_product_id' => 5,
        ]);
        Upsell::create([
            'product_id' => 7,
            'upsell_product_id' => 8,
        ]);

        Upsell::create([
            'product_id' => 8,
            'upsell_product_id' => 1,
        ]);
        Upsell::create([
            'product_id' => 8,
            'upsell_product_id' => 2,
        ]);
        Upsell::create([
            'product_id' => 8,
            'upsell_product_id' => 3,
        ]);

        Upsell::create([
            'product_id' => 9,
            'upsell_product_id' => 5,
        ]);
        Upsell::create([
            'product_id' => 9,
            'upsell_product_id' => 3,
        ]);
        Upsell::create([
            'product_id' => 9,
            'upsell_product_id' => 5,
        ]);


    }
}
