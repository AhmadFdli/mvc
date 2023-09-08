<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Halaman <?= $data['judul'] ?></title>
  <style>
    body {
      background-color: #f2f2f2;
    }

    .nav-link,
    .navbar-brand {
      font-size: 20px;
      font-weight: 600;
      text-decoration: none;
      color: white;
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg" style="background-color: #2a3132;">
    <div class="collapse navbar-collapse" id="navbarNav" style="margin-left:8%;">
      <a class="navbar-brand" href="<?= BASE_URL; ?>/home"> AhmadFadli.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASE_URL; ?>/jurusan">Kompetensi Keahlian <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASE_URL; ?>/guru">Data Guru</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASE_URL; ?>/user/profile">About</a>
        </li>
      </ul>
    </div>
  </nav>