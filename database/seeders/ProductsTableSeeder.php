<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            Product::create([
                'name' => 'Cafe Aguila Roja',
                'slug' => 'Cafe-Aguila-Roja',
                'details' => 'Cafe Aguila Roja',
                'price' => 16.55,
            ]);
    
            Product::create([
                'name' => 'Harina Doña Arepa',
                'slug' => 'Harina-Doña-Arepa',
                'details' => 'Harina Doña Arepa',
                'price' => 3,39,
            ]);
    
            Product::create([
                'name' => 'Cereal Milo',
                'slug' => 'Cereal-Milo',
                'details' => 'Cereal Milo',
                'price' => 7.49,
            ]);
    
            Product::create([
                'name' => 'Ponque Tradicional Marca Ramo',
                'slug' => 'Ponque-Tradicional-Marca-Ramo',
                'details' => '',
                'price' => 12.39,

            ]);
    
            Product::create([
                'name' => 'Salsa Rosada La Constancia',
                'slug' => 'Salsa-Rosada-La-Constancia',
                'details' => 'Salsa Rosada La Constancia8',
                'price' => 8.39,
            ]);
    
            Product::create([
                'name' => 'Queso Parmesano Alpina',
                'slug' => 'Queso-Parmesano-Alpina',
                'details' => 'Queso Parmesano Alpina',
                'price' => 6.05,
            ]);
    
            Product::create([
                'name' => 'Galletas Ducales Noel',
                'slug' => 'Galletas-Ducales-Noel',
                'details' => 'Galletas Ducales Noel',
                'price' => 6.70,
                'shipping_cost' => 6.79,
                'description' => 'Galletas Ducales Noel',
                'category_id' => 2,
                'brand_id' => 5,
                'image_path' => 'galletas.png'
            ]);
    
            Product::create([
                'name' => 'Leche En Polvo KLIMl',
                'slug' => 'Leche En Polvo KLIM',
                'details' => 'Leche En Polvo KLIM',
                'price' => 7.90,
           
            ]);
    
        

    }
}
