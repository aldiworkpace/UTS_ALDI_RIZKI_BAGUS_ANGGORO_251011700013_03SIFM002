<?php

namespace Database\Seeders;

use App\Models\Camera;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CameraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cameras = [
            [
                'brand' => 'Sony',
                'model' => 'Alpha A7 III',
                'rent_price' => 350000,
                'image' => 'sony-a7-iii.jpg',
                'description' => 'Kamera mirrorless full-frame dengan fitur autofokus cepat dan kualitas low-light yang sangat mantap, cocok untuk foto-foto sama buat video skala profesional.',
                'type' => 'Mirrorless'
            ],
            [
                'brand' => 'Canon',
                'model' => 'EOS R6',
                'rent_price' => 400000,
                'image' => 'canon-eos-r6.jpg',
                'description' => 'Mirrorless mantap sama fitur In-Body Image Stabilization (IBIS) dan perekaman video hingga 4K 60p.',
                'type' => 'Mirrorless'
            ],
            [
                'brand' => 'Fujifilm',
                'model' => 'X-T4',
                'rent_price' => 275000,
                'image' => 'fujifilm-xt4.jpg',
                'description' => 'Kamera APS-C bergaya klasik dengan fitur Film Simulation khas Fujifilm dan layar vari-angle yang fleksibel.',
                'type' => 'Mirrorless'
            ],
            [
                'brand' => 'Canon',
                'model' => 'EOS 80D',
                'rent_price' => 175000,
                'image' => 'canon-eos-80d.jpg',
                'description' => 'Kamera DSLR serbaguna dengan Dual Pixel CMOS AF yang respon nya mantap, pas untuk kebutuhan foto event dan dokumentasi.',
                'type' => 'DSLR'
            ],
            [
                'brand' => 'Nikon',
                'model' => 'D750',
                'rent_price' => 250000,
                'image' => 'nikon-d750.jpg',
                'description' => 'DSLR full-frame dengan dynamic range luas dan bodi yang mantap untuk pengambilan gambar di luar maupun di dalam studio studio.',
                'type' => 'DSLR'
            ],
            [
                'brand' => 'Sony',
                'model' => 'ZV-E10',
                'rent_price' => 150000,
                'image' => 'sony-zve10.jpg',
                'description' => 'Kamera untuk vlog lensa yang bisa diganti, fitur Product Showcase dan mikrofon directional bawaan yang jernih.',
                'type' => 'Mirrorless'
            ],
            [
                'brand' => 'GoPro',
                'model' => 'Hero 11 Black',
                'rent_price' => 120000,
                'image' => 'gopro-hero-11.jpg',
                'description' => 'camera tahan air dengan stabilisasi HyperSmooth 5.0 dan resolusi video hingga 5.3K untuk aktivitas outdoor dan traveling.',
                'type' => 'Action Camera'
            ],
            [
                'brand' => 'Fujifilm',
                'model' => 'X100V',
                'rent_price' => 300000,
                'image' => 'fujifilm-x100v.jpg',
                'description' => 'Kamera compact premium dengan lensa fix 23mm f/2 dan viewfinder hybrid, favorit untuk street photography dan travel.',
                'type' => 'Compact'
            ],
            [
                'brand' => 'Konica',
                'model' => 'Pop 35mm',
                'rent_price' => 85000,
                'image' => 'konica-pop.jpg',
                'description' => 'Kamera analog point-and-shoot tahun 80-an dengan desain warna merah, fokus tetap, dan flash bawaan untuk hasil foto yang ingin nuansa retro.',
                'type' => 'Analog'
            ],
            [
                'brand' => 'Lumix',
                'model' => 'GH5 II',
                'rent_price' => 280000,
                'image' => 'lumix-gh5-ii.jpg',
                'description' => 'Panasonic Lumix DC-GH5M2 , yang dikenal sebagai Lumix GH5II , adalah kamera mirrorless dengan lensa yang dapat diganti dengan dudukan Micro Four Thirds , yang dirilis oleh Panasonic pada 25 Juni 2021.',
                'type' => 'Mirrorless'
            ],
        ];

        foreach ($cameras as $camera) {
            Camera::create($camera);
        }
    }
}
