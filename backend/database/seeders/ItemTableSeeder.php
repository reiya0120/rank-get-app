<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
          'name' => 'pcケース',
          'url' => 'https://item.rakuten.co.jp/travel-depart/various-10-2/',
          'serch_flug' => true
        ]);
    }
}
