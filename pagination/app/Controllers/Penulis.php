<?php

namespace App\Controllers;

use App\Models\PenulisModel;
use CodeIgniter\Controller; // Menggunakan CodeIgniter\Controller sebagai BaseController
// use PSpell\Config; // Baris ini sepertinya tidak relevan dan bisa dihapus jika tidak digunakan

class Penulis extends Controller // Mengubah extends BaseController menjadi extends Controller
{
    protected $penulisModel;

    public function __construct()
    {
        // Memastikan model dimuat dengan benar
        $this->penulisModel = new PenulisModel();
    }

    public function index()
    {
        $pageSekarang = $this->request->getVar('page_penulis') ? $this->request->getVar('page_penulis') : 1;
        $kataKunci = $this->request->getVar('keyword');
        if ($kataKunci) {
            $penulis = $this->penulisModel->search($kataKunci);
        } else {
            $penulis = $this->penulisModel;
        }
        $data = [
            'title'       => 'Daftar Penulis',
            // 'penulis' => $this->penulisModel->findAll(), // Baris ini dikomentari
            'penulis'     => $this->penulisModel->paginate(10, 'penulis'),
            'pager'       => $this->penulisModel->pager,
            'pageSekarang' => $pageSekarang
        ];

        return view('penulis/index', $data);
    }
    public function search($kataKunci)
    {
        // Opsi 1: Menggunakan Builder secara bertahap (dikomentari)
        // $builder = $this->table('penulis');
        // $builder->like('name', $kataKunci);
        // return $builder;

        // Opsi 2: Menggunakan method chaining untuk pencarian 'like' pada multiple kolom
        return $this->table('penulis')->like('name', $kataKunci)->orLike('address', $kataKunci);
    }
}
