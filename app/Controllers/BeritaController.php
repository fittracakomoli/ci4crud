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
            'title' => 'Form Tambah Berita',
            'errors' => session('errors'),
        ];

        return view('berita/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} berita harus diisi.'
                ]
            ],
            'body' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} berita harus diisi.'
                ]
            ],
            'thumbnail' => [
                'rules' => 'max_size[thumbnail,1024]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar.',
                    'is_image' => 'File yang dipilih bukan gambar.',
                    'mime_in' => 'File yang dipilih bukan gambar.'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/berita/create')->withInput()->with('validation', $validation);
            return redirect()->to('/berita/create')->with('errors', $this->validator->getErrors());
        }

        $filethumbnail = $this->request->getFile('thumbnail');
        if ($filethumbnail->getError() == 4) {
            $thumbnailName = 'default.png';
        } else {
            $thumbnailName = $filethumbnail->getRandomName();
            $filethumbnail->move('img', $thumbnailName);
        }

        $this->beritaModel->save([
            'title' => $this->request->getVar('title'),
            'slug' => url_title($this->request->getVar('title'), '-', true),
            'thumbnail' => $thumbnailName,
            'body' => $this->request->getVar('body')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/berita');
    }

    public function delete($id)
    {
        $berita = $this->beritaModel->find($id);

        if ($berita['thumbnail'] != 'default.png') {
            unlink('img/' . $berita['thumbnail']);
        }

        $this->beritaModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/berita');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Berita',
            'errors' => session('errors'),
            'berita' => $this->beritaModel->getBerita($slug)
        ];

        return view('berita/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} berita harus diisi.'
                ]
            ],
            'body' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} berita harus diisi.'
                ]
            ],
            'thumbnail' => [
                'rules' => 'max_size[thumbnail,1024]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar.',
                    'is_image' => 'File yang dipilih bukan gambar.',
                    'mime_in' => 'File yang dipilih bukan gambar.'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/berita/create')->withInput()->with('validation', $validation);
            return redirect()->to('/berita/edit/' . $this->request->getVar('slug'))->with('errors', $this->validator->getErrors());
        }

        $filethumbnail = $this->request->getFile('thumbnail');
        if ($filethumbnail->getError() == 4) {
            $thumbnailName = $this->request->getVar('thumbnailLama');
        } else {
            $thumbnailName = $filethumbnail->getRandomName();
            $filethumbnail->move('img', $thumbnailName);
            if ($this->request->getVar('thumbnailLama') != 'default.png') {
                unlink('img/' . $this->request->getVar('thumbnailLama'));
            }
        }

        $this->beritaModel->save([
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'slug' => url_title($this->request->getVar('title'), '-', true),
            'thumbnail' => $thumbnailName,
            'body' => $this->request->getVar('body')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diupdate.');

        return redirect()->to('/berita');
    }
}
