<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Karl Verano',
                'address' => 'Calape',
                'phone' => '09475884938',
                'capitalization' => 100000.00,
                'loan' => 1500.00
            ],

            [
                'name' => 'Chenny',
                'address' => 'United Kingdom',
                'phone' => '092348342342',
                'capitalization' => 550000.00,
                'loan' => 3000.00
            ],
        ];

        foreach($data as $client){
            \App\Client::create($client);
        }
    }
}
