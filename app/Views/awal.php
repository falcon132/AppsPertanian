<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() ?>/assets/template/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/template/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/template/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() ?>/assets/template/assets/css/style.css" rel="stylesheet">
    <style type="text/css">
        body {
            margin-top: 220px;
        }
        .carousel-control-prev-icon, .carousel-control-next-icon {
            height: 70px;
            width: 70px;
            outline: black;
             background-color: rgba(0, 0, 0, 0.3);
            background-size: 100%, 100%;
            border-radius: 50%;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="container awal" align="center">
        <div id="carouselExampleIndicators" class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="<?php echo base_url() ?>/assets/img/indmira (12).png" alt="First slide">
                    <br><br><br><br><br><br>
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="row justify-content-center">
                                <br><br>
                                <h1 class="text-dark"></h1>
                                <h3 class="text-dark">mempermudah perhitungan
                                    Analisis Usaha Tani</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="<?php echo base_url() ?>/assets/img/indmiracov.png" alt="Second slide">
                    <br><br>
                    <h1 class="text-dark">Kuasai Cara Budidaya</h1>
                    <h3 class="text-dark">Belajar bersama dan berkembang
                        bersama dalam sektor pertanian</h3>
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="row justify-content-center">
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item shadow-lg p-3 mb-5 bg-body rounded">
                    <img class="d-block w-100 img-fluid" src="<?php echo base_url() ?>/assets/img/indmira.png" alt="Third slide">
                    <div class="row justify-content-center">
                        <div class="col">
                            <a href="<?php echo base_url() ?>/home/lanjutkan" class="btn btn-primary">
                                <h1>Lanjutkan</h1>
                            </a>
                        </div>
                        <br>
                        <div class="col">
                            <a href="<?php echo base_url() ?>/login/user" class="btn btn-primary">
                                <h1>Login</h1>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <div class="nav-icon">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </div>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <div class="nav-icon">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </div>
        </a>
    </div>
    <br><br><br><br><br><br><br>
    </div>
</body>