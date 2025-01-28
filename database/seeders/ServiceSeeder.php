<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Rental Lepas Kunci',
                'description' => 'Layanan sewa mobil lepas kunci dengan sistem 24 jam. Mobil dapat dikendarai sendiri untuk berbagai keperluan Anda. Syarat: KTP, SIM A, dan deposit yang akan dikembalikan setelah mobil kembali dalam kondisi baik.',
                'image' => null,
                'wa_template' => "Halo, saya ingin rental lepas kunci untuk mobil *isi nama mobil*\n\nRencana sewa:\nTanggal: \nDurasi: \n\nMohon info prosedur dan persyaratannya. Terima kasih."
            ],
            [
                'name' => 'Carter Dalam Kota',
                'description' => 'Layanan sewa mobil dengan supir untuk area dalam kota. Paket 12 jam sudah termasuk BBM dan jasa supir. Cocok untuk city tour, acara keluarga, atau keperluan bisnis dalam kota.',
                'image' => null,
                'wa_template' => "Halo, saya ingin carter dalam kota untuk mobil *isi nama mobil*\n\nRencana perjalanan:\nTanggal: \nDurasi: \nTujuan: \n\nMohon info ketersediaan dan biayanya. Terima kasih."
            ],
            [
                'name' => 'Carter Luar Kota',
                'description' => 'Layanan sewa mobil dengan supir untuk perjalanan luar kota. Bebas menentukan rute perjalanan sesuai kebutuhan. Harga sudah termasuk BBM dan jasa supir. Biaya tol dan penginapan supir ditanggung penyewa.',
                'image' => null,
                'wa_template' => "Halo, saya ingin carter luar kota untuk mobil *isi nama mobil*\n\nRencana perjalanan:\nTanggal: \nTujuan: \nDurasi: \n\nMohon info ketersediaan dan total biayanya. Terima kasih."
            ],
            [
                'name' => 'Regular',
                'description' => 'Layanan transportasi sharing antar kota dengan jadwal keberangkatan rutin dan rute tetap. Lebih ekonomis dengan sistem berbagi dengan penumpang lain. Reservasi minimal H-1 keberangkatan.',
                'image' => null,
                'wa_template' => "Halo, saya ingin pesan layanan regular\n\nRencana perjalanan:\nTanggal: \nRute: \nJumlah Penumpang: \n\nMohon info jadwal keberangkatan dan harganya. Terima kasih."
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
