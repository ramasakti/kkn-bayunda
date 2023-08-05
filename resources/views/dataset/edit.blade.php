<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ranting Muhammadiyah</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo-rtg-md.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css">
<link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- CSS Bootstrap Datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

  <!-- Javascript Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js">
  </script>
  <!-- Javascript Bootstrap Datepicker -->
  <script
  src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js">
  </script>
<!-- Skrip Bootstrap dan jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
<form action="{{ url('dataset/'.$dataset->id) }}" method='post'>
        @csrf

        <label for="ID" class="col-sm-2 row mb-2 col-form-label">ID</label>
        <input type="text" class="form-control" name="id" value="{{ $dataset->id }}"> <br/>
        
        <label for="nama" class="col-sm-2 row mb-2 col-form-label">Nama</label>
		    <input type="text" class="form-control"  required="required" name="nama" value="{{ $dataset->nama }}">

        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
        <input type="text" class="form-control"  required="required" name="tempat_lahir" value="{{ $dataset->tempat_lahir }}">

        <label for="tanggal_lahir" class="form-label mt-3">Tanggal Lahir</label>
        <input type="text" class="form-control" required="required" name="tanggal_lahir" value="{{ $dataset->tanggal_lahir }}">

        <label for="jabatan" class="form-label">Jabatan</label>
        <input type="text" class="form-control" required="required" name="jabatan" value="{{ $dataset->jabatan }}">

        <label for="NBM" class="form-label">NBM</label>
        <input type="text" class="form-control" required="required" name="NBM" value="{{ $dataset->NBM }}">

        <label for="pekerjaan" class="form-label">Pekerjaan</label>
        <input type="text" class="form-control" required="required" name="pekerjaan" value="{{ $dataset->pekerjaan}}">
        
        <button type="submit" class="btn btn-primary mt-7">Submit</button>
        <button type="button" class="btn btn-secondary mt-7" data-dismiss="modal">Close</button>
    </form>

  </div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>


<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    
	  





    




