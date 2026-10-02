<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Produk extends BaseController
{
    /**
     * Data produk contoh untuk keperluan tema katalog produk.
     */
    private array $daftarProduk = [
        1 => [
            'id'        => 1,
            'nama'      => 'Laptop ASUS Vivobook 14',
            'kategori'  => 'Laptop',
            'harga'     => 'Rp 8.500.000',
            'stok'      => 12,
            'deskripsi' => 'Laptop bertenaga Intel Core i5 dengan RAM 16GB dan SSD 512GB, sangat cocok untuk multitasking dan pemrograman web.',
        ],
        2 => [
            'id'        => 2,
            'nama'      => 'Keyboard Mekanikal RGB 60%',
            'kategori'  => 'Aksesoris',
            'harga'     => 'Rp 650.000',
            'stok'      => 25,
            'deskripsi' => 'Keyboard mekanikal dengan switch responsif, tata cahaya RGB dinamis, dan konektivitas ganda Type-C / Bluetooth.',
        ],
        3 => [
            'id'        => 3,
            'nama'      => 'Mouse Wireless Ergonomis',
            'kategori'  => 'Aksesoris',
            'harga'     => 'Rp 320.000',
            'stok'      => 18,
            'deskripsi' => 'Mouse ergonomis vertikal untuk kenyamanan kerja jangka panjang dan mencegah kelelahan pergelangan tangan.',
        ],
        4 => [
            'id'        => 4,
            'nama'      => 'Monitor UltraWide 29 Inci IPS',
            'kategori'  => 'Monitor',
            'harga'     => 'Rp 3.100.000',
            'stok'      => 7,
            'deskripsi' => 'Monitor 21:9 FHD dengan akurasi warna sRGB 99% dan refresh rate 100Hz, sangat ideal untuk coding dan editing.',
        ],
    ];

    /**
     * Halaman daftar katalog produk.
     */
    public function index(): string
    {
        $data = [
            'title'  => 'Katalog Produk',
            'produk' => $this->daftarProduk,
        ];

        return view('pages/produk', $data);
    }

    /**
     * Halaman detail satu produk dengan route berparameter (:num).
     */
    public function detail(int $id): string
    {
        if (! isset($this->daftarProduk[$id])) {
            throw PageNotFoundException::forPageNotFound("Produk dengan ID {$id} tidak ditemukan.");
        }

        $data = [
            'title' => 'Detail: ' . $this->daftarProduk[$id]['nama'],
            'item'  => $this->daftarProduk[$id],
        ];

        return view('pages/produk_detail', $data);
    }
}
