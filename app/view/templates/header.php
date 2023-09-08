<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Halaman <?= $data['judul'] ?></title>
  <style>
    body {
      background-color: #279EFF;
    }

    nav {
      position: fixed;
      top: 0;
      width: 100%;
      left: 0;
      z-index: 2;
      background-color: #0C356A;
    }

    .nav-link,
    .navbar-brand {
      font-size: 20px;
      font-weight: 600;
      text-decoration: none;
      color: white;
      margin: 10px 10px 10px 10px;
      padding: 10px;
      transition: 0.5s;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg position-fixed">
    <div class="collapse navbar-collapse" id="navbarNav" style="margin-left:8%;">
      <a class="navbar-brand" style="font-weight: bold; color:white;">A<span style=" font-style: italic; font-weight: bold;">Fadli</span>.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="navbar-nav" style="justify-content: end;">
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASE_URL; ?>/home">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASE_URL; ?>/guru">Data Guru</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASE_URL; ?>/jurusan">Kompetensi Keahlian <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASE_URL; ?>/user/profile">About</a>
        </li>
      </ul>
    </div>
  </nav>