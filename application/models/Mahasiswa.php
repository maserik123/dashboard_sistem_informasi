<?php
// Developed By Arniuz Global Asia. arniuz.com
// Student Information System.
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Model
{

    function getAllData()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->order_by('id_mahasiswa', 'desc');
        return $this->db->get()->result();
    }

    public function upload_file($filename)
    {
        $this->load->library('upload'); // Load librari upload

        $config['upload_path'] = './excel/';
        $config['allowed_types'] = 'xlsx';
        $config['max_size']  = '2048';
        $config['overwrite'] = true;
        $config['file_name'] = $filename;

        $this->upload->initialize($config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('file')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }


    public function insert_multiple($data)
    {
        $this->db->insert_batch('mahasiswa', $data);
    }

    function ipkTertinggi()
    {
        $this->db->select('nama_mahasiswa, tahun_masuk_mahasiswa');
        $this->db->from('mahasiswa');
        $this->db->order_by('ipk_mahasiswa', 'desc');
        $this->db->where('ipk_mahasiswa > 3');
        $this->db->where('tahun_masuk_mahasiswa', (date('Y') - 1));
        $this->db->limit(1);

        return $this->db->get()->result();
    }

    function ipkTerendah()
    {
        $this->db->select('nama_mahasiswa, tahun_masuk_mahasiswa');
        $this->db->from('mahasiswa');
        $this->db->order_by('ipk_mahasiswa', 'asc');
        $this->db->where('ipk_mahasiswa < 3');
        $this->db->where('tahun_masuk_mahasiswa', (date('Y') - 1));
        $this->db->limit(1);

        return $this->db->get()->result();
    }



    function getIPKLebih3()
    {
        $this->db->select('count(id_mahasiswa) as total, ipk_mahasiswa, tahun_masuk_mahasiswa');
        $this->db->from('mahasiswa');
        $this->db->group_by('tahun_masuk_mahasiswa');
        $this->db->where('ipk_mahasiswa >= 3');
        return $this->db->get()->result();
    }

    function getIPKKurang3()
    {
        $this->db->select('count(id_mahasiswa) as total, ipk_mahasiswa, tahun_masuk_mahasiswa');
        $this->db->from('mahasiswa');
        $this->db->group_by('tahun_masuk_mahasiswa');
        $this->db->where('ipk_mahasiswa <= 3');
        return $this->db->get()->result();
    }

    function getKompenByKelas($tahun)
    {
        $this->db->select('count(id_mahasiswa) as total, kelas_mahasiswa, tahun_masuk_mahasiswa');
        $this->db->from('mahasiswa');
        $this->db->group_by('kelas_mahasiswa');
        $this->db->where('tahun_masuk_mahasiswa', $tahun);
        return $this->db->get()->result();
    }

    public function getKelasMhs()
    {
        $this->db->select('kelas_mahasiswa');
        $this->db->from('mahasiswa');
        $this->db->group_by('kelas_mahasiswa');
        $this->db->order_by('kelas_mahasiswa', 'desc');
        return $this->db->get()->result();
    }

    function getTAKMhsPerKelas($kelas)
    {
        $this->db->select('nama_mahasiswa, kelas_mahasiswa, tak_mahasiswa');
        $this->db->from('mahasiswa');
        $this->db->where('kelas_mahasiswa', $kelas);
        return $this->db->get()->result();
    }

    function getIPKSemester($kelas)
    {
        $this->db->select('nama_mahasiswa, kelas_mahasiswa, ipk_smt_1_mahasiswa, ipk_smt_2_mahasiswa, ipk_smt_3_mahasiswa, ipk_smt_4_mahasiswa, ipk_smt_5_mahasiswa, ipk_smt_6_mahasiswa, ipk_smt_7_mahasiswa, ipk_smt_8_mahasiswa');
        $this->db->from('mahasiswa');
        $this->db->where('kelas_mahasiswa', $kelas);
        return $this->db->get()->result();
    }
}

/* End of file Mahasiswa.php */
