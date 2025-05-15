<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $title ?> - Dashboard Admin</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<style>
    /* Custom Sidebar Styles */
.main-sidebar {
  background: linear-gradient(135deg,rgb(12, 13, 14),rgb(9, 10, 12)); /* Gradasi biru */
  color: white;
  box-shadow: 2px 0 10px rgba(0, 0, 0, 0.3);
  transition: all 0.3s ease-in-out;
}

.brand-link {
  background-color: rgba(255, 255, 255, 0.05);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  text-align: center;
}

.brand-link .brand-image {
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.4);
}

.brand-text {
  color: #ffffff;
  font-weight: bold;
  letter-spacing: 0.5px;
}

.sidebar .nav-item {
  margin-bottom: 5px;
}

.sidebar .nav-link {
  color:rgb(15, 14, 14);
  transition: all 0.2s ease-in-out;
  border-radius: 6px;
}

.sidebar .nav-link:hover {
  background-color: rgba(9, 9, 9, 0.15);
  transform: translateX(5px);
}

.sidebar .nav-link.active {
  background-color: rgba(255, 255, 255, 0.3);
  color: #fff;
  font-weight: bold;
  box-shadow: inset 2px 0 0rgb(15, 14, 14);
}

.nav-icon {
  color: #ffffff;
  opacity: 0.9;
  margin-right: 8px;
}

.nav-header {
  color: #ccc;
  font-size: 0.85rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: 20px;
  padding-left: 10px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  padding-bottom: 5px;
}

/* Optional Scrollbar Styling */
.sidebar::-webkit-scrollbar {
  width: 6px;
}

.sidebar::-webkit-scrollbar-thumb {
  background: rgba(15, 15, 15, 0.2);
  border-radius: 10px;
}

</style>