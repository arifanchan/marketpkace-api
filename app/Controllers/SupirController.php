<?php

namespace App\Controllers;

use App\Models\MSupir;

class SupirController extends RestfulController
{
    //Membuat fungsi create supir :
    public function create()
    {
        $data = [
            'nama' => $this->request->getVar('nama'),
            'no_ktp' => $this->request->getVar('no_ktp'),
            'alamat' => $this->request->getVar('alamat'),
            'pengalaman' => $this->request->getVar('pengalaman')
        ];
        $model = new MSupir();
        $model->insert($data);
        $supir = $model->find($model->getInsertID());

        return $this->responseHasil(200, true, $supir);
    }


    //Membuat fungsi list supir : 
    public function list()
    {
        $model = new MSupir();
        $supir = $model->findAll();
        return $this->responseHasil(200, true, $supir);
    }

    //Membuat fungsi tampil supir  : 
    public function detail($id)
    {
        $model = new MSupir();
        $supir = $model->find($id);

        return $this->responseHasil(200, true, $supir);
    }

    //Membuat fungsi update supir : 

    public function ubah($id)
    {
        $data = [
            'nama' => $this->request->getVar('nama'),
            'no_ktp' => $this->request->getVar('no_ktp'),
            'alamat' => $this->request->getVar('alamat'),
            'pengalaman' => $this->request->getVar('pengalaman')
        ];
        $model = new MSupir();
        $model->update($id, $data);
        $supir = $model->find($id);

        return $this->responseHasil(200, true, $supir);
    }


    //Membuat fungsi delete supir :
    public function hapus($id)
    {
        $model = new MSupir();
        $supir = $model->delete($id);

        return $this->responseHasil(200, true, $supir);
    }

}