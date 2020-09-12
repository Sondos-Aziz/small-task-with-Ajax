<?php

use App\Model\Offer;
use Illuminate\Database\Seeder;

class offerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offer = Offer::create([
            'photo' => '1599925772.jpg',
            'name' => 'offerName',
            'price' => 5000,
            'details' => 'Offer_details',

        ]);

    }
}
