<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=$baseUrl?>assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title><?=$title?> - POS System</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="<?=$baseUrl?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="<?=$baseUrl?>assets/css/style.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="<?=$baseUrl?>assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?=$baseUrl?>assets/css/color.css" />

</head>

<body class="app sidebar-mini ltr">

    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="<?=$baseUrl?>assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <img src="<?=$baseUrl?>assets/images/brand/logo-light.png" class="header-brand-img" alt="">
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <div>
                            <span class="login100-form-title pb-5">
                                Ingresa al sistema
                            </span>
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class="mx-0"><a href="#tab5" class="active" data-bs-toggle="tab"><i class="fa fa-shield" aria-hidden="true"></i></a></li>
                                            <li class="mx-0"><a href="#tab6" data-bs-toggle="tab">Recuperar contrase??a</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <form method="post" action="<?=$baseUrl?>"> 
                                                <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                    </a>
                                                    <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="Nombre de usuario" name="username" required>
                                                </div>
                                                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                                    </a>
                                                    <input class="input100 border-start-0 form-control ms-0" type="password" placeholder="Contrase??a" name="password" required>
                                                </div>
                                                <div class="container-login100-form-btn">
                                                    <button type="submit" class="login100-form-btn btn-primary">
                                                        Continuar
                                                    </button>
                                                </div>
                                                <label class="login-social-icon"><span></span></label>
                                                <div class="response"></div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="tab6">
                                            <div id="mobile-num" class="wrap-input100 validate-input input-group mb-4">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="email" placeholder="Correo electr??nico" name="email" required>
                                            </div>
                                            <div class="container-login100-form-btn ">
                                                <a href="#" class="login100-form-btn btn-primary">
                                                        Continuar
                                                </a>
                                                <label class="login-social-icon"><span></span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="<?=$baseUrl?>assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="<?=$baseUrl?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?=$baseUrl?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="<?=$baseUrl?>assets/js/show-password.min.js"></script>

    <!-- GENERATE OTP JS -->
    <script src="<?=$baseUrl?>assets/js/generate-otp.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="<?=$baseUrl?>assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Sweet Alert -->
    <script src="<?=$baseUrl?>assets/plugins/sweet-alert/sweetalert.min.js"></script>

    <!-- CUSTOM JS -->
    <script src="<?=$baseUrl?>assets/js/custom.js"></script>
    <script src="<?=$baseUrl?>assets/js/ajax.js"></script>

</body>

</html>