<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;
use App\Models\Currency;
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
            'quantity' => 10,
            'length' => 1,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY HEADWARS - WHITE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 2,
            'quantity' => 10,
            'length' => 2,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY PANT - GREEN',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 3,
            'quantity' => 0,
            'length' => 3,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY HOOD - BLUE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 4,
            'quantity' => 10,
            'length' => 4,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY KEEP - ROSE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 1,
            'quantity' => 0,
            'length' => 5,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY TEE - INDIGO',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 2,
            'quantity' => 10,
            'length' => 6,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY HOOD - BLUE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 3,
            'quantity' => 0,
            'length' => 1,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY KEEP - ROSE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 4,
            'quantity' => 10,
            'length' => 2,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY TEE - INDIGO',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 1,
            'quantity' => 0,
            'length' => 3,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY HOODIE - BLACK',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 1,
            'quantity' => 10,
            'length' => 1,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY HEADWARS - WHITE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 2,
            'quantity' => 10,
            'length' => 2,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY PANT - GREEN',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 3,
            'quantity' => 0,
            'length' => 3,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY HOOD - BLUE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 4,
            'quantity' => 10,
            'length' => 4,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY KEEP - ROSE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 1,
            'quantity' => 10,
            'length' => 5,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY TEE - INDIGO',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 2,
            'quantity' => 0,
            'length' => 6,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY HOOD - BLUE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 3,
            'quantity' => 0,
            'length' => 1,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY KEEP - ROSE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 4,
            'quantity' => 10,
            'length' => 2,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY TEE - INDIGO',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 1,
            'quantity' => 10,
            'length' => 3,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY TEE - INDIGO',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 2,
            'quantity' => 0,
            'length' => 6,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY HOOD - BLUE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 3,
            'quantity' => 0,
            'length' => 1,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY KEEP - ROSE',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 4,
            'quantity' => 10,
            'length' => 2,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY TEE - INDIGO',
            'description' => 'Overised fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs',
            'original_price' => 98.00,
            'category_id' => 1,
            'quantity' => 10,
            'length' => 3,
        ]);

        // Images of products

        //Produit 1
        ProductImage::create([
            'product_id' => 1,
            'image' => 'shoes1.jpg',
        ]);

        ProductImage::create([
            'product_id' => 1,
            'image' => 'shoes2.jpg',
        ]);
        ProductImage::create([
            'product_id' => 1,
            'image' => 'shoes3.jpg',
        ]);
        ProductImage::create([
            'product_id' => 1,
            'image' => 'shoes4.jpg',
        ]);

        //Produit 2
        ProductImage::create([
            'product_id' => 2,
            'image' => 'shoes5.jpg',
        ]);
        ProductImage::create([
            'product_id' => 2,
            'image' => 'shoes6.jpg',
        ]);
        ProductImage::create([
            'product_id' => 2,
            'image' => 'shoes7.jpg',
        ]);
        ProductImage::create([
            'product_id' => 2,
            'image' => 'shoes8.jpg',
        ]);

        //Produit 3
        ProductImage::create([
            'product_id' => 3,
            'image' => 'shoes9.jpg',
        ]);
        ProductImage::create([
            'product_id' => 3,
            'image' => 'shoes10.jpg',
        ]);
        ProductImage::create([
            'product_id' => 3,
            'image' => 'shoes11.jpg',
        ]);
        ProductImage::create([
            'product_id' => 3,
            'image' => 'shoes12.jpg',
        ]);

        ProductImage::create([
            'product_id' => 3,
            'image' => 'shoes13.jpg',
        ]);

        //Produit 4
        ProductImage::create([
            'product_id' => 4,
            'image' => 'pant1.jpg',
        ]);
        ProductImage::create([
            'product_id' => 4,
            'image' => 'pant2.jpg',
        ]);
        ProductImage::create([
            'product_id' => 4,
            'image' => 'pant3.jpg',
        ]);
        ProductImage::create([
            'product_id' => 4,
            'image' => 'pant4.jpg',
        ]);

        //Produit 5
        ProductImage::create([
            'product_id' => 5,
            'image' => 'pant5.jpg',
        ]);
        ProductImage::create([
            'product_id' => 5,
            'image' => 'pant6.jpg',
        ]);
        ProductImage::create([
            'product_id' => 5,
            'image' => 'pant7.jpg',
        ]);
        ProductImage::create([
            'product_id' => 5,
            'image' => 'pant8.jpg',
        ]);

        //Produit 6
        ProductImage::create([
            'product_id' => 6,
            'image' => 'pant9.jpg',
        ]);
        ProductImage::create([
            'product_id' => 6,
            'image' => 'pant10.jpg',
        ]);
        ProductImage::create([
            'product_id' => 6,
            'image' => 'pant11.jpg',
        ]);
        ProductImage::create([
            'product_id' => 6,
            'image' => 'pant12.jpg',
        ]);

        //Produit 7
        ProductImage::create([
            'product_id' => 7,
            'image' => 'pant13.jpg',
        ]);
        ProductImage::create([
            'product_id' => 7,
            'image' => 'pant14.jpg',
        ]);
        ProductImage::create([
            'product_id' => 7,
            'image' => 'pant15.jpg',
        ]);
        ProductImage::create([
            'product_id' => 7,
            'image' => 'pant16.jpg',
        ]);

        //Produit 8
        ProductImage::create([
            'product_id' => 8,
            'image' => 'pull1.jpg',
        ]);
        ProductImage::create([
            'product_id' => 8,
            'image' => 'pull2.jpg',
        ]);
        ProductImage::create([
            'product_id' => 8,
            'image' => 'pull3.jpg',
        ]);
        ProductImage::create([
            'product_id' => 8,
            'image' => 'pull4.jpg',
        ]);

        //Produit 9
        ProductImage::create([
            'product_id' => 9,
            'image' => 'pull5.jpg',
        ]);
        ProductImage::create([
            'product_id' => 9,
            'image' => 'pull6.jpg',
        ]);
        ProductImage::create([
            'product_id' => 9,
            'image' => 'pull7.jpg',
        ]);
        ProductImage::create([
            'product_id' => 9,
            'image' => 'pull8.jpg',
        ]);

        //
        ProductImage::create([
            'product_id' => 10,
            'image' => 'pull9.jpg',
        ]);

        ProductImage::create([
            'product_id' => 10,
            'image' => 'pull10.jpg',
        ]);
        ProductImage::create([
            'product_id' => 10,
            'image' => 'pull11.jpg',
        ]);
        ProductImage::create([
            'product_id' => 10,
            'image' => 'pull12.jpg',
        ]);

        //Produit 2
        ProductImage::create([
            'product_id' => 11,
            'image' => 'pull13.jpg',
        ]);
        ProductImage::create([
            'product_id' => 11,
            'image' => 'pull14.jpg',
        ]);
        ProductImage::create([
            'product_id' => 11,
            'image' => 'pull15.jpg',
        ]);
        ProductImage::create([
            'product_id' => 11,
            'image' => 'pull16.jpg',
        ]);

        //Produit 3
        ProductImage::create([
            'product_id' => 12,
            'image' => 'pull17.jpg',
        ]);
        ProductImage::create([
            'product_id' => 12,
            'image' => 'pull18.jpg',
        ]);
        ProductImage::create([
            'product_id' => 12,
            'image' => 'pull19.jpg',
        ]);
        ProductImage::create([
            'product_id' => 12,
            'image' => 'pul20.jpg',
        ]);

        //Produit 4
        ProductImage::create([
            'product_id' => 13,
            'image' => 'pull21.jpg',
        ]);
        ProductImage::create([
            'product_id' => 13,
            'image' => 'pull22.jpg',
        ]);
        ProductImage::create([
            'product_id' => 13,
            'image' => 'pull23.jpg',
        ]);
        ProductImage::create([
            'product_id' => 13,
            'image' => 'pull24.jpg',
        ]);

        //Produit 5
        ProductImage::create([
            'product_id' => 14,
            'image' => 'pull25.jpg',
        ]);
        ProductImage::create([
            'product_id' => 14,
            'image' => 'pull26.jpg',
        ]);
        ProductImage::create([
            'product_id' => 14,
            'image' => 'pull27.jpg',
        ]);
        ProductImage::create([
            'product_id' => 14,
            'image' => 'pull28.jpg',
        ]);

        //Produit 6
        ProductImage::create([
            'product_id' => 15,
            'image' => 'pull29.jpg',
        ]);
        ProductImage::create([
            'product_id' => 15,
            'image' => 'pull30.jpg',
        ]);
        ProductImage::create([
            'product_id' => 15,
            'image' => 'pull31.jpg',
        ]);
        ProductImage::create([
            'product_id' => 15,
            'image' => 'pull32.jpg',
        ]);

        //Produit 7
        ProductImage::create([
            'product_id' => 16,
            'image' => 'pull33.jpg',
        ]);
        ProductImage::create([
            'product_id' => 16,
            'image' => 'pull34.jpg',
        ]);
        ProductImage::create([
            'product_id' => 16,
            'image' => 'pull35.jpg',
        ]);
        ProductImage::create([
            'product_id' => 16,
            'image' => 'pull36.jpg',
        ]);

        //******************************* */

        //Produit 7
        ProductImage::create([
            'product_id' => 17,
            'image' => 'tee1.jpg',
        ]);
        ProductImage::create([
            'product_id' => 17,
            'image' => 'tee2.jpg',
        ]);
        ProductImage::create([
            'product_id' => 17,
            'image' => 'tee3.jpg',
        ]);
        ProductImage::create([
            'product_id' => 17,
            'image' => 'tee4.jpg',
        ]);

        //Produit 7
        ProductImage::create([
            'product_id' => 18,
            'image' => 'tee5.jpg',
        ]);
        ProductImage::create([
            'product_id' => 18,
            'image' => 'tee6.jpg',
        ]);
        ProductImage::create([
            'product_id' => 18,
            'image' => 'tee7.jpg',
        ]);
        ProductImage::create([
            'product_id' => 18,
            'image' => 'tee8.jpg',
        ]);

        //Produit 7
        ProductImage::create([
            'product_id' => 19,
            'image' => 'tee9.jpg',
        ]);
        ProductImage::create([
            'product_id' => 19,
            'image' => 'tee10.jpg',
        ]);
        ProductImage::create([
            'product_id' => 19,
            'image' => 'tee11.jpg',
        ]);
        ProductImage::create([
            'product_id' => 19,
            'image' => 'tee12.jpg',
        ]);

        //Produit 7
        ProductImage::create([
            'product_id' => 20,
            'image' => 'tee13.jpg',
        ]);
        ProductImage::create([
            'product_id' => 20,
            'image' => 'tee14.jpg',
        ]);
        ProductImage::create([
            'product_id' => 20,
            'image' => 'tee15.jpg',
        ]);
        ProductImage::create([
            'product_id' => 20,
            'image' => 'tee16.jpg',
        ]);

        //Produit 7
        ProductImage::create([
            'product_id' => 21,
            'image' => 'tee17.jpg',
        ]);
        ProductImage::create([
            'product_id' => 21,
            'image' => 'tee18.jpg',
        ]);
        ProductImage::create([
            'product_id' => 21,
            'image' => 'tee19.jpg',
        ]);
        ProductImage::create([
            'product_id' => 21,
            'image' => 'tee20.jpg',
        ]);

        //Produit 7
        ProductImage::create([
            'product_id' => 22,
            'image' => 'tee21.jpg',
        ]);
        ProductImage::create([
            'product_id' =>   22,
            'image' => 'tee22.jpg',
        ]);
        ProductImage::create([
            'product_id' => 22,
            'image' => 'tee23.jpg',
        ]);
        ProductImage::create([
            'product_id' => 22,
            'image' => 'tee24.jpg',
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


        //Currencies
        Currency::create ([
            'code' => '€',
            'image' => 'flag-eur.eb1348a4.svg',
        ]);
        Currency::create ([
            'code' => 'CHF',
            'image' => 'flag-swz.dc144f59.svg',
        ]);
        Currency::create ([
            'code' => '£',
            'image' => 'flag-uk.3248720d.svg',
        ]);
        Currency::create ([
            'code' => '$',
            'image' => 'flag-usa.1c85eb67.svg',
        ]);


    }
}
