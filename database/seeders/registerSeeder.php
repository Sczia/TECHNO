<?php

namespace Database\Seeders;

use App\Models\Register;
use Illuminate\Database\Seeder;

class registerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            'name' => 'Krysia Hernandez',
            'email' => 'krysialee023@gmail.com',
            'phone_number' => '09192054322',
            'occupation' => 'teacher',
            'company' => 'pup calauan',
            'address' => '158 silangan, St. Brgy. Dayap, Calaan, Laguna',
        ];
        Register::create($data);
    }
}
