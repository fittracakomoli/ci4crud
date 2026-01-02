<?php

namespace App\Controllers;

use App\Models\OrangModel;

class OrangController extends BaseController
{
    protected $orangModel;
    public function __construct()
    {
        $this->orangModel = new OrangModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Orang',
            'orang' => $this->orangModel->paginate(5, 'orang'),
            'pager' => $this->orangModel->pager
        ];

        // $komikModel = new KomikModel();

        return view('orang/index', $data);
    }
}
