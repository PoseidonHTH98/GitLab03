<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <title>MANGA HOT MANG LẠI NIỀM VUI CHO MỌI NGƯỜI </title>


    <base href="{{asset('')}}">

    <style type="text/css">
        body,
body[data-theme="light"] {
  --primaryColor: #f3ece7;
  --secondaryColor: #343837;
  --cardColor: #fff5ee;

}

body[data-theme="dark"] {
  --primaryColor: #343837;
  --secondaryColor: #f3ece7;
  --cardColor: #3c4142;

}

body,
button {
  background-color: var(--primaryColor);
}

p,
button {
  color: var(--secondaryColor);
}

;



body {
  background-color: var(--thirdColor);
  color: #fffffd;


}

h1,
p {
  padding: 0;
  margin: 0;
  color: var(--secondaryColor);
  font-family: 'Electrolize', sans-serif;
}

.container {
  padding: 1.5em;
  max-width: 1400px;
  margin: auto;
}

.grid {
  display: inline-block;
  width: 100%;
}

.col {
  width: 25%;
  float: left;
}

.card-container {
  padding: 0 1.5em 3em 1.5em;
}

body .card {
  background-color: var(--cardColor);

  text-align: center;
  padding: 0 0 1em 0;
  border-radius: 0.3em;

}

.card>h1 {
  font-size: 4em;
}

.card>.data-type {
  letter-spacing: 4px;
  margin-left: 8px;
}

.text-sucess {
  color: green;
}

.text-danger {
  color: red;
}

.card>.data-today {
  margin: 2em 0 1em 0;
}

.border {
  background-color: #4267B2;
  height: 0.4em;
  border-top-left-radius: 0.3em;
  border-top-right-radius: 0.3em;
  margin-bottom: 1em;
}

#b-card-facebook>.border {
  background-color: #4F86F7;
}

#b-card-facebook>p>i {
  color: #4267B2;
}

#b-card-twitter>.border {
  background-color: #50BFE6;
}

#b-card-twitter>p>i {
  color: #1ba2f4;
}

#b-card-instagram>.border {
  background-color: #FD5B78;
}

#b-card-instagram>p>i {
  background: linear-gradient(to right, #fac06c, #db4e93);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}

#b-card-pinterest>.border {
  background-color: #ED0A3F;
}

#b-card-pinterest>p>i {
  color: #da4e5b;
}

.social-icon {
  font-size: 2em;
}

.social-username {
  letter-spacing: 0.5px;
  padding: 1em 0;
}

.social-username>i {
  vertical-align: middle;
  letter-spacing: 7px;
}

@media (max-width: 1100px) {
  .col {
    width: 50%;
  }
}

@media (max-width: 600px) {
  .col {
    width: 100%;
  }
}

.light-blue {
  color: #8a81bd;
}

#first-header {
  padding: 1.5em 0 3em 1.5em;
}

#hook {
  padding: 0 0 1em 1.5em;
}

.small-card {
  text-align: left;
  position: relative;
  height: 120px;

}

.small-text {
  top: 1.5em;
  left: 1.5em;
  position: absolute;
}

.small-logo {
  top: 1em;
  right: 1.5em;
  position: absolute;
}

.small-number {
  bottom: 0.05em;
  left: 0.3em;
  position: absolute;
}

.small-percent {
  bottom: 0.8em;
  right: 1.5em;
  position: absolute;
}


button {
  font-family: 'Electrolize', sans-serif;
  padding: 0.5em;
  margin-top: 0.8em;
  border: 10px solid;
  border-image-slice: 1;
  border-width: 5px;
  border-image-source: linear-gradient(to left, #743ad5, #d53a9d);
}



    </style>
    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin_asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="admin_asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <script type="text/javascript" language="javascript" src="admin_asset/ckeditor/ckeditor.js" ></script>

    <!-- Important Owl stylesheet -->
        <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
         
        <!-- Default Theme -->
        <link rel="stylesheet" href="owl-carousel/owl.theme.css">
         
        <!--  jQuery 1.7+  -->
        <script src="jquery-1.9.1.min.js"></script>
         
        <!-- Include js plugin -->
        <script src="assets/owl-carousel/owl.carousel.js"></script>
</head>

<body>

    <div id="wrapper" style="background: linear-gradient(120deg,#3a7bd5,
#3a6073)">

       @include('admin.layout.header')

       @yield('content')

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admin_asset/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin_asset/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin_asset/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="admin_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>


    @yield('script')
</body>

</html>
