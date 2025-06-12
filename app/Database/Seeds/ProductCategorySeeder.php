<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            $data = [
                'nama_kategori' => $faker->word,
                'jumlah_produk' => $faker->numberBetween(5,50),
                'total_stok' => $faker->numberBetween(97,550),
                'updated_at' => date("Y-m-d H:i:s"),
            ];
            //print_r($data);
            $this->db->table('product_category')->insert($data);
        }
    }
}