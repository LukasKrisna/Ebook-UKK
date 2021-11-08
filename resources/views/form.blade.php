<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ebook</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body>
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah Buku</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ url('dashboard') }}" method="post" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Judul</label>
          <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Pengarang</label>
          <input type="text" class="form-control" name="pengarang" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Penerbit</label>
          <input type="text" class="form-control" name="penerbit" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Deskripsi</label>
          <input type="text" class="form-control" name="deskripsi" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Persediaan</label>
          <input type="number" class="form-control" name="persediaan" placeholder="Password">
        </div>
        <div class="form-group">
          <div class="custom-file">
            <label for="gambar" class="form-label">Upload Image</label>
            <input class="form-control" type="file" id="gambar" name="gambar">
          </div>
        </div>
        </div>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
<script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
<script src="assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>