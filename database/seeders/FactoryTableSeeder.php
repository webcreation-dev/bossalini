<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;
use App\Models\Currency;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
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
            'name' => 'PANTS - ALL',
        ]);
        Categories::create([
            'name' => 'HEADWEAR - ALL',
        ]);
        Categories::create([
            'name' => 'HOODIES - ALL',
        ]);
        Categories::create([
            'name' => 'T-SHIRTS - ALL',
        ]);
        Categories::create([
            'name' => 'ACCESSORIES - ALL',
        ]);
        Categories::create([
            'name' => 'KEEP*IT*FLY - ALL',
        ]);

        // Products
        Product::create([
            'name' => 'BOSSALINI FLY HOODIE - BLACK PANTS - BLACK',
            'description' => 'Oversized fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs. 7 oz 65% cotton, 35% polyester twill Embroidered patch front Embroidery left / right / back Adjustable snapback strap Slim fit / size up for relax fit Palette tone: Mustang Brown 100% Cotton body. 480gsm. Model is 186cm and 74kg wearing size Large Made in Portugal Product code: M04199-184',
            'selling_price' => 98.00,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY CAP - BLACK HEADWEAR 1 - BLACK',
            'description' => 'Oversized fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs. 7 oz 65% cotton, 35% polyester twill Embroidered patch front Embroidery left / right / back Adjustable snapback strap Slim fit / size up for relax fit Palette tone: Mustang Brown 100% Cotton body. 480gsm. Model is 186cm and 74kg wearing size Large Made in Portugal Product code: M04199-184',
            'selling_price' => 69.00,
        ]);

        Product::create([
            'name' => 'BOSSALINI FLY HOODIES - BLACK',
            'description' => 'Oversized fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs. 7 oz 65% cotton, 35% polyester twill Embroidered patch front Embroidery left / right / back Adjustable snapback strap Slim fit / size up for relax fit Palette tone: Mustang Brown 100% Cotton body. 480gsm. Model is 186cm and 74kg wearing size Large Made in Portugal Product code: M04199-184',
            'selling_price' => 10000,
        ]);

        Product::create([
            'name' => 'Teeshirts HOODIES - BLACK',
            'description' => 'Oversized fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs. 7 oz 65% cotton, 35% polyester twill Embroidered patch front Embroidery left / right / back Adjustable snapback strap Slim fit / size up for relax fit Palette tone: Mustang Brown 100% Cotton body. 480gsm. Model is 186cm and 74kg wearing size Large Made in Portugal Product code: M04199-184',
            'selling_price' => 566,
        ]);

        Product::create([
            'name' => 'FLY NYLON CAP / BUTTERCREAM',
            'description' => 'Oversized fit hoodie in a heavyweight jersey cotton. Super soft, pre-shrunk and piece dyed for the ultimate jersey. Ribbed hem & cuffs. 7 oz 65% cotton, 35% polyester twill Embroidered patch front Embroidery left / right / back Adjustable snapback strap Slim fit / size up for relax fit Palette tone: Mustang Brown 100% Cotton body. 480gsm. Model is 186cm and 74kg wearing size Large Made in Portugal Product code: M04199-184',
            'selling_price' => 68.00,
        ]);

        // Images of products
        ProductImage::create([
            'product_id' => 1,
            'image' => 'pant-1.jpg',
        ]);
        ProductImage::create([
            'product_id' => 2,
            'image' => 'headwar-1.jpg',
        ]);
        ProductImage::create([
            'product_id' => 3,
            'image' => 'hoodie-1.png',
        ]);
        ProductImage::create([
            'product_id' => 4,
            'image' => 'hoodie-2.png',
        ]);
        ProductImage::create([
            'product_id' => 5,
            'image' => 'tshirt-1.jpg',
        ]);

        // Affection des catégories aux produits
        DB::table("category_products")->insert([
            ["product_id"=>1, "category_id"=>1],
        ]);

        DB::table("category_products")->insert([
            ["product_id"=>2, "category_id"=>2],
        ]);

        DB::table("category_products")->insert([
            ["product_id"=>3, "category_id"=>3],
        ]);
        DB::table("category_products")->insert([
            ["product_id"=>4, "category_id"=>3],
        ]);

        DB::table("category_products")->insert([
            ["product_id"=>5, "category_id"=>4],
        ]);

        DB::table("category_products")->insert([
            ["product_id"=>2, "category_id"=>5],
        ]);

        DB::table("category_products")->insert([
            ["product_id"=>1, "category_id"=>6],
        ]);
        DB::table("category_products")->insert([
            ["product_id"=>2, "category_id"=>6],
        ]);
        DB::table("category_products")->insert([
            ["product_id"=>5, "category_id"=>6],
        ]);

        //Upsell of Products

        Upsell::create([
            'product_id' => 1,
            'upsell_product_id' => 1,
        ]);
        Upsell::create([
            'product_id' => 1,
            'upsell_product_id' => 2,
        ]);
        Upsell::create([
            'product_id' => 1,
            'upsell_product_id' => 5,
        ]);

        Upsell::create([
            'product_id' => 2,
            'upsell_product_id' => 1,
        ]);
        Upsell::create([
            'product_id' => 2,
            'upsell_product_id' => 2,
        ]);
        Upsell::create([
            'product_id' => 2,
            'upsell_product_id' => 5,
        ]);

        Upsell::create([
            'product_id' => 3,
            'upsell_product_id' => 1,
        ]);
        Upsell::create([
            'product_id' => 3,
            'upsell_product_id' => 2,
        ]);
        Upsell::create([
            'product_id' => 3,
            'upsell_product_id' => 5,
        ]);


        Upsell::create([
            'product_id' => 4,
            'upsell_product_id' => 1,
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
            'upsell_product_id' => 1,
        ]);
        Upsell::create([
            'product_id' => 5,
            'upsell_product_id' => 2,
        ]);
        Upsell::create([
            'product_id' => 5,
            'upsell_product_id' => 5,
        ]);

        // Tailles
        DB::table("sizes")->insert([
            ["name"=>"XS"],
            ["name"=>"S"],
            ["name"=>"M"],
            ["name"=>"L"],
            ["name"=>"XL"],
            ["name"=>"XXL"],
        ]);

        // Couleurs
        DB::table("colors")->insert([
            ["code"=>"#F4ECDD"],
            ["code"=>"#50352C"],
            ["code"=>"#7966B6"],
            ["code"=>"#172927"],
            ["code"=>"#54ABEE"],
        ]);


        //Tailles des produits
        DB::table("size_products")->insert([
            ["product_id"=>1,
            "size_id"=>1,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>1,
            "size_id"=>2,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>1,
            "size_id"=>3,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>1,
            "size_id"=>4,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>1,
            "size_id"=>5,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>1,
            "size_id"=>6
            ,"quantity"=>1,
            "price"=>78],
        ]);

        DB::table("size_products")->insert([
            ["product_id"=>2,
            "size_id"=>1,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>2,
            "size_id"=>2,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>2,
            "size_id"=>3,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>2,
            "size_id"=>4,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>2,
            "size_id"=>5,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>2,
            "size_id"=>6,
            "quantity"=>1,
            "price"=>78],
        ]);

        DB::table("size_products")->insert([
            ["product_id"=>3,
            "size_id"=>1,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>3,
            "size_id"=>2,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>3,
            "size_id"=>3,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>3,
            "size_id"=>4,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>3,
            "size_id"=>5,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>3,
            "size_id"=>6,
            "quantity"=>1,
            "price"=>78],
        ]);

        DB::table("size_products")->insert([
            ["product_id"=>4,
            "size_id"=>1,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>4,
            "size_id"=>2,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>4,
            "size_id"=>3,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>4,
            "size_id"=>4,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>4,
            "size_id"=>5,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>4,
            "size_id"=>6,
            "quantity"=>1,
            "price"=>78],
        ]);

        DB::table("size_products")->insert([
            ["product_id"=>5,
            "size_id"=>1,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>5,
            "size_id"=>2,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>5,
            "size_id"=>3,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>5,
            "size_id"=>4,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>5,
            "size_id"=>5,
            "quantity"=>1,
            "price"=>78],
            ["product_id"=>5,
            "size_id"=>6,
            "quantity"=>1,
            "price"=>78],
        ]);

        //Couleurs des produits
        DB::table("color_products")->insert([
            ["product_id"=>1,
            "color_id"=>1,
            "quantity"=>1],
            ["product_id"=>1,
            "color_id"=>2,
            "quantity"=>1],
            ["product_id"=>1,
            "color_id"=>3,
            "quantity"=>1],
            ["product_id"=>1,
            "color_id"=>4,
            "quantity"=>1],
            ["product_id"=>1,
            "color_id"=>5,
            "quantity"=>1],
        ]);

        DB::table("color_products")->insert([
            ["product_id"=>2,
            "color_id"=>1,
            "quantity"=>1],
            ["product_id"=>2,
            "color_id"=>2,
            "quantity"=>1],
            ["product_id"=>2,
            "color_id"=>3,
            "quantity"=>1],
            ["product_id"=>2,
            "color_id"=>4,
            "quantity"=>1],
            ["product_id"=>2,
            "color_id"=>5,
            "quantity"=>1],
        ]);

        DB::table("color_products")->insert([
            ["product_id"=>3,
            "color_id"=>1,
            "quantity"=>1],
            ["product_id"=>3,
            "color_id"=>2,
            "quantity"=>1],
            ["product_id"=>3,
            "color_id"=>3,
            "quantity"=>1],
            ["product_id"=>3,
            "color_id"=>4,
            "quantity"=>1],
            ["product_id"=>3,
            "color_id"=>5,
            "quantity"=>1],
        ]);

        DB::table("color_products")->insert([
            ["product_id"=>4,
            "color_id"=>1,
            "quantity"=>1],
            ["product_id"=>4,
            "color_id"=>2,
            "quantity"=>1],
            ["product_id"=>4,
            "color_id"=>3,
            "quantity"=>1],
            ["product_id"=>4,
            "color_id"=>4,
            "quantity"=>1],
            ["product_id"=>4,
            "color_id"=>5,
            "quantity"=>1],
        ]);

        DB::table("color_products")->insert([
            ["product_id"=>5,
            "color_id"=>1,
            "quantity"=>1],
            ["product_id"=>5,
            "color_id"=>2,
            "quantity"=>1],
            ["product_id"=>5,
            "color_id"=>3,
            "quantity"=>1],
            ["product_id"=>5,
            "color_id"=>4,
            "quantity"=>1],
            ["product_id"=>5,
            "color_id"=>5,
            "quantity"=>1],
        ]);
        //Currencies
        Currency::create ([
            'code' => '€',
            'rate' => '€',
            'image' => 'flag-eur.eb1348a4.svg',
        ]);
        Currency::create ([
            'code' => 'CHF',
            'rate' => 'CHF',
            'image' => 'flag-swz.dc144f59.svg',
        ]);
        Currency::create ([
            'code' => '£',
            'rate' => 'GBP',
            'image' => 'flag-uk.3248720d.svg',
        ]);
        Currency::create ([
            'code' => '$',
            'rate' => 'USD',
            'image' => 'flag-usa.1c85eb67.svg',
        ]);


    }
}
