<?php

namespace App\Controllers;

use App\Models\CetakModel;

class Home extends BaseController
{
    protected $CetakModel;
    public function __construct()
    {
        $this->CetakModel = new CetakModel();
    }
    public function index()
    {
        return view('dashboard');
    }
    public function tampil1()
    {
        $model = $this->CetakModel;
        $data['json'] = $model->getData1();
        return view('tampil/cetak-antrian', $data);
    }
    public function tampil2()
    {
        $model = $this->CetakModel;
        $data['json'] = $model->getData2();
        return view('tampil/tagihan-pendaftaran', $data);
    }
    public function tampil3()
    {
        $model = $this->CetakModel;
        $data['json'] = $model->getData3();
        return view('tampil/form-rekam-medis', $data);
    }
    public function cetak1()
    {
        $model = $this->CetakModel;
        $data['json'] = $model->getDataById1('869740');
        // dd($data);
        return view('cetak/cetak-antrian', $data);
    }
    public function cetak2()
    {
        $model = $this->CetakModel;
        $data['json'] = $model->getDataById2('20230303100908226LHs');
        return view('cetak/tagihan-pendaftaran', $data);
    }
    public function cetak3()
    {
        $model = $this->CetakModel;
        $data['json'] = $model->getDataById3('869740');
        return view('cetak/form-rekam-medis', $data);
    }
}
