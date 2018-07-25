
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Garcia Contabilidade Corporativa</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/less/modal.less" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="login">
                        <!-- Logo icon -->
                        
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                       
                            
                                
                        </li>
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                       
                        <!-- Comment -->
                       
                        <!-- End Comment -->
                        <!-- Messages -->
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="uploads/avatars/{{Auth::user()->avatar}}" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="perfil"><i class="ti-user"></i> Perfil</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off">
                                        {{ __('Sair') }}</i></a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         {{ csrf_field() }}
                                         </form></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Administrador</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-briefcase"></i><span class="hide-menu">Empresas <span></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="cadastrar">Cadastrar Empresas </a></li>
                                <li><a href="empresas">Empresas Cadastradas </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-file-pdf-o"></i><span class="hide-menu">Documentos</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="upload">Enviar Documentos</a></li>
                                <li><a href="documentos">Documentos por Cliente</a></li>
                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-barcode"></i><span class="hide-menu">Recibos</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="gerar">Gerar Recibos</a></li>
                                <li><a href="todos">Recibos Gerados</a></li>
                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-file-excel-o"></i><span class="hide-menu">Relatórios</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="financas">Cadastrar Dados da Empresa</a></li>
                                <li><a href="relatorios">Gerar Relatórios</a></li>
                                
                            </ul>
                        </li>
                        
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="right_col" role="main">
          
    
    <section class="content-header">
      <main class="py-4">
            @yield('content')

           
        </main>
    <!-- Main content -->
    <section class="content">
    </section>
    </div>
</div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 Análise e Desenvolvimento de Sistemas <a href="https://guairaca.com.br/site">Guairacá</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/mask.js"></script>
      <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
       <script src="js/lib/calendar-2/pignose.init.js"></script>
       <script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.init.js"></script>
    <script src="jquery.js"></script>

<script src="mask/dist/jquery.inputmask.bundle.js"></script>
<script src="mask/dist/inputmask/phone-codes/phone.js"></script>
<script src="mask/dist/inputmask/phone-codes/phone-be.js"></script>
<script src="mask/dist/inputmask/phone-codes/phone-ru.js"></script>




<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>