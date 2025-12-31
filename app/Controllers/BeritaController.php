<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class BeritaController extends BaseController
{
    protected $beritaModel;

    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Berita',
            'berita' => $this->beritaModel->getBerita()
        ];

        // $komikModel = new KomikModel();

        return view('berita/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Berita',
            'berita' => $this->beritaModel->getBerita($slug)
        ];

        if (empty($data['berita'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul berita "' . $slug . '" tidak ditemukan.');
        }

        return view('berita/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Berita'
        ];

        return view('berita/create', $data);
    }

    public function save()
    {
        $this->beritaModel->save([
            'title' => $this->request->getVar('title'),
            'slug' => url_title($this->request->getVar('title'), '-', true),
            'thumbnail' => $this->request->getVar('thumbnail'),
            'body' => $this->request->getVar('body')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/berita');
    }
}
