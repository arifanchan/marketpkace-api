<?php

namespace App\Controllers;

use App\Models\MMobil;

class MobilController extends RestfulController
{
    //Membuat fungsi create mobil :
    public function create()
    {
        $data = [
            'tipe_mobil' => $this->request->getVar('tipe_mobil'),
            'merk_mobil' => $this->request->getVar('merk_mobil'),
            'no_plat' => $this->request->getVar('no_plat'),
            'harga_sewa' => $this->request->getVar('harga_sewa'),
        ];
        $model = new MMobil();
        $model->insert($data);
        $mobil = $model->find($model->getInsertID());

        return $this->responseHasil(200, true, $mobil);
    }


    //Membuat fungsi list mobil : 
    public function list()
    {
        $model = new MMobil();
        $mobil = $model->findAll();
        return $this->responseHasil(200, true, $mobil);
    }

    //Membuat fungsi tampil mobil  : 
    public function detail($id)
    {
        $model = new MMobil();
        $mobil = $model->find($id);

        return $this->responseHasil(200, true, $mobil);
    }

    //Membuat fungsi update mobil : 

    public function ubah($id)
    {
        $data = [
            'tipe_mobil' => $this->request->getVar('tipe_mobil'),
            'merk_mobil' => $this->request->getVar('merk_mobil'),
            'no_plat' => $this->request->getVar('no_plat'),
            'harga_sewa' => $this->request->getVar('harga_sewa'),
        ];
        $model = new MMobil();
        $model->update($id, $data);
        $mobil = $model->find($id);

        return $this->responseHasil(200, true, $mobil);
    }


    //Membuat fungsi delete mobil :
    public function hapus($id)
    {
        $model = new MMobil();
        $mobil = $model->delete($id);

        return $this->responseHasil(200, true, $mobil);
    }

}