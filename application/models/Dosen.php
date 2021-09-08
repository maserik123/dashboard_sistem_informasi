<?php
// Developed By Arniuz Global Asia. arniuz.com
// Student Information System.
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Model
{
    function getAllData()
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->order_by('id_dosen', 'desc');
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
        $this->db->insert_batch('dosen', $data);
    }

    function getDosenAktifPenelitian()
    {
        $this->db->select('count(dosen_aktif_penelitian) as total, tahun');
        $this->db->from('dosen');
        $this->db->group_by('tahun');
        return $this->db->get()->result();
    }

    function getDosenAktifPengabdian()
    {
        $this->db->select('count(dosen_aktif_pengabdian) as total, tahun');
        $this->db->from('dosen');
        $this->db->group_by('tahun');
        return $this->db->get()->result();
    }

    function getDosenAktifPenelitianPertahun($tahun)
    {
        $this->db->select('tahun, dosen_aktif_penelitian , count(dosen_aktif_penelitian) as total');
        $this->db->from('dosen');
        $this->db->group_by('dosen_aktif_penelitian');
        $this->db->where('tahun', $tahun);
        return $this->db->get()->result();
    }

    function getDosenAktifPengabdianPertahun($tahun)
    {
        $this->db->select('tahun, dosen_aktif_pengabdian, count(dosen_aktif_pengabdian) as total');
        $this->db->from('dosen');
        $this->db->group_by('dosen_aktif_pengabdian');
        $this->db->where('tahun', $tahun);
        return $this->db->get()->result();
    }

    function getDosenAktifPublikasiPertahun($tahun)
    {
        $this->db->select('tahun, dosen_aktif_publikasi, count(dosen_aktif_publikasi) as total');
        $this->db->from('dosen');
        $this->db->group_by('dosen_aktif_publikasi');
        $this->db->where('tahun', $tahun);
        return $this->db->get()->result();
    }

    function getDosenAktifPublikasi()
    {
        $this->db->select('count(dosen_aktif_publikasi) as total, tahun');
        $this->db->from('dosen');
        $this->db->group_by('tahun');
        return $this->db->get()->result();
    }

    function getCountDosenAktif($var)
    {
        $this->db->select('count(' . $var . ') as total');
        $this->db->from('dosen');
        $this->db->where('tahun', date('Y'));
        return $this->db->get()->result();
    }
}

/* End of file Dosen.php */
