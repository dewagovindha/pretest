<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>KSP Mandiri</title>

  <!-- Favicons -->
  <link href="/img/koperasi.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <!-- Custom styles for this template -->
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>
<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="/" class="logo"><b>CRUD <span>Dosen</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">       
        
      </div>
     
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="/img/koperasi.png" class="img-circle" width="80" style="background-color: gray;"></a></p>


          <li class="mt">
            <a class="active" href="/dosen">
              <i class="fa fa-dashboard"></i>
              <span>Data Dosen</span>
              </a>
          </li>
 

          <!-- <li>
            <a href="/profil">
              <i class="fa fa-sign-in {{ Request::is('profil') ? 'active' : '' }}"></i>
              <span>Profil</span>
              </a>
          </li> -->
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

    <section id="main-content">
        @yield('content')
    </section>

    
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="/lib/jquery.scrollTo.min.js"></script>
  <script src="/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="/lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="/lib/jquery-ui-1.9.2.custom.min.js"></script>
  <!--custom switch-->
  <script src="/lib/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="/lib/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="/lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="/lib/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="/lib/form-component.js"></script>

</body>

</html>