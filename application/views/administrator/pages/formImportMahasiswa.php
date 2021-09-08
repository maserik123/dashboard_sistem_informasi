<script>
    console.log('test');
</script>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Import Data Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <a href="<?php echo base_url('formatExcel/FormatDataMahasiswa.xlsx') ?>">Download Format Excel disini !</a> <br><br>
                <form class="user" method="POST" action="<?php echo base_url('administrator/formImportMahasiswa'); ?>" enctype="multipart/form-data">
                    <div class="form-group row">
                        <div class="col-sm-8 mb-3 mb-sm-0">
                            <input type="file" name="file" class="form-control" id="exampleFirstName">
                        </div>
                        <div class="col-sm-4">
                            <input type="submit" class="btn btn-primary btn-sm" name="preview" value="Preview">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
                <?php
                if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form 
                    if (isset($upload_error)) { // Jika proses upload gagal
                        echo "<div style='color: red;'>" . $upload_error . "</div>"; // Muncul pesan error upload
                        die; // stop skrip
                    }



                    // Buat sebuah div untuk alert validasi kosong
                    //                 echo "<div style='color: red;' id='kosong'>
                    // Terdapat <span id='jumlah_kosong'></span> data yang belum lengkap.
                    // <br><br>
                    // </div>";

                    echo "
                    <table border='1' class='table table-responsive table-bordered' cellpadding='8'>

    
    <tr>
      <th>nama_mahasiswa</th>
      <th>kelas_mahasiswa</th>
      <th>tahun_masuk_mahasiswa</th>
      <th>ipk_mahasiswa</th>
      <th>kompen_mahasiswa</th>
      <th>tak_mahasiswa</th>
      <th>ipk_smt_1_mahasiswa</th>
      <th>ipk_smt_2_mahasiswa</th>
      <th>ipk_smt_3_mahasiswa</th>
      <th>ipk_smt_4_mahasiswa</th>
      <th>ipk_smt_5_mahasiswa</th>
      <th>ipk_smt_6_mahasiswa</th>
      <th>ipk_smt_7_mahasiswa</th>
      <th>ipk_smt_8_mahasiswa</th>

    </tr>";
                    // Buat sebuah tag form untuk proses import data ke database
                    echo "<form method='post' action='" . base_url("administrator/import") . "'>";
                    $numrow = 1;
                    $kosong = 0;

                    // Lakukan perulangan dari data yang ada di excel
                    // $sheet adalah variabel yang dikirim dari controller
                    foreach ($sheet as $row) {
                        // Ambil data pada excel sesuai Kolom
                        $nama_mahasiswa = $row['A']; // Ambil data NIS
                        $kelas_mahasiswa = $row['B']; // Ambil data nama
                        $tahun_masuk_mahasiswa = $row['C']; // Ambil data jenis kelamin
                        $ipk_mahasiswa = $row['D']; // Ambil data alamat
                        $kompen_mahasiswa = $row['E']; // Ambil data alamat
                        $tak_mahasiswa = $row['F']; // Ambil data alamat
                        $ipk_smt_1_mahasiswa = $row['G']; // Ambil data alamat
                        $ipk_smt_2_mahasiswa = $row['H']; // Ambil data alamat
                        $ipk_smt_3_mahasiswa = $row['I']; // Ambil data alamat
                        $ipk_smt_4_mahasiswa = $row['J']; // Ambil data alamat
                        $ipk_smt_5_mahasiswa = $row['K']; // Ambil data alamat
                        $ipk_smt_6_mahasiswa = $row['L']; // Ambil data alamat
                        $ipk_smt_7_mahasiswa = $row['M']; // Ambil data alamat
                        $ipk_smt_8_mahasiswa = $row['N']; // Ambil data alamat

                        // Cek jika semua data tidak diisi
                        if ($nama_mahasiswa == "" && $kelas_mahasiswa == "" && $tahun_masuk_mahasiswa == "" && $ipk_mahasiswa == "" && $kompen_mahasiswa == "" && $tak_mahasiswa == "" && $ipk_smt_1_mahasiswa == "" && $ipk_smt_2_mahasiswa == "" && $ipk_smt_3_mahasiswa == "" && $ipk_smt_4_mahasiswa == "" && $ipk_smt_5_mahasiswa == "" && $ipk_smt_6_mahasiswa == "" && $ipk_smt_7_mahasiswa == "" && $ipk_smt_8_mahasiswa == "")
                            continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)


                        // Cek $numrow apakah lebih dari 1
                        // Artinya karena baris pertama adalah nama-nama kolom
                        // Jadi dilewat saja, tidak usah diimport
                        if ($numrow > 1) {
                            // Validasi apakah semua data telah diisi
                            $nama_mahasiswa_td = (!empty($nama_mahasiswa)) ? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                            $kelas_mahasiswa_td = (!empty($kelas_mahasiswa)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                            $tahun_masuk_mahasiswa_td = (!empty($tahun_masuk_mahasiswa)) ? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                            $ipk_mahasiswa_td = (!empty($ipk_mahasiswa)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                            $kompen_mahasiswa_td = (!empty($kompen_mahasiswa)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                            $tak_mahasiswa_td = (!empty($tak_mahasiswa)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                            $ipk_smt_1_mahasiswa_td = (!empty($ipk_smt_1_mahasiswa)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                            $ipk_smt_2_mahasiswa_td = (!empty($ipk_smt_2_mahasiswa)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                            $ipk_smt_3_mahasiswa_td = (!empty($ipk_smt_3_mahasiswa)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                            $ipk_smt_4_mahasiswa_td = (!empty($ipk_smt_4_mahasiswa)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                            $ipk_smt_5_mahasiswa_td = (!empty($ipk_smt_5_mahasiswa)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                            $ipk_smt_6_mahasiswa_td = (!empty($ipk_smt_6_mahasiswa)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                            $ipk_smt_7_mahasiswa_td = (!empty($ipk_smt_7_mahasiswa)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                            $ipk_smt_8_mahasiswa_td = (!empty($ipk_smt_8_mahasiswa)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah

                            // Jika salah satu data ada yang kosong
                            if ($nama_mahasiswa == "" or $kelas_mahasiswa == "" or $tahun_masuk_mahasiswa == "" or $ipk_mahasiswa == "") {
                                $kosong++; // Tambah 1 variabel $kosong
                            }

                            echo "<tr>";
                            echo "<td" . $nama_mahasiswa_td . ">" . $nama_mahasiswa . "</td>";
                            echo "<td" . $kelas_mahasiswa_td . ">" . $kelas_mahasiswa . "</td>";
                            echo "<td" . $tahun_masuk_mahasiswa_td . ">" . $tahun_masuk_mahasiswa . "</td>";
                            echo "<td" . $ipk_mahasiswa_td . ">" . $ipk_mahasiswa . "</td>";
                            echo "<td" . $kompen_mahasiswa_td . ">" . $kompen_mahasiswa . "</td>";
                            echo "<td" . $tak_mahasiswa_td . ">" . $tak_mahasiswa . "</td>";
                            echo "<td" . $ipk_smt_1_mahasiswa_td . ">" . $ipk_smt_1_mahasiswa . "</td>";
                            echo "<td" . $ipk_smt_2_mahasiswa_td . ">" . $ipk_smt_2_mahasiswa . "</td>";
                            echo "<td" . $ipk_smt_3_mahasiswa_td . ">" . $ipk_smt_3_mahasiswa . "</td>";
                            echo "<td" . $ipk_smt_4_mahasiswa_td . ">" . $ipk_smt_4_mahasiswa . "</td>";
                            echo "<td" . $ipk_smt_5_mahasiswa_td . ">" . $ipk_smt_5_mahasiswa . "</td>";
                            echo "<td" . $ipk_smt_6_mahasiswa_td . ">" . $ipk_smt_6_mahasiswa . "</td>";
                            echo "<td" . $ipk_smt_7_mahasiswa_td . ">" . $ipk_smt_7_mahasiswa . "</td>";
                            echo "<td" . $ipk_smt_8_mahasiswa_td . ">" . $ipk_smt_8_mahasiswa . "</td>";

                            echo "</tr>";
                        }

                        $numrow++; // Tambah 1 setiap kali looping
                    }

                    echo "</table>";

                    // Cek apakah variabel kosong lebih dari 0
                    // Jika lebih dari 0, berarti ada data yang masih kosong
                    //     if ($kosong != 0) {
                    // 
                ?>
                    <script>
                        //             $(document).ready(function() {
                        //                 // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                        //                 $("#jumlah_kosong").html('<?php echo $kosong; ?>');

                        //                 $("#kosong").show(); // Munculkan alert validasi kosong
                        //             });
                        //         
                    </script>
                <?php
                    //     } else { // Jika semua data sudah diisi
                    echo "<hr>";

                    // Buat sebuah tombol untuk mengimport data ke database
                    echo "<a href='" . base_url("administrator/mahasiswa") . "' class='btn btn-danger btn-sm'>Batal</a>";
                    echo "<button type='submit' class='btn btn-success btn-sm' name='import'>Mulai Upload Data</button>";
                    // }

                    echo "</form>";
                }
                ?>
            </div>


        </div>
    </div>

</div>