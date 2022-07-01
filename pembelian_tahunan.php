<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADVENTURE WORKS 2022 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!--tika-->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <!---->
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">ADVENTURE WORKS 2022</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Inventory -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Chart Pembelian Tahunan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Chart Menu
            </div>

            <li class="nav-item">
                <a class="nav-link" href="chart_produk.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Chart Inventory</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="linetotal_tahunan.php">
                    <i class="fa fa-balance-scale"></i>
                    <span>Chart Line Total</span>
                </a>
            </li>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <li class="nav-item">
                <a class="nav-link" href="pembelian_tahunan.php">
                    <i class="fa fa-film"></i>
                    <span>Chart Pembelian Tahunan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="penjualan_tahunan.php">
                    <i class="fas fa-store"></i>
                    <span>Chart Penjualan Tahunan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="subtotal_tahunan.php">
                    <i class="fas fa-store"></i>
                    <span>Chart Sub Total Pendapatan Tahunan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="urutan_order_tahunan.php">
                    <i class="fas fa-store"></i>
                    <span>Chart Transaksi</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pembelian</h1>
                       
                    </div>

                    <!-- Content Row -->

                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-pie me-1"></i>
                                Pembelian
                            </div>
                            <?php
                                        $host       = "localhost";
                                        $user       = "root";
                                        $password   = "";
                                        $database   = "project_uts";
                                        $mysqli     = mysqli_connect($host, $user, $password, $database);

                                        $sql = "SELECT SUM(Quantity) AS qty FROM fakta_pembelian";
                                        $tot = mysqli_query($mysqli, $sql);
                                        $tot_pembelian = mysqli_fetch_row($tot);

                                        $sql = "SELECT CONCAT('name:',w.Tahun) as tahun, CONCAT('y:', SUM(fp.Quantity)*100/" . $tot_pembelian[0] .") as y, CONCAT('drilldown:', w.Tahun) as drilldown 
                                        FROM dimensi_waktu w
                                        JOIN fakta_pembelian fp ON (w.DateID = fp.DateID) 
                                        GROUP BY tahun";
                                        $all_beli = mysqli_query($mysqli,$sql);
                                        while($row = mysqli_fetch_all($all_beli)) {
                                            $data[] = $row;
                                        }
                                        $json_all_beli = json_encode($data);

                                        // Chart Kedua

                                        $sql = "SELECT w.Tahun tahun, w.Bulan bulan, SUM(fp.Quantity) as qty
                                        FROM dimensi_waktu w
                                        JOIN fakta_pembelian fp ON (w.DateID = fp.DateID)
                                        GROUP BY tahun, bulan";
                                        $det_beli = mysqli_query($mysqli,$sql);

                                        while ($row = mysqli_fetch_all($det_beli)) {
                                            $data_det[] = $row;
                                        }

                                        // DATA DRILL DOWN
                                        $i = 0;

                                        // Inisiasi String DATA
                                        $string_data = "";
                                        $string_data .= '{nama:"' . $data_det[0][$i][0] . '", id:"' . $data_det[0][$i][0] . '", data: [';

                                        foreach($data_det[0] as $a){
                                            if($i < count($data_det[0])-1){
                                                if($a[0] != $data_det[0][$i+1][0]){
                                                    $string_data .= '["' . $a[1] . '", ' . $a[2] . ']]},';
                                                    $string_data .= '{name:"' . $data_det[0][$i+1][0] . '", id:"' . $data_det[0][$i+1][0] . '", data: [';
                                                }
                                                else {
                                                    $string_data .= '["' . $a[1] . '", ' . $a[2] . '], ';
                                                }
                                            }
                                            else {
                                                $string_data .= '["' . $a[1] . '", ' . $a[2] . ']]}';
                                            }

                                            $i = $i+1;
                                        }

                                        ?>
                            <div id="chart1"></div>
                        </div>
                        
                    </div>
                    <!-- Content Row -->

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright 2022 &copy; Kelompok 14</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <script type="text/javascript">
            Highcharts.chart('chart1', {
                chart: {
                type: 'pie'
            },
            title: {
                text: 'Presentase Pembelian Barang Berdasarkan Tahun'},
                subtitle: {
                    text:'Klik untuk melihat jumlah detail dari setiap bulan'
                },
                accessibility: {
                    announceNewData: {
                        enabled: true
                    },
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    drilldown:{
                        dataLabels: {
                            format:'{point.name}: {point.y:.0f}'                   
                        }
                    },
                    series:{
                        dataLabels: {
                            format:'{point.name}: {point.y:.0f}'
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                },
                series: [
                    {
                        name: "Pembelian Produk",
                        colorByPoint: true,
                        data:
                            <?php
                            $datanya = $json_all_beli;
                            $data1 = str_replace('["', '{"',$datanya) ;
                            $data2 = str_replace('"]', '"}',$data1) ;
                            $data3 = str_replace('[[', '[', $data2);
                            $data4 = str_replace(']]', ']', $data3);
                            $data5 = str_replace(':', '" : "', $data4);
                            $data6 = str_replace('"name"', 'name', $data5);
                            $data7 = str_replace('"drilldown"', 'drilldown', $data6);
                            $data8 = str_replace('"y"', 'y', $data7);
                            $data9 = str_replace('",', ',', $data8);
                            $data10 = str_replace(',y', '",y', $data9);
                            $data11 = str_replace(',y : "', ',y : ', $data10);
                            echo $data11;
                            ?>
                    }
                ],
                drilldown: {
                    series: [
                        <?php
                        echo $string_data;
                        ?>
                    ]
                }
            });
        </script>                
</body>
</html>