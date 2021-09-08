<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="col-md-12">

            <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
            <small>Summary Visualisasi Data Dashboard Program Studi Sistem Informasi</small>
        </div>

    </div>

    <!-- Summary Mahasiswa -->
    <div class="row">
        <div class="col-md-12">
            <small class="badge btn-success">Daftar Summary Mahasiswa : </small>
            <hr>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2" style="background-color: #00CED1;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                IPK Tertinggi Thn Akt <?php echo (date('Y') - 1); ?></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php foreach ($ipkTertinggi as $r) {
                                                                                        echo $r->nama_mahasiswa;
                                                                                    } ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2" style="background-color: #FFA07A;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                IPK Terendah Thn Akt <?php echo (date('Y') - 1); ?></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php foreach ($ipkTerendah as $r) {
                                                                                        echo $r->nama_mahasiswa;
                                                                                    } ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Summary Mahasiswa -->

    <!-- Summary Dosen -->
    <div class="row">
        <div class="col-md-12">
            <small class="badge btn-primary">Daftar Summary Dosen : </small>
            <br>
            <small>Data Dosen yang ditampilkan berdasarkan tahun saat ini.</small>
            <hr>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Dosen Aktif Penelitian</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $dosenPenelitian[0]->total; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Dosen Aktif Pengabdian</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $dosenPengabdian[0]->total; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Dosen Aktif Publikasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $dosenPublikasi[0]->total; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Summary Dosen -->
</div>