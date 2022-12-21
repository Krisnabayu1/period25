@extends('master')
@extends('layouts.main')
@section ('container')
@section('title', 'CDIS')


<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<head>


    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>

<body>

    <main>



        <section class="py-5 text-center container">
            <div class="row ">
                <div class="col-lg-6 col-md-8 mx-auto ">
                    <h1 class="animate__animated animate__bounce animate__delay-1s animate__repeat-2 animate__slower-3s" class="fw-light fw-bold " style="font-family: cursive">Distribution Class Period 10</h1>
                    <h1 class=" lead text-muted " style="font-family: cursive">Selamat Datang Di Apikasi Pendistribusian Kelas,Semoga Dapat
                        Mempercepat Pekerjaan Anda.Terima Kasih</h1>
                </div>
            </div>
        </section>

        <div class="album  bg-light ">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm ">
                            <div class="card card bg-primary card-border-danger">

                                <h4 class="card-header fw-bold text-light" style="font-family: cursive">Member</h4>
                                <div class="card-body">
                                    <h4 class="card-title text-light fw-bold" style="font-family: cursive">Total Member</h4>
                                    <h5 class="card-text text-light fw-bold" style="font-family: cursive">{{$member}}</h5>
                                    <a href="/members" class="btn btn-primary bg-warning text-dark fw-bold" style="font-family: cursive">Go To Member</a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm ">
                            <div class="card bg-primary card-border-danger">
                                <h4 class="card-header  fw-bold text-light" style="font-family: cursive">Kloter</h4>
                                <div class="card-body">
                                    <h4 class="card-title text-light fw-bold" style="font-family: cursive">Total Kloter</h4>
                                    <h5 class="card-text text-light fw-bold" style="font-family: cursive">{{$kloter}}</h5>
                                    <a href="/kloters" class="btn btn-primary  bg-warning text-dark fw-bold" style="font-family: cursive">Go To Kloter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card bg-primary card-border-danger">
                                <h4 class="card-header fw-bold text-light" style="font-family: cursive">Tutor</h4>
                                <div class="card-body">
                                    <h4 class="card-title text-light fw-bold" style="font-family: cursive">Total Tutor</h4>
                                    <h5 class="card-text text-light fw-bold" style="font-family: cursive">{{$tutor}}</h5>
                                    <a href="/tutors" class="btn btn-primary bg-warning text-dark fw-bold text-dark fw-bold" style="font-family: cursive">Go To Tutor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card bg-primary card-border-danger">
                                <h4 class="card-header fw-bold text-light" style="font-family: cursive">Ruangan</h4>
                                <div class="card-body">
                                    <h4 class="card-title text-light fw-bold" style="font-family: cursive">Total Ruangan</h4>
                                    <h5 class="card-text text-light fw-bold" style="font-family: cursive">{{$ruangan}}</h5>
                                    <a href="/ruangans" class="btn btn-primary bg-warning text-dark fw-bold" style="font-family: cursive">Go To Ruangan</a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card bg-primary">
                                <h4 class="card-header fw-bold text-light" style="font-family: cursive">Subject</h4>
                                <div class="card-body">
                                    <h4 class="card-title text-light fw-bold" style="font-family: cursive">Total Subject</h4>
                                    <h5 class="card-text text-light fw-bold" style="font-family: cursive">{{$subject}}</h5>
                                    <a href="/subjects" class="btn btn-primary bg-warning text-dark fw-bold" style="font-family: cursive">Go To Subject</a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card bg-primary">
                                <h4 class="card-header fw-bold text-light" style="font-family: cursive">Sesi Jam</h4>
                                <div class="card-body">
                                    <h4 class="card-title text-light fw-bold" style="font-family: cursive">Total Sesi Jam</h4>
                                    <h5 class="card-text text-light fw-bold" style="font-family: cursive">{{$jam}}</h5>
                                    <a href="/jams" class="btn btn-primary bg-warning text-dark fw-bold" style="font-family: cursive">Go To Sesi Jam</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>



        <footer class="text-muted py-5">
            <div class="container">

                <p class="mb-1 fw-bold"> &copy; GE | Global English Pare 2022</p>
                <p class="mb-0 fw-bold">Aplikasi Ini di Buat Oleh Mr.Rizal Dan Amik Taruna Team </p>
                <p><a href="https://globalenglish.co.id/">Go To Website</a> </p>
            </div>
        </footer>


        @endsection