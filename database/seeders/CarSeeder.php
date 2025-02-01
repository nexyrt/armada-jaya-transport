<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        $cars = [
            [
                'name' => 'Daihatsu Sigra',
                'capacity' => 6,
                'transmission' => 'Manual/Matic',
                'description' => 'Mobil compact yang nyaman dan irit bahan bakar. Ideal untuk perjalanan keluarga dalam kota.',
                'features' => json_encode([
                    'AC',
                    'Audio System',
                    'USB Port',
                    'Electric Mirror'
                ]),
                'order' => 1,
                'status' => 'available',
                'wa_link' => 'https://wa.me/6281222449999?text=' . urlencode("Halo, saya tertarik dengan rental mobil Sigra\n\nMohon informasi ketersediaan dan prosedurnya. Terima kasih.")
            ],
            [
                'name' => 'Toyota Avanza',
                'capacity' => 7,
                'transmission' => 'Manual/Matic',
                'description' => 'MPV andalan keluarga Indonesia dengan kabin luas dan performa handal.',
                'features' => json_encode([
                    'AC',
                    'Audio System',
                    'USB Port',
                    'Electric Mirror',
                    'Rear AC'
                ]),
                'order' => 2,
                'status' => 'available',
                'wa_link' => 'https://wa.me/6281222449999?text=' . urlencode("Halo, saya tertarik dengan rental mobil Avanza\n\nMohon informasi ketersediaan dan prosedurnya. Terima kasih.")
            ],
            [
                'name' => 'Daihatsu Xenia',
                'capacity' => 7,
                'transmission' => 'Manual/Matic',
                'description' => 'MPV dengan desain modern, kabin nyaman, dan fitur keselamatan lengkap.',
                'features' => json_encode([
                    'AC',
                    'Audio System',
                    'USB Port',
                    'Electric Mirror',
                    'Rear AC'
                ]),
                'order' => 3,
                'status' => 'available',
                'wa_link' => 'https://wa.me/6281222449999?text=' . urlencode("Halo, saya tertarik dengan rental mobil Xenia\n\nMohon informasi ketersediaan dan prosedurnya. Terima kasih.")
            ],
            [
                'name' => 'Toyota Innova Klasik',
                'capacity' => 7,
                'transmission' => 'Manual',
                'description' => 'MPV premium dengan kenyamanan terbaik dan ruang kabin yang luas.',
                'features' => json_encode([
                    'AC',
                    'Audio System',
                    'USB Port',
                    'Electric Mirror',
                    'Rear AC',
                    'Arm Rest'
                ]),
                'order' => 4,
                'status' => 'available',
                'wa_link' => 'https://wa.me/6281222449999?text=' . urlencode("Halo, saya tertarik dengan rental mobil Innova Klasik\n\nMohon informasi ketersediaan dan prosedurnya. Terima kasih.")
            ],
            [
                'name' => 'Toyota Innova Reborn',
                'capacity' => 7,
                'transmission' => 'Matic',
                'description' => 'MPV premium generasi terbaru dengan teknologi modern dan kenyamanan maksimal.',
                'features' => json_encode([
                    'AC',
                    'Audio System',
                    'USB Port',
                    'Electric Mirror',
                    'Rear AC',
                    'Arm Rest',
                    'Smart Entry',
                    'Cruise Control'
                ]),
                'order' => 5,
                'status' => 'available',
                'wa_link' => 'https://wa.me/6281222449999?text=' . urlencode("Halo, saya tertarik dengan rental mobil Innova Reborn\n\nMohon informasi ketersediaan dan prosedurnya. Terima kasih.")
            ]
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
