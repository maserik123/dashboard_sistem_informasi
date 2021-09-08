<!-- Styles -->


<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/dark.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<!-- Dosen Aktif Penelitian Bar -->
<style>
    #aktifPenelitian {
        width: 100%;
        height: 500px;
        font-size: 11px;
    }
</style>
<script>
    var chart = AmCharts.makeChart("aktifPenelitian", {
        "type": "serial",
        "theme": "none",
        "marginRight": 20,
        "dataProvider": [
            <?php foreach ($getDosenAktifPenelitianPertahun as $row) { ?> {
                    "country": "<?php echo $row->dosen_aktif_penelitian; ?>",
                    "visits": <?php echo $row->total; ?>,
                    "color": "#00008B"
                },
            <?php } ?>
        ],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "Dosen Aktif Penelitian Tahun <?php echo $tahun; ?>"
        }],
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 1,
            "lineAlpha": 0,
            "type": "column",
            "valueField": "visits"
        }],
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "country",
        "categoryAxis": {
            "gridPosition": "start",
            "labelRotation": 60
        },
        "export": {
            "enabled": false
        }

    });
</script>
<!-- End Dosen Aktif Penelitian Bar -->
<!-- Dosen Aktif Pengabdian Bar -->
<style>
    #aktifPengabdian {
        width: 100%;
        height: 500px;
        font-size: 11px;
    }
</style>
<script>
    var chart = AmCharts.makeChart("aktifPengabdian", {
        "type": "serial",
        "theme": "none",
        "marginRight": 20,
        "dataProvider": [
            <?php foreach ($getDosenAktifPengabdianPertahun as $row) { ?> {
                    "country": "<?php echo $row->dosen_aktif_pengabdian; ?>",
                    "visits": <?php echo $row->total; ?>,
                    "color": "#8B0000"
                },
            <?php } ?>
        ],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "Dosen Aktif Pengabdian Tahun <?php echo $tahun; ?>"
        }],
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 1,
            "lineAlpha": 0,
            "type": "column",
            "valueField": "visits"
        }],
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "country",
        "categoryAxis": {
            "gridPosition": "start",
            "labelRotation": 50
        },
        "export": {
            "enabled": false
        }

    });
</script>
<!-- End Dosen Aktif Pengabdian Bar -->
<!-- Dosen Aktif Publikasi Bar -->
<style>
    #aktifPublikasi {
        width: 100%;
        height: 500px;
        font-size: 11px;
    }
</style>
<script>
    var chart = AmCharts.makeChart("aktifPublikasi", {
        "type": "serial",
        "theme": "none",
        "marginRight": 20,
        "dataProvider": [
            <?php foreach ($getDosenAktifPublikasiPertahun as $row) { ?> {
                    "country": "<?php echo $row->dosen_aktif_publikasi; ?>",
                    "visits": <?php echo $row->total; ?>,
                    "color": "#006400"
                },
            <?php } ?>
        ],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "Dosen Aktif Publikasi Tahun <?php echo $tahun; ?>"
        }],
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 1,
            "lineAlpha": 0,
            "type": "column",
            "valueField": "visits"
        }],
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "country",
        "categoryAxis": {
            "gridPosition": "start",
            "labelRotation": 50
        },
        "export": {
            "enabled": false
        }

    });
</script>
<!-- End Dosen Aktif Publikasi Bar -->
<!-- Trend pengabdian Dosen -->
<style>
    #trendPengabdian {
        width: 100%;
        height: 400px;
        font-size: 11px;
    }
</style>
<script>
    var chart = AmCharts.makeChart("trendPengabdian", {
        "type": "serial",
        "addClassNames": true,
        "theme": "none",
        "autoMargins": false,
        "marginLeft": 30,
        "marginRight": 8,
        "marginTop": 10,
        "marginBottom": 26,
        "balloon": {
            "adjustBorderColor": false,
            "horizontalPadding": 10,
            "verticalPadding": 8,
            "color": "#ffffff"
        },

        "dataProvider": [
            <?php foreach ($trenDosenPengabdian as $b) { ?> {
                    "year": <?php echo $b->tahun; ?>,
                    "income": <?php echo $b->total; ?>,
                    "expenses": <?php echo $b->total; ?>
                },
            <?php } ?>
        ],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left"
        }],
        "startDuration": 1,
        "graphs": [{
            "alphaField": "alpha",
            "balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
            "fillAlphas": 1,
            "title": "Jumlah ",
            "type": "column",
            "valueField": "income",
            "dashLengthField": "dashLengthColumn"
        }, {
            "id": "graph2",
            "balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
            "bullet": "round",
            "lineThickness": 3,
            "bulletSize": 7,
            "bulletBorderAlpha": 1,
            "bulletColor": "#FFFFFF",
            "useLineColorForBulletBorder": true,
            "bulletBorderThickness": 3,
            "fillAlphas": 0,
            "lineAlpha": 1,
            "title": "Jumlah",
            "valueField": "expenses",
            "dashLengthField": "dashLengthLine"
        }],
        "categoryField": "year",
        "categoryAxis": {
            "gridPosition": "start",
            "axisAlpha": 0,
            "tickLength": 0
        },
        "export": {
            "enabled": false
        }
    });
</script>
<!-- End Trend publikasi Dosen -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="col-md-12">

            <h1 class="h3 mb-0 text-gray-800">Dashboard Dosen</h1>
            <small>Data Penelitian, Pengabdian dan Publikasi Dosen.</small>
            <div class="form-group text-right">
                <div class="btn-group">
                    <?php for ($i = (date('Y') - 1); $i > date('Y') - 5; $i--) { ?>
                        <a style="font-size: 10px;" href="<?php echo base_url('administrator/visualisasiDosen/') . $i; ?>" class="btn btn-sm btn-success"><?php echo $i; ?></a>
                    <?php } ?>
                    <button class="btn btn-sm btn-primary" style="font-size: 10px;">Pilih Tahun</button>
                </div>
            </div>

        </div>

    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Dosen yang aktif penelitian <br>
                        <small>Data Dosen aktif penelitian tahun <?php echo $tahun; ?></small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div id="aktifPenelitian"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Dosen yang aktif pengabdian <br>
                        <small>Data Dosen aktif pengabdian pertahun</small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div id="aktifPengabdian"></div>
                </div>
            </div>
        </div>



        <div class="col-xl-12 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Dosen yang aktif publikasi <br>
                        <small>Data Dosen aktif Publikasi Tahun <?php echo $tahun; ?></small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div id="aktifPublikasi"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Trend Pengabdian Dosen Sistem Informasi<br>
                        <small>Tren Pengabdian Dosen Pertahun</small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div id="trendPengabdian"></div>
                </div>
            </div>
        </div>
    </div>
</div>