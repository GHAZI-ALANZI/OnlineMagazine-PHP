<?php
  require_once('sess_auth.php');
  
?>
<head>
  <style>
    :root{
      --base_url:<?php echo base_url ?>;
    }
  </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title><?php echo $_settings->info('title') != false ? $_settings->info('title').' | ' : '' ?><?php echo $_settings->info('name') ?></title>
    <link rel="icon" href="<?php echo validate_image($_settings->info('logo')) ?>" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
 
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url ?>dist/css/adminlte.css">
    <link rel="stylesheet" href="<?php echo base_url ?>dist/css/bootwatch.min.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    

     <!-- jQuery -->
    <script src="<?php echo base_url ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?php echo base_url ?>plugins/toastr/toastr.min.js"></script>
    <script>
        var _base_url_ = '<?php echo base_url ?>';
    </script>
    <script src="<?php echo base_url ?>dist/js/script.js"></script>

  </head>