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
                'name' => 'Toyota Avanza',
                'capacity' => 7,
                'transmission' => 'Manual',
                'description' => 'Toyota Avanza dengan AC dingin, audio bagus, dan kondisi terawat. Cocok untuk keluarga.',
                'image' => null,
                'wa_template' => "Halo, saya ingin menyewa mobil Toyota Avanza.\n\nRencana sewa:\nLayanan: \nTanggal: \nDurasi: \n\nMohon info ketersediaan dan prosedurnya. Terima kasih.",
                'status' => 'available',
                'lepas_kunci_price' => 350000.00,
                'carter_dalam_price' => 450000.00,
                'carter_luar_price' => 900000.00,
                'regular_price' => 150000.00
            ],
            [
                'name' => 'Toyota Calya',
                'capacity' => 7,
                'transmission' => 'Manual',
                'description' => 'Toyota Calya nyaman, irit bahan bakar, AC dingin, cocok untuk perjalanan keluarga.',
                'image' => null,
                'wa_template' => "Halo, saya ingin menyewa mobil Toyota Calya.\n\nRencana sewa:\nLayanan: \nTanggal: \nDurasi: \n\nMohon info ketersediaan dan prosedurnya. Terima kasih.",
                'status' => 'available',
                'lepas_kunci_price' => 300000.00,
                'carter_dalam_price' => 400000.00,
                'carter_luar_price' => 850000.00,
                'regular_price' => 130000.00
            ],
            [
                'name' => 'Daihatsu Xenia',
                'capacity' => 7,
                'transmission' => 'Manual',
                'description' => 'Daihatsu Xenia baru, AC dingin, interior bersih, nyaman untuk perjalanan jauh.',
                'image' => null,
                'wa_template' => "Halo, saya ingin menyewa mobil Daihatsu Xenia.\n\nRencana sewa:\nLayanan: \nTanggal: \nDurasi: \n\nMohon info ketersediaan dan prosedurnya. Terima kasih.",
                'status' => 'available',
                'lepas_kunci_price' => 350000.00,
                'carter_dalam_price' => 450000.00,
                'carter_luar_price' => 900000.00,
                'regular_price' => 150000.00
            ],
            [
                'name' => 'Honda Brio',
                'capacity' => 4,
                'transmission' => 'Automatic',
                'description' => 'Honda Brio irit BBM, lincah di perkotaan, AC dingin, cocok untuk dalam kota.',
                'image' => null,
                'wa_template' => "Halo, saya ingin menyewa mobil Honda Brio.\n\nRencana sewa:\nLayanan: \nTanggal: \nDurasi: \n\nMohon info ketersediaan dan prosedurnya. Terima kasih.",
                'status' => 'available',
                'lepas_kunci_price' => 300000.00,
                'carter_dalam_price' => 400000.00,
                'carter_luar_price' => 800000.00,
                'regular_price' => 120000.00
            ],
            [
                'name' => 'Mitsubishi Xpander',
                'capacity' => 7,
                'transmission' => 'Automatic',
                'description' => 'Mitsubishi Xpander terbaru, kabin luas, sangat nyaman, bagasi lega, cocok untuk keluarga.',
                'image' => null,
                'wa_template' => "Halo, saya ingin menyewa mobil Mitsubishi Xpander.\n\nRencana sewa:\nLayanan: \nTanggal: \nDurasi: \n\nMohon info ketersediaan dan prosedurnya. Terima kasih.",
                'status' => 'available',
                'lepas_kunci_price' => 450000.00,
                'carter_dalam_price' => 550000.00,
                'carter_luar_price' => 1000000.00,
                'regular_price' => 180000.00
            ]
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
