<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMK N 1 KINALI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: 'Arial', sans-serif;
        }
        header {
            background-color: #007bff;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        h1 {
            margin-bottom: 0;
            font-size: 2.5rem;
            font-weight: bold;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 0;
        }
        nav {
            background-color: #343a40;
        }
        .navbar-nav .nav-link {
            color: #ffffff;
        }
        .navbar-nav .nav-link:hover {
            color: #007bff;
        }
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <header>
        <img src="/img/logo.png" alt="SMK N 1 KINALI Logo" class="img-fluid">
        <h1>Welcome to SMK N 1 KINALI</h1>
        <p>Jln. Teuku Umar Padang Kuranji KM.1 Kapunduang</p>
        <?php
        echo "<p>Today is " . date("Y-m-d") . "</p>";
        ?>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/Pelanggaran">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Pelanggaran/profile">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Pelanggaran/siswa">Pelanggaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Pelanggaran/kontak">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>
