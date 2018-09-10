<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            DB::table('items')->truncate();
            DB::table('items')->insert([
                [
                    'id' => 1,
                    'link' => 'https://c1.staticflickr.com/1/864/39597154120_212fe06071_k.jpg',
                    'product_id' => 1,
                    'created_at' => now()->format('Y-m-d H:i:s'),
                    'updated_at' => now()->format('Y-m-d H:i:s')
                ],
                [
                    'id' => 2,
                    'link' => 'https://c1.staticflickr.com/1/891/26454254767_413e2511dc_k.jpg',
                   'product_id' => 2,
                    'created_at' => now()->format('Y-m-d H:i:s'),
                    'updated_at' => now()->format('Y-m-d H:i:s')
                ],
                [
                    'id' => 3,
                    'link' => 'https://c1.staticflickr.com/2/1727/41904599135_bca083dca9_k.jpg',
                    'product_id' => 3,
                    'created_at' => now()->format('Y-m-d H:i:s'),
                    'updated_at' => now()->format('Y-m-d H:i:s')
                ],
                [
                    'id' => 4,
                    'link' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/bBJYAJJkGJk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
                    'product_id' => 4,
                    'created_at' => now()->format('Y-m-d H:i:s'),
                    'updated_at' => now()->format('Y-m-d H:i:s')
                ],
                [
                    'id' => 5,
                    'link' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/Pb87RpgHJ-o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
                    'product_id' => 5,
                    'created_at' => now()->format('Y-m-d H:i:s'),
                    'updated_at' => now()->format('Y-m-d H:i:s')
                ],
                [
                    'id' => 6,
                    'link' => 'https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.0-9/32286566_2021339298128228_1240300234832084992_n.jpg?_nc_cat=0&oh=5a2abaf5281e02eb5b41147ebfeec886&oe=5BF318AF',
                    'product_id' => 6,
                    'created_at' => now()->format('Y-m-d H:i:s'),
                    'updated_at' => now()->format('Y-m-d H:i:s')
                ]]);
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
