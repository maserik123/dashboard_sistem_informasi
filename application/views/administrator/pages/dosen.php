<script>
    console.log('test');
</script>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>
    <div class="col-md-12">
        <div class="text-right">
            <button class="btn btn-primary btn-sm" onclick="window.location = '<?php echo base_url('administrator/formImportDosen'); ?>'" type="button"> <i class="fas fa-fw fa-upload"></i> Import Data</button>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Dosen</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Dosen Aktif Penelitian</th>
                            <th>Dosen Aktif Pengabdian</th>
                            <th>Dosen Aktif Publikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($getDataDosen as $r) { ?>
                            <tr>
                                <td><?php echo ++$no; ?></td>
                                <td><?php echo $r->tahun; ?></td>
                                <td><?php echo $r->dosen_aktif_penelitian; ?></td>
                                <td><?php echo $r->dosen_aktif_pengabdian; ?></td>
                                <td><?php echo $r->dosen_aktif_publikasi; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>