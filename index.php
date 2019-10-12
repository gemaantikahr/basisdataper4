<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Data mahasiswa teknik informatika</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>nim</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No hp</th>
        <th>Semeter</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>16000018095</td>
        <td>ASlamadin Alvian Haz</td>
        <td>jln glagah</td>
        <td>No hp</td>
        <td>Semester</td>
        <td>
            <a href="edit.php?nim=<?php echo $data['niy']; ?>" class="btn btn-primary">Edit</a>
            <a href="proses_hapus.php?nim=<?php echo $data['niy']; ?>" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="container">
    <a href="tambah.php" class="btn btn-info" role="button">tambah siswa</a>
  </div>
</div>

</body>
</html>
