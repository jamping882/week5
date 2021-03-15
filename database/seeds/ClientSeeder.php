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
                'name' => 'marklie',
                'address' => 'chuchu',
                'phone' => '03535353',
                'capitalization' => 25353,
                'loan' => 1353
            ],
            [
                'name' => 'albert',
                'address' => 'krukru',
                'phone' => '09090909',
                'capitalization' => 42343,
                'loan' => 30434530000
            ],
            [
                'name' => 'jethor',
                'address' => 'Hhuhu',
                'phone' => '0956485585',
                'capitalization' => 50000,
                'loan' => 535353
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
