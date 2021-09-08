<script>
    console.log('test');
</script>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Mahasiswa</h1>
    <div class="col-md-12">
        <div class="text-right">
            <button class="btn btn-primary btn-sm" onclick="window.location = '<?php echo base_url('administrator/formImportMahasiswa'); ?>'" type="button"> <i class="fas fa-fw fa-upload"></i> Import Data</button>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Kelas Mahasiswa</th>
                            <th>Tahun Masuk</th>
                            <th>IPK Mahasiswa</th>
                            <th>Kompen Mahasiswa</th>
                            <th>TAK Mahasiswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($getDataMahasiswa as $r) { ?>
                            <tr>
                                <td><?php echo ++$no; ?></td>
                                <td><?php echo $r->nama_mahasiswa; ?></td>
                                <td><?php echo $r->kelas_mahasiswa; ?></td>
                                <td><?php echo $r->tahun_masuk_mahasiswa; ?></td>
                                <td><?php echo $r->ipk_mahasiswa; ?></td>
                                <td><?php echo $r->kompen_mahasiswa; ?></td>
                                <td><?php echo $r->tak_mahasiswa; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data IPK Persemester</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Semester 1</th>
                            <th>Semester 2</th>
                            <th>Semester 3</th>
                            <th>Semester 4</th>
                            <th>Semester 5</th>
                            <th>Semester 6</th>
                            <th>Semester 7</th>
                            <th>Semester 8</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($getDataMahasiswa as $r) { ?>
                            <tr>
                                <td><?php echo ++$no; ?></td>
                                <td><?php echo $r->nama_mahasiswa; ?></td>
                                <td><?php echo $r->ipk_smt_1_mahasiswa; ?></td>
                                <td><?php echo $r->ipk_smt_2_mahasiswa; ?></td>
                                <td><?php echo $r->ipk_smt_3_mahasiswa; ?></td>
                                <td><?php echo $r->ipk_smt_4_mahasiswa; ?></td>
                                <td><?php echo $r->ipk_smt_5_mahasiswa; ?></td>
                                <td><?php echo $r->ipk_smt_6_mahasiswa; ?></td>
                                <td><?php echo $r->ipk_smt_7_mahasiswa; ?></td>
                                <td><?php echo $r->ipk_smt_8_mahasiswa; ?></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>