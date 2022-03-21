<?php

namespace Database\Seeders;

use App\Models\Shop;
use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shop = new Shop();
        $shop->status_id = 1;
        $shop->number = 12345;
        $shop->name = 'shop';
        $shop->phone = 123456789;
        $shop->email = 'shop@gmail.com';
        // $shop->password = 123;
        $shop->address = 'Ha Noi';
        $shop->manager = 'Duc';
        // $shop->status = 0;
        $shop->save();
        // Shop::factory(10)->create();
    }
}
