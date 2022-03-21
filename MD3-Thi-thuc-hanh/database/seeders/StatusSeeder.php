<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shop = new Status();
        $shop->name = 'Hoat Dong';
        $shop->save();

        $shop = new Status();
        $shop->name = 'Ngung Hoat Dong';
        $shop->save();
        // Status::factory(10)->create();
}}
