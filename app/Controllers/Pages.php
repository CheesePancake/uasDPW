<?php

namespace App\Controllers;

use App\Models\crudModel;

class Pages extends BaseController
{
    protected $crudModel;
    public function __construct()
    {
        $this->crudModel = new crudModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Kebudayaan Indonesia | HOME'
        ];

        echo view('pages/default', $data);
    }
    public function crud()
    {
        // $orang = $this->crudModel->findAll();
        $data = [
            'title' => 'Postingan baru',
            'post' => $this->crudModel->getDetail()
        ];


        echo view('pages/crud', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah data baru',

        ];
        return view('pages/create', $data);
    }
    public function save()
    {
        // $this->request->getVar();
        $this->crudModel->save([
            'textpos' => $this->request->getVar('textpos'),
            'title' => $this->request->getVar('title'),

            'gambar' => $this->request->getVar('gambar')
        ]);
        session()->setFlashdata('Message', "Data telah berhasil ditambahkan");
        return redirect()->to('/pages/crud');
    }
    public function delete($id)
    {
        $this->crudModel->delete($id);
        return redirect()->to('/pages/crud');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Edit postingan',
            'detail' => $this->crudModel->getDetail($id)

        ];
        return view('pages/edit', $data);
    }
    public function update($id)
    {

        // $this->request->getVar();
        $this->crudModel->save([
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'textpos' => $this->request->getVar('textpos'),
            'gambar' => $this->request->getVar('gambar')
        ]);
        session()->setFlashdata('Message', "postingan telah berhasil diubah");
        return redirect()->to('/pages/crud');
    }
}
