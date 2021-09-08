<script>
    console.log('test');
</script>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Import Data Dosen</h6>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <a href="<?php echo base_url('formatExcel/FormatDosen.xlsx') ?>">Download Format Excel disini !</a> <br><br>
                <form class="user" method="POST" action="<?php echo base_url('administrator/formImportDosen'); ?>" enctype="multipart/form-data">
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
      <th>Tahun</th>
      <th>dosen_aktif_penelitian</th>
      <th>dosen_aktif_pengabdian</th>
      <th>dosen_aktif_publikasi</th>
    </tr>";
                    // Buat sebuah tag form untuk proses import data ke database
                    echo "<form method='post' action='" . base_url("administrator/importDosen") . "'>";
                    $numrow = 1;
                    $kosong = 0;

                    // Lakukan perulangan dari data yang ada di excel
                    // $sheet adalah variabel yang dikirim dari controller
                    foreach ($sheet as $row) {
                        // Ambil data pada excel sesuai Kolom
                        $tahun = $row['A']; // Ambil data NIS
                        $dosen_aktif_penelitian = $row['B']; // Ambil data nama
                        $dosen_aktif_pengabdian = $row['C']; // Ambil data jenis kelamin
                        $dosen_aktif_publikasi = $row['D']; // Ambil data alamat
                        // Cek jika semua data tidak diisi
                        if ($tahun == "" && $dosen_aktif_penelitian == "" && $dosen_aktif_pengabdian == "" && $dosen_aktif_publikasi == "")
                            continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)


                        // Cek $numrow apakah lebih dari 1
                        // Artinya karena baris pertama adalah nama-nama kolom
                        // Jadi dilewat saja, tidak usah diimport
                        if ($numrow > 1) {
                            // Validasi apakah semua data telah diisi
                            $tahun_td = (!empty($tahun)) ? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                            $dosen_aktif_penelitian_td = (!empty($dosen_aktif_penelitian)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                            $dosen_aktif_pengabdian_td = (!empty($dosen_aktif_pengabdian)) ? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                            $dosen_aktif_publikasi_td = (!empty($dosen_aktif_publikasi)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah

                            // Jika salah satu data ada yang kosong
                            if ($tahun == "" or $dosen_aktif_penelitian == "" or $dosen_aktif_pengabdian == "" or $dosen_aktif_publikasi == "") {
                                $kosong++; // Tambah 1 variabel $kosong
                            }

                            echo "<tr>";
                            echo "<td" . $tahun_td . ">" . $tahun . "</td>";
                            echo "<td" . $dosen_aktif_penelitian_td . ">" . $dosen_aktif_penelitian . "</td>";
                            echo "<td" . $dosen_aktif_pengabdian_td . ">" . $dosen_aktif_pengabdian . "</td>";
                            echo "<td" . $dosen_aktif_publikasi_td . ">" . $dosen_aktif_publikasi . "</td>";
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
                    echo "<a href='" . base_url("administrator/dosen") . "' class='btn btn-danger btn-sm'>Batal</a>";
                    echo "<button type='submit' class='btn btn-success btn-sm' name='import'>Mulai Upload Data</button>";
                    // }

                    echo "</form>";
                }
                ?>
            </div>


        </div>
    </div>

</div>