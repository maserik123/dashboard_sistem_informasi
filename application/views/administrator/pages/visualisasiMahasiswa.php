<!-- Styles -->


<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/dark.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<!-- IPK bawah 3 Bar -->
<style>
    #ipkBawah3 {
        width: 100%;
        height: 300px;
        font-size: 11px;
    }
</style>
<script>
    var chart = AmCharts.makeChart("ipkBawah3", {
        "type": "serial",
        "theme": "none",
        "marginRight": 70,
        "dataProvider": [
            <?php foreach ($getIPKKurang3 as $row) { ?> {
                    "country": "<?php echo $row->tahun_masuk_mahasiswa; ?>",
                    "visits": <?php echo $row->total; ?>,
                    "color": "#00008B"
                },
            <?php } ?>
        ],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "Pertahun Angkatan"
        }],
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
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
            "labelRotation": 45
        },

        "export": {
            "enabled": true
        }

    });
</script>
<!-- End IPK bawah 3 Bar -->
<!-- IPK bawah 3 pie -->
<style>
    #ipkBawah3pie {
        width: 100%;
        height: 350px;
        font-size: 11px;
    }

    .amcharts-pie-slice {
        transform: scale(1);
        transform-origin: 50% 50%;
        transition-duration: 0.3s;
        transition: all .3s ease-out;
        -webkit-transition: all .3s ease-out;
        -moz-transition: all .3s ease-out;
        -o-transition: all .3s ease-out;
        cursor: pointer;
        box-shadow: 0 0 30px 0 #000;
    }

    .amcharts-pie-slice:hover {
        transform: scale(1.1);
        filter: url(#shadow);
    }
</style>
<script>
    var chart = AmCharts.makeChart("ipkBawah3pie", {
        "type": "pie",
        "startDuration": 0,
        "theme": "none",
        "addClassNames": true,
        "legend": {
            "position": "bottom",
        },
        "innerRadius": "30%",
        "defs": {
            "filter": [{
                "id": "shadow",
                "width": "200%",
                "height": "200%",
                "feOffset": {
                    "result": "offOut",
                    "in": "SourceAlpha",
                    "dx": 0,
                    "dy": 0
                },
                "feGaussianBlur": {
                    "result": "blurOut",
                    "in": "offOut",
                    "stdDeviation": 5
                },
                "feBlend": {
                    "in": "SourceGraphic",
                    "in2": "blurOut",
                    "mode": "normal"
                }
            }]
        },
        "dataProvider": [
            <?php foreach ($getIPKKurang3 as $row) { ?>

                {
                    "country": "<?php echo $row->tahun_masuk_mahasiswa; ?>",
                    "litres": <?php echo $row->total; ?>
                },

            <?php } ?>
        ],
        "valueField": "litres",
        "titleField": "country",
        "export": {
            "enabled": true
        }
    });
</script>
<!-- End IPK bawah 3 pie -->


<!-- IPK atas 3 Bar -->
<style>
    #ipkAtas3Bar {
        width: 100%;
        height: 300px;
        font-size: 11px;
    }
</style>
<script>
    var chart = AmCharts.makeChart("ipkAtas3Bar", {
        "type": "serial",
        "theme": "none",
        "marginRight": 70,
        "dataProvider": [
            <?php foreach ($getIPKLebih3 as $row) { ?> {
                    "country": "<?php echo $row->tahun_masuk_mahasiswa; ?>",
                    "visits": <?php echo $row->total; ?>,
                    "color": "#8B0000"
                },
            <?php } ?>
        ],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "Pertahun Angkatan"
        }],
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
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
            "labelRotation": 45
        },

        "export": {
            "enabled": true
        }

    });
</script>
<!-- End IPK atas 3 Bar -->
<!-- IPK atas 3 pie -->
<style>
    #ipkAtas3pie {
        width: 100%;
        height: 350px;
        font-size: 11px;
    }
</style>
<script>
    var chart = AmCharts.makeChart("ipkAtas3pie", {
        "type": "pie",
        "startDuration": 0,
        "theme": "light",
        "addClassNames": true,
        "legend": {
            "position": "bottom",
        },
        "innerRadius": "30%",
        "defs": {
            "filter": [{
                "id": "shadow",
                "width": "200%",
                "height": "200%",
                "feOffset": {
                    "result": "offOut",
                    "in": "SourceAlpha",
                    "dx": 0,
                    "dy": 0
                },
                "feGaussianBlur": {
                    "result": "blurOut",
                    "in": "offOut",
                    "stdDeviation": 5
                },
                "feBlend": {
                    "in": "SourceGraphic",
                    "in2": "blurOut",
                    "mode": "normal"
                }
            }]
        },
        "dataProvider": [
            <?php foreach ($getIPKLebih3 as $row) { ?>

                {
                    "country": "<?php echo $row->tahun_masuk_mahasiswa; ?>",
                    "litres": <?php echo $row->total; ?>
                },

            <?php } ?>
        ],
        "valueField": "litres",
        "titleField": "country",
        "export": {
            "enabled": true
        }
    });
</script>
<!-- End IPK atas 3 pie -->

<!-- Kompen Mahasiswa -->
<style>
    #kompen {
        width: 100%;
        height: 300px;
        font-size: 11px;
    }
</style>
<script>
    var chart = AmCharts.makeChart("kompen", {
        "type": "pie",
        "theme": "light",
        "legend": {
            "position": "bottom",
        },
        "dataProvider": [
            <?php foreach ($getKompenByKelas as $r) { ?> {
                    "country": "<?php echo $r->kelas_mahasiswa; ?>",
                    "value": <?php echo $r->total; ?>
                },
            <?php } ?>
        ],
        "valueField": "value",
        "titleField": "country",
        "outlineAlpha": 0.4,
        "depth3D": 15,
        "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
        "angle": 30,
        "export": {
            "enabled": true
        }
    });
</script>
<!-- End Kompen Mahasiswa -->

<!-- TAK Mahasiswa -->
<style>
    #tak {
        width: 100%;
        height: 300px;
    }

    .amcharts-export-menu-top-right {
        top: 10px;
        right: 0;
    }
</style>
<script>
    var chart = AmCharts.makeChart("tak", {
        "type": "serial",
        "theme": "none",
        "marginRight": 20,
        "dataProvider": [
            <?php foreach ($getTAKMhsPerKelas as $b) { ?> {
                    "country": "<?php echo $b->nama_mahasiswa; ?>",
                    "visits": "<?php echo $b->tak_mahasiswa ?>",
                    "color": "#00CED1"
                },
            <?php } ?>
        ],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "TAK Mahasiswa Perkelas"
        }],
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
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
<!-- End TAK Mahasiswa -->

<!-- IPK SMT 1 Mahasiswa -->
<style>
    #smt1 {
        width: 100%;
        height: 300px;
    }

    .amcharts-export-menu-top-right {
        top: 10px;
        right: 0;
    }
</style>
<script>
    var chart = AmCharts.makeChart("smt1", {
        "type": "serial",
        "theme": "none",
        "marginRight": 20,
        "dataProvider": [
            <?php foreach ($getIPKSemester as $b) { ?> {
                    "country": "<?php echo $b->nama_mahasiswa; ?>",
                    "visits": "<?php echo $b->ipk_smt_1_mahasiswa; ?>",
                    "color": "#2F4F4F"
                },
            <?php } ?>
        ],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "IPK Mahasiswa Perkelas"
        }],
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
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
<!-- End IPK SMT 1 Mahasiswa -->
<!-- IPK SMT 2 Mahasiswa -->
<style>
    #smt2 {
        width: 100%;
        height: 300px;
    }

    .amcharts-export-menu-top-right {
        top: 10px;
        right: 0;
    }
</style>
<script>
    var chart = AmCharts.makeChart("smt2", {
        "type": "serial",
        "theme": "none",
        "marginRight": 20,
        "dataProvider": [
            <?php foreach ($getIPKSemester as $b) { ?> {
                    "country": "<?php echo $b->nama_mahasiswa; ?>",
                    "visits": "<?php echo $b->ipk_smt_2_mahasiswa; ?>",
                    "color": "#2F4F4F"
                },
            <?php } ?>
        ],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "IPK Mahasiswa Perkelas"
        }],
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
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
<!-- End IPK SMT 2 Mahasiswa -->
<!-- IPK SMT 3s Mahasiswa -->
<style>
    #smt3 {
        width: 100%;
        height: 300px;
    }

    .amcharts-export-menu-top-right {
        top: 10px;
        right: 0;
    }
</style>
<script>
    var chart = AmCharts.makeChart("smt3", {
        "type": "serial",
        "theme": "none",
        "marginRight": 20,
        "dataProvider": [
            <?php foreach ($getIPKSemester as $b) { ?> {
                    "country": "<?php echo $b->nama_mahasiswa; ?>",
                    "visits": "<?php echo $b->ipk_smt_3_mahasiswa; ?>",
                    "color": "#2F4F4F"
                },
            <?php } ?>
        ],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "IPK Mahasiswa Perkelas"
        }],
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
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
<!-- End IPK SMT 3 Mahasiswa -->
<!-- IPK SMT 4 Mahasiswa -->
<style>
    #smt4 {
        width: 100%;
        height: 300px;
    }

    .amcharts-export-menu-top-right {
        top: 10px;
        right: 0;
    }
</style>
<script>
    var chart = AmCharts.makeChart("smt4", {
        "type": "serial",
        "theme": "none",
        "marginRight": 20,
        "dataProvider": [
            <?php foreach ($getIPKSemester as $b) { ?> {
                    "country": "<?php echo $b->nama_mahasiswa; ?>",
                    "visits": "<?php echo $b->ipk_smt_4_mahasiswa; ?>",
                    "color": "#2F4F4F"
                },
            <?php } ?>
        ],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "IPK Mahasiswa Perkelas"
        }],
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
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
<!-- End IPK SMT 4 Mahasiswa -->
<!-- IPK SMT 5 Mahasiswa -->
<style>
    #smt5 {
        width: 100%;
        height: 300px;
    }

    .amcharts-export-menu-top-right {
        top: 10px;
        right: 0;
    }
</style>
<script>
    var chart = AmCharts.makeChart("smt5", {
        "type": "serial",
        "theme": "none",
        "marginRight": 20,
        "dataProvider": [
            <?php foreach ($getIPKSemester as $b) { ?> {
                    "country": "<?php echo $b->nama_mahasiswa; ?>",
                    "visits": "<?php echo $b->ipk_smt_5_mahasiswa; ?>",
                    "color": "#2F4F4F"
                },
            <?php } ?>
        ],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "IPK Mahasiswa Perkelas"
        }],
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
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
<!-- End IPK SMT 5 Mahasiswa -->
<!-- IPK SMT 4 Mahasiswa -->
<style>
    #smt6 {
        width: 100%;
        height: 300px;
    }

    .amcharts-export-menu-top-right {
        top: 10px;
        right: 0;
    }
</style>
<script>
    var chart = AmCharts.makeChart("smt6", {
        "type": "serial",
        "theme": "none",
        "marginRight": 20,
        "dataProvider": [
            <?php foreach ($getIPKSemester as $b) { ?> {
                    "country": "<?php echo $b->nama_mahasiswa; ?>",
                    "visits": "<?php echo $b->ipk_smt_6_mahasiswa; ?>",
                    "color": "#2F4F4F"
                },
            <?php } ?>
        ],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "IPK Mahasiswa Perkelas"
        }],
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
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
<!-- End IPK SMT 6 Mahasiswa -->
<!-- IPK SMT 4 Mahasiswa -->
<style>
    #smt7 {
        width: 100%;
        height: 300px;
    }

    .amcharts-export-menu-top-right {
        top: 10px;
        right: 0;
    }
</style>
<script>
    var chart = AmCharts.makeChart("smt7", {
        "type": "serial",
        "theme": "none",
        "marginRight": 20,
        "dataProvider": [
            <?php foreach ($getIPKSemester as $b) { ?> {
                    "country": "<?php echo $b->nama_mahasiswa; ?>",
                    "visits": "<?php echo $b->ipk_smt_7_mahasiswa; ?>",
                    "color": "#2F4F4F"
                },
            <?php } ?>
        ],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "IPK Mahasiswa Perkelas"
        }],
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
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
<!-- End IPK SMT 7 Mahasiswa -->

<!-- IPK SMT 4 Mahasiswa -->
<style>
    #smt8 {
        width: 100%;
        height: 300px;
    }

    .amcharts-export-menu-top-right {
        top: 10px;
        right: 0;
    }
</style>
<script>
    var chart = AmCharts.makeChart("smt8", {
        "type": "serial",
        "theme": "none",
        "marginRight": 20,
        "dataProvider": [
            <?php foreach ($getIPKSemester as $b) { ?> {
                    "country": "<?php echo $b->nama_mahasiswa; ?>",
                    "visits": "<?php echo $b->ipk_smt_8_mahasiswa; ?>",
                    "color": "#2F4F4F"
                },
            <?php } ?>
        ],
        "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "IPK Mahasiswa Perkelas"
        }],
        "startDuration": 1,
        "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
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
<!-- End IPK SMT 8 Mahasiswa -->


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="col-md-12">

            <h1 class="h3 mb-0 text-gray-800">Dashboard Mahasiswa</h1>
            <small>Data Mahasiswa terkait dari Kompen, TAK dan IPK.</small>
            <div style="text-align: right;">
                <!-- <a href="<?php echo base_url('administrator') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-home fa-sm text-white-50"></i> Home</a> -->
                <!-- <a href="<?php echo base_url('administrator/visualisasiMahasiswa') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-chart-area fa-sm text-white-50"></i> Mahasiswa</a> -->
                <!-- <a href="<?php echo base_url('administrator/visualisasiMahasiswa') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-chart-area fa-sm text-white-50"></i> IPK Persemester Mahasiswa</a> -->
            </div>

        </div>

    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-7 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">IPK Mahasiswa dibawah dari 3.00 <br>
                        <small>Data IPK Mahasiswa Pertahun Angkatan</small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <div id="ipkBawah3"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-5 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">IPK Mahasiswa dibawah dari 3.00 <br>
                        <small>Data IPK Mahasiswa Pertahun Angkatan</small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <div id="ipkBawah3pie"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-xl-5 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">IPK Mahasiswa diatas dari 3.00 <br>
                        <small>Data IPK Mahasiswa Pertahun Angkatan</small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <div id="ipkAtas3pie"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-7 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">IPK Mahasiswa diatas dari 3.00 <br>
                        <small>Data IPK Mahasiswa Pertahun Angkatan</small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <div id="ipkAtas3Bar"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Persentasi Kompen dan TAK Mahasiswa
                        <br>
                        <small>Data Kompen dan TAK Mahasiswa ditampilkan Pertahun</small>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="form-group text-right">
                        <div class="btn-group">
                            <?php for ($i = (date('Y') - 1); $i > date('Y') - 5; $i--) { ?>
                                <a style="font-size: 10px;" href="<?php echo base_url('administrator/visualisasiMahasiswa/') . $i; ?>" class="btn btn-sm btn-success"><?php echo $i; ?></a>
                            <?php } ?>
                            <button class="btn btn-sm btn-primary" style="font-size: 10px;">Pilih Tahun Angkatan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-xl-6 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Kompen Mahasiswa
                        <br>
                        <small>Data Kompen Mahasiswa Tahun Angkatan <?php echo $tahun; ?></small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <div id="kompen"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">TAK Mahasiswa
                        <br>
                        <small>Data TAK Mahasiswa Kelas <?php echo $kelas; ?></small>
                    </h6>
                    <form action="" class="form-action" method="POST">
                        <select name="kelas_mahasiswa" id="kelas_mahasiswa" onchange="this.form.submit();" class="form-control">
                            <option value="">Pilih Kelas Mahasiswa</option>
                            <?php foreach ($getKelasMhs as $r) { ?>
                                <option value="<?php echo $r->kelas_mahasiswa ?>"><?php echo $r->kelas_mahasiswa; ?></option>
                            <?php } ?>
                        </select>

                    </form>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <div id="tak"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data IPK Persemester
                        <br>
                        <small>IPK Semester Kelas <?php echo $kelas; ?></small>
                    </h6>
                    <form action="" class="form-action" method="POST">
                        <select name="kelas_ipk" id="kelas_ipk" onchange="this.form.submit();" class="form-control">
                            <option value="">Pilih Kelas Mahasiswa</option>
                            <?php foreach ($getKelasMhs as $r) { ?>
                                <option value="<?php echo $r->kelas_mahasiswa ?>"><?php echo $r->kelas_mahasiswa; ?></option>
                            <?php } ?>
                        </select>

                    </form>
                </div>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-xl-6 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">IPK Semester 1
                        <br>
                        <small>Kelas <?php echo $kelas1; ?></small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <div id="smt1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">IPK Semester 2
                        <br>
                        <small>Kelas <?php echo $kelas1; ?></small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <div id="smt2"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">IPK Semester 3
                        <br>
                        <small>Kelas <?php echo $kelas1; ?></small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <div id="smt3"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">IPK Semester 4
                        <br>
                        <small>Kelas <?php echo $kelas1; ?></small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <div id="smt4"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">IPK Semester 5
                        <br>
                        <small>Kelas <?php echo $kelas1; ?></small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <div id="smt5"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">IPK Semester 6
                        <br>
                        <small>Kelas <?php echo $kelas1; ?></small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <div id="smt6"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">IPK Semester 7
                        <br>
                        <small>Kelas <?php echo $kelas1; ?></small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <div id="smt7"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">IPK Semester 8
                        <br>
                        <small>Kelas <?php echo $kelas1; ?></small>
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <div id="smt8"></div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>