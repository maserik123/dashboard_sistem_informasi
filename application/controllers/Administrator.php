<?php
// Developed By Arniuz Global Asia. arniuz.com
// Student Information System.
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    private $filename = "import_data"; // Untuk deklarasi nama file import data


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa');
        $this->load->model('Dosen');
        // $this->load->library('google');
        $this->load->model('User');
        $this->load->helper('notif&log');
        $this->load->helper('my_function');
        // Load user model
    }


    function index()
    {


        $userOnById = $this->User->getOnlineUserById($this->session->userdata('id'));
        $temp       = $this->User->getuserById($this->session->userdata('id'));
        if (!$this->session->userdata('loggedIn')) {
            $this->session->set_flashdata('result_login', 'Silahkan Log in untuk mengakses sistem !');
            redirect('/auth/');
        } else if ($temp[0]->online_status != "online") {
            $this->session->set_flashdata('result_login', 'Silahkan Log in kembali untuk mengakses sistem !');
            redirect('auth/force_logout');
        } else if (count_time_since(strtotime($userOnById[0]->time_online)) > 7100) {
            $this->session->set_flashdata('result_login', 'Silahkan Log in kembali untuk mengakses sistem !');
            redirect('auth/force_logout');
        } else {

            $view['title'] = 'Halaman Mahasiswa';
            $view['pageName'] = 'beranda';
            $view['ipkTertinggi'] = $this->Mahasiswa->ipkTertinggi();
            $view['ipkTerendah'] = $this->Mahasiswa->ipkTerendah();
            $view['dosenPenelitian'] = $this->Dosen->getCountDosenAktif('dosen_aktif_penelitian');
            $view['dosenPengabdian'] = $this->Dosen->getCountDosenAktif('dosen_aktif_pengabdian');
            $view['dosenPublikasi'] = $this->Dosen->getCountDosenAktif('dosen_aktif_publikasi');


            $this->load->view('administrator/index', $view);
        }
    }

    function visualisasiMahasiswa($tahun = 2020)
    {

        $userOnById = $this->User->getOnlineUserById($this->session->userdata('id'));
        $temp       = $this->User->getuserById($this->session->userdata('id'));
        if (!$this->session->userdata('loggedIn')) {
            $this->session->set_flashdata('result_login', 'Silahkan Log in untuk mengakses sistem !');
            redirect('/auth/');
        } else if ($temp[0]->online_status != "online") {
            $this->session->set_flashdata('result_login', 'Silahkan Log in kembali untuk mengakses sistem !');
            redirect('auth/force_logout');
        } else if (count_time_since(strtotime($userOnById[0]->time_online)) > 7100) {
            $this->session->set_flashdata('result_login', 'Silahkan Log in kembali untuk mengakses sistem !');
            redirect('auth/force_logout');
        } else {

            if (!empty($tahun)) {
                $view['tahun'] = $tahun;
            }

            $kelas = $this->input->post('kelas_mahasiswa');
            $view['kelas'] = $kelas;

            $kelas1 = $this->input->post('kelas_ipk');
            $view['kelas1'] = $kelas1;

            $view['title'] = 'Halaman Mahasiswa';
            $view['pageName'] = 'visualisasiMahasiswa';
            $view['getIPKLebih3'] = $this->Mahasiswa->getIPKLebih3();
            $view['getIPKKurang3'] = $this->Mahasiswa->getIPKKurang3();
            $view['getKompenByKelas'] = $this->Mahasiswa->getKompenByKelas($tahun);
            $view['getKelasMhs'] = $this->Mahasiswa->getKelasMhs();
            $view['getTAKMhsPerKelas'] = $this->Mahasiswa->getTAKMhsPerKelas($kelas);
            $view['getIPKSemester'] = $this->Mahasiswa->getIPKSemester($kelas1);

            $this->load->view('administrator/index', $view);
        }
    }

    function visualisasiDosen($tahun = 2021)
    {
        $userOnById = $this->User->getOnlineUserById($this->session->userdata('id'));
        $temp       = $this->User->getuserById($this->session->userdata('id'));
        if (!$this->session->userdata('loggedIn')) {
            $this->session->set_flashdata('result_login', 'Silahkan Log in untuk mengakses sistem !');
            redirect('/auth/');
        } else if ($temp[0]->online_status != "online") {
            $this->session->set_flashdata('result_login', 'Silahkan Log in kembali untuk mengakses sistem !');
            redirect('auth/force_logout');
        } else if (count_time_since(strtotime($userOnById[0]->time_online)) > 7100) {
            $this->session->set_flashdata('result_login', 'Silahkan Log in kembali untuk mengakses sistem !');
            redirect('auth/force_logout');
        } else {

            if (!empty($tahun)) {
                $view['tahun'] = $tahun;
            }

            $kelas = $this->input->post('kelas_mahasiswa');
            $view['kelas'] = $kelas;

            $kelas1 = $this->input->post('kelas_ipk');
            $view['kelas1'] = $kelas1;

            $view['title'] = 'Halaman Visualisasi Dosen';
            $view['pageName'] = 'visualisasiDosen';
            $view['getDosenAktifPenelitianPertahun'] = $this->Dosen->getDosenAktifPenelitianPertahun($tahun);
            $view['getDosenAktifPengabdianPertahun'] = $this->Dosen->getDosenAktifPengabdianPertahun($tahun);
            $view['getDosenAktifPublikasiPertahun'] = $this->Dosen->getDosenAktifPublikasiPertahun($tahun);
            $view['trenDosenPengabdian'] = $this->Dosen->getDosenAktifPengabdian();

            $this->load->view('administrator/index', $view);
        }
    }

    // Bagian Mahasiswa
    function mahasiswa($param = '', $id = '')
    {


        $userOnById = $this->User->getOnlineUserById($this->session->userdata('id'));
        $temp       = $this->User->getuserById($this->session->userdata('id'));
        if (!$this->session->userdata('loggedIn')) {
            $this->session->set_flashdata('result_login', 'Silahkan Log in untuk mengakses sistem !');
            redirect('/auth/');
        } else if ($temp[0]->online_status != "online") {
            $this->session->set_flashdata('result_login', 'Silahkan Log in kembali untuk mengakses sistem !');
            redirect('auth/force_logout');
        } else if (count_time_since(strtotime($userOnById[0]->time_online)) > 7100) {
            $this->session->set_flashdata('result_login', 'Silahkan Log in kembali untuk mengakses sistem !');
            redirect('auth/force_logout');
        } else {

            $view['title'] = 'Halaman Mahasiswa';
            $view['pageName'] = 'mahasiswa';
            $view['getDataMahasiswa'] = $this->Mahasiswa->getAllData();

            $this->load->view('administrator/index', $view);
        }
    }

    public function formImportMahasiswa()
    {

        $userOnById = $this->User->getOnlineUserById($this->session->userdata('id'));
        $temp       = $this->User->getuserById($this->session->userdata('id'));
        if (!$this->session->userdata('loggedIn')) {
            $this->session->set_flashdata('result_login', 'Silahkan Log in untuk mengakses sistem !');
            redirect('/auth/');
        } else if ($temp[0]->online_status != "online") {
            $this->session->set_flashdata('result_login', 'Silahkan Log in kembali untuk mengakses sistem !');
            redirect('auth/force_logout');
        } else if (count_time_since(strtotime($userOnById[0]->time_online)) > 7100) {
            $this->session->set_flashdata('result_login', 'Silahkan Log in kembali untuk mengakses sistem !');
            redirect('auth/force_logout');
        } else {
            $data = array(); // Buat variabel $data sebagai array
            $data['title'] = "Halaman Import Data Mahasiswa";
            $data['pageName'] = 'formImportMahasiswa';


            if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form
                // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
                $upload = $this->Mahasiswa->upload_file($this->filename);

                if ($upload['result'] == "success") { // Jika proses upload sukses
                    // Load plugin PHPExcel nya
                    include APPPATH . 'third_party/PHPExcel.php';

                    $excelreader = new PHPExcel_Reader_Excel2007();
                    $loadexcel = $excelreader->load('excel/' . $this->filename . '.xlsx'); // Load file yang tadi diupload ke folder excel
                    $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

                    // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
                    // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
                    $data['sheet'] = $sheet;
                } else { // Jika proses upload gagal
                    $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
                }
            }

            $this->load->view('administrator/index', $data);
        }
    }

    public function import()
    {
        // Load plugin PHPExcel nya
        include APPPATH . 'third_party/PHPExcel.php';

        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('excel/' . $this->filename . '.xlsx'); // Load file yang telah diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

        // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
        $data = array();

        $numrow = 1;
        foreach ($sheet as $row) {
            // Cek $numrow apakah lebih dari 1
            // Artinya karena baris pertama adalah nama-nama kolom
            // Jadi dilewat saja, tidak usah diimport
            if ($numrow > 1) {
                // Kita push (add) array data ke variabel data
                array_push($data, array(
                    'nama_mahasiswa' => $row['A'], // Insert data nis dari kolom A di excel
                    'kelas_mahasiswa' => $row['B'], // Insert data nama dari kolom B di excel
                    'tahun_masuk_mahasiswa' => $row['C'], // Insert data jenis kelamin dari kolom C di excel
                    'ipk_mahasiswa' => $row['D'], // Insert data alamat dari kolom D di excel
                    'kompen_mahasiswa' => $row['E'], // Insert data alamat dari kolom D di excel
                    'tak_mahasiswa' => $row['F'], // Insert data alamat dari kolom D di excel
                    'ipk_smt_1_mahasiswa' => $row['G'], // Insert data alamat dari kolom D di excel
                    'ipk_smt_2_mahasiswa' => $row['H'], // Insert data alamat dari kolom D di excel
                    'ipk_smt_3_mahasiswa' => $row['I'], // Insert data alamat dari kolom D di excel
                    'ipk_smt_4_mahasiswa' => $row['J'], // Insert data alamat dari kolom D di excel
                    'ipk_smt_5_mahasiswa' => $row['K'], // Insert data alamat dari kolom D di excel
                    'ipk_smt_6_mahasiswa' => $row['L'], // Insert data alamat dari kolom D di excel
                    'ipk_smt_7_mahasiswa' => $row['M'], // Insert data alamat dari kolom D di excel
                    'ipk_smt_8_mahasiswa' => $row['N'], // Insert data alamat dari kolom D di excel
                ));
            }

            $numrow++; // Tambah 1 setiap kali looping
        }
        // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
        $this->Mahasiswa->insert_multiple($data);

        redirect("Administrator/mahasiswa"); // Redirect ke halaman awal (ke controller siswa fungsi index)
    }

    // End Bagian mahasiswa


    // Bagian Dosen
    function dosen($param = '', $id = '')
    {


        $userOnById = $this->User->getOnlineUserById($this->session->userdata('id'));
        $temp       = $this->User->getuserById($this->session->userdata('id'));
        if (!$this->session->userdata('loggedIn')) {
            $this->session->set_flashdata('result_login', 'Silahkan Log in untuk mengakses sistem !');
            redirect('/auth/');
        } else if ($temp[0]->online_status != "online") {
            $this->session->set_flashdata('result_login', 'Silahkan Log in kembali untuk mengakses sistem !');
            redirect('auth/force_logout');
        } else if (count_time_since(strtotime($userOnById[0]->time_online)) > 7100) {
            $this->session->set_flashdata('result_login', 'Silahkan Log in kembali untuk mengakses sistem !');
            redirect('auth/force_logout');
        } else {

            $view['title'] = 'Halaman Dosen';
            $view['pageName'] = 'dosen';
            $view['getDataDosen'] = $this->Dosen->getAllData();

            $this->load->view('administrator/index', $view);
        }
    }

    public function formImportDosen()
    {

        $userOnById = $this->User->getOnlineUserById($this->session->userdata('id'));
        $temp       = $this->User->getuserById($this->session->userdata('id'));
        if (!$this->session->userdata('loggedIn')) {
            $this->session->set_flashdata('result_login', 'Silahkan Log in untuk mengakses sistem !');
            redirect('/auth/');
        } else if ($temp[0]->online_status != "online") {
            $this->session->set_flashdata('result_login', 'Silahkan Log in kembali untuk mengakses sistem !');
            redirect('auth/force_logout');
        } else if (count_time_since(strtotime($userOnById[0]->time_online)) > 7100) {
            $this->session->set_flashdata('result_login', 'Silahkan Log in kembali untuk mengakses sistem !');
            redirect('auth/force_logout');
        } else {
            $data = array(); // Buat variabel $data sebagai array
            $data['title'] = "Halaman Import Data Mahasiswa";
            $data['pageName'] = 'formImportDosen';


            if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form
                // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
                $upload = $this->Mahasiswa->upload_file($this->filename);

                if ($upload['result'] == "success") { // Jika proses upload sukses
                    // Load plugin PHPExcel nya
                    include APPPATH . 'third_party/PHPExcel.php';

                    $excelreader = new PHPExcel_Reader_Excel2007();
                    $loadexcel = $excelreader->load('excel/' . $this->filename . '.xlsx'); // Load file yang tadi diupload ke folder excel
                    $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

                    // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
                    // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
                    $data['sheet'] = $sheet;
                } else { // Jika proses upload gagal
                    $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
                }
            }

            $this->load->view('administrator/index', $data);
        }
    }

    public function importDosen()
    {
        // Load plugin PHPExcel nya
        include APPPATH . 'third_party/PHPExcel.php';

        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('excel/' . $this->filename . '.xlsx'); // Load file yang telah diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

        // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
        $data = array();

        $numrow = 1;
        foreach ($sheet as $row) {
            // Cek $numrow apakah lebih dari 1
            // Artinya karena baris pertama adalah nama-nama kolom
            // Jadi dilewat saja, tidak usah diimport
            if ($numrow > 1) {
                // Kita push (add) array data ke variabel data
                array_push($data, array(
                    'tahun' => $row['A'], // Insert data nis dari kolom A di excel
                    'dosen_aktif_penelitian' => $row['B'], // Insert data nama dari kolom B di excel
                    'dosen_aktif_pengabdian' => $row['C'], // Insert data jenis kelamin dari kolom C di excel
                    'dosen_aktif_publikasi' => $row['D'], // Insert data alamat dari kolom D di excel
                ));
            }

            $numrow++; // Tambah 1 setiap kali looping
        }
        // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
        $this->Dosen->insert_multiple($data);

        redirect("Administrator/dosen"); // Redirect ke halaman awal (ke controller siswa fungsi index)
    }

    // End Bagian Dosen
}

/* End of file Mahasiswa.php */
