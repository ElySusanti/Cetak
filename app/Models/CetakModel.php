<?php

namespace App\Models;

use CodeIgniter\Model;

class CetakModel extends Model
{
    public function getData1()
    {
        $json_data = file_get_contents("cetak-antrian.json");
        $data = json_decode($json_data, true);

        return $data;
    }
    public function getData2()
    {
        $json_data = file_get_contents("tagihan-pendaftaran.json");
        $data = json_decode($json_data, true);

        return $data;
    }
    public function getData3()
    {
        $json_data = file_get_contents("form-rekam-medis.json");
        $data = json_decode($json_data, true);

        return $data;
    }
    public function getDataById1($no_registration)
    {
        $json_data = file_get_contents("cetak-antrian.json");
        $data = json_decode($json_data, true);
        foreach ($data as $item) {
            if ($item['no_registration'] == $no_registration) {
                return $item;
            }
        }
    }
    public function getDataById2($bill_id)
    {
        $json_data = file_get_contents("tagihan-pendaftaran.json");
        $data = json_decode($json_data, true);
        foreach ($data as $item) {
            if ($item['bill_id'] == $bill_id) {
                return $item;
            }
        }
    }
    public function getDataById3($no_registration)
    {
        $json_data = file_get_contents("form-rekam-medis.json");
        $data = json_decode($json_data, true);
        foreach ($data as $item) {
            if ($item['no_registration'] == $no_registration) {
                return $item;
            }
        }
    }
}
