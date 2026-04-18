<?php

namespace App\Controllers;

class Kontak extends BaseController
{
    // Method untuk menampilkan halaman form kontak
    public function index()
    {
        $data = [
            'title' => 'Hubungi Kami | TechNews Indonesia'
        ];
        
        // Pastikan nama file di sini sesuai dengan nama file View Anda
        return view('kontak', $data); 
    }

    // Method untuk menangani proses submit form
    public function kirim()
    {
        // Di sini biasanya Anda akan menyimpan data ke database 
        // atau mengirim email menggunakan service Email CI4.
        
        // Contoh mengambil data form (jika ingin diproses):
        // $nama = $this->request->getPost('nama');
        // $email = $this->request->getPost('email');
        
        // Karena ini simulasi, kita langsung buat pesan sukses (Flashdata)
        session()->setFlashdata('pesan', 'Terima kasih! Pesan Anda telah berhasil dikirim dan akan segera kami proses.');

        // Kembalikan user ke halaman kontak lagi setelah submit
        return redirect()->to('/kontak');
    }
}

