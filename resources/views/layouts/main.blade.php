<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Global English</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class=" navbar navbar-expand-lg navbar bg-primary  p-1 fs-5 nav ">
        <div class="container-fluid">
            <img src="{{asset ('image/5.png') }}" a href="/" width="275" height="60" class="attachment-full size-full cursor-pointer" alt="" loading="lazy" <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold mx-4 text-light" aria-current="page" href="/home">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold mx-4 text-light" aria-current="page" href="/members">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold mx-4 text-light" href="/kloters">Kloter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold mx-4 text-light" href="/tutors">Tutor</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fw-bold mx-4 text-light" href="/ruangans">Ruangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold mx-4 text-light" href="/subjects">Subject</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold mx-4 text-light" href="/jams">Jam</a>
                    </li>

            </div>
        </div>
    </nav>
    @yield('container')