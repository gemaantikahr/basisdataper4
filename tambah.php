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
  <h2>Tambah data mahasiswa</h2>
  <form action="proses_tambah.php" method="POST">
    <div class="form-group">
      <label for="nama">nim:</label>
      <input type="text" class="form-control" name="nim">
    </div>
    <div class="form-group">
      <label for="nama">nama:</label>
      <input type="text" class="form-control" name="nim">
    </div>
    <div class="form-group">
      <label for="nama">alamat:</label>
      <input type="text" class="form-control" name="nim">
    </div>
    <div class="form-group">
      <label for="nama">no hp:</label>
      <input type="text" class="form-control" name="nim">
    </div>
    <div class="form-group">
      <label for="nama">semester:</label>
      <input type="text" class="form-control" name="nim">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
