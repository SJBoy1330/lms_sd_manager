<?php defined('BASEPATH') or exit('No direct script access allowed');

class Function_ctl extends MY_Admin
{

    public function __construct()
    {
        parent::__construct();

        // LOAD MODEL
        $this->load->model('sekolah_m');
    }


    public function activasi_sekolah()
    {
        $change = $this->input->post('change');
        $id_sekolah = $this->input->post('id');


        $set['status'] = $change;
        $update = $this->sekolah_m->update($set, $id_sekolah);
        if ($update) {
            echo json_encode(true);
        } else {
            echo json_encode(false);
        }
    }

    public function tambah_sekolah()
    {
        $arrVar['kode'] = 'Kode sekolah';
        $arrVar['username'] = 'Username server';
        $arrVar['password'] = 'Password server';
        $arrVar['server'] = 'Server';
        $arrVar['nama'] = 'Nama sekolah';
        $arrVar['npsm'] = 'NPSM';
        $arrVar['alamat'] = 'Alamat sekolah';
        $arrVar['telpon'] = 'Telpon sekolah';
        $arrVar['telpon_admin'] = 'Telpon admin';
        $arrVar['telpon_keuangan'] = 'Telpon keuangan';
        $arrVar['email'] = 'Email';
        $arrVar['hari_libur_global'] = 'Pilih hari libur';
        $arrVar['lat'] = 'Latitude';
        $arrVar['long'] = 'Longitude';

        foreach ($arrVar as $var => $value) {
            $$var = $this->input->post($var);
            if (!$$var) {
                $data['required'][] = ['req_' . $var, $value . ' tidak boleh kosong !'];
                $arrAccess[] = false;
            } else {
                $arrAccess[] = true;
            }
        }

        if (!in_array(FALSE, $arrAccess)) {
            $arrInsert['kode_sekolah'] = $kode;
            $arrInsert['npsm'] = $npsm;
            $arrInsert['nama_sekolah'] = $nama;
            $arrInsert['logo'] = NULL;
            $arrInsert['username'] = $username;
            $arrInsert['server'] = $server;
            $arrInsert['alamat'] = $alamat;
            $arrInsert['hari_libur'] = json_encode($hari_libur_global);
            $arrInsert['latitude'] = $latitude;
            $arrInsert['longitude'] = $longitude;
            $arrInsert['password'] = $password;
            $arrInsert['status'] = 'Y';
            $arrInsert['create_date'] = date('Y-m-d H:i:s');


            $insert = $this->sekolah_m->insert($arrInsert);
            if ($insert) {
                $data['status'] = true;
                $data['alert']['title'] = 'PEMBERITAHUAN';
                $data['alert']['message'] = 'Berhasil menambah sekolah!';
                echo json_encode($data);
                exit;
            } else {
                $data['status'] = false;
                $data['alert']['title'] = 'PERINGATAN';
                $data['alert']['message'] = 'Gagal menambah sekolah!';
                echo json_encode($data);
                exit;
            }
        } else {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }
    }
}
