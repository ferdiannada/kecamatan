<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="<?= base_url() ?>/admin/images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Dashboard Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="<?= base_url() ?>/admin/images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/admin/css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/admin/css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/admin/css/application.min.css">
    <!-- endinject -->

</head>

<body>

    <div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
        <main class="mdl-layout__content mdl-card__supporting-text">
            <div class="mdl-card mdl-card__login mdl-shadow--2dp">
                <div class="mdl-card__supporting-text color--dark-gray">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <span class="mdl-card__title-text text-color--smooth-gray">KECAMATAN GLENMORE</span>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <span class="login-name text-color--white">Sign up</span>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="text" id="name" name="nama">
                                <label class="mdl-textfield__label" for="name">Name</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="text" id="name" name="username">
                                <label class="mdl-textfield__label" for="name">Username</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="text" id="password" name="password">
                                <label class="mdl-textfield__label" for="password">Password</label>
                            </div>

                            <span>Pilih user instansi:</span>

                            <div class="form__article">
                                <br>
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="partition-fulltime">
                                    <input type="radio" id="partition-fulltime" class="mdl-radio__button" name="instansi" value="1" />
                                    <span class="mdl-radio__label">Puskesmas</span>
                                </label>
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="partition-partTime">
                                    <input type="radio" id="partition-partTime" class="mdl-radio__button" name="instansi" value="2" />
                                    <span class="mdl-radio__label">KUA</span>
                                </label>
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="partition-remote">
                                    <input type="radio" id="partition-remote" class="mdl-radio__button" name="instansi" value="3" />
                                    <span class="mdl-radio__label">Koramil</span>
                                </label>
                            </div>

                            <!-- <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="text" id="e-mail">
                                <label class="mdl-textfield__label" for="e-mail">Email</label>
                            </div> -->
                            <!-- <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect checkbox--colored-light-blue checkbox--inline" for="checkbox-1">
                                <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked>

                            </label>
                            <span class="login-link">I agree all statements in <a href="#" class="underlined">terms of service</a></span> -->
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                            <a href="<?= base_url() ?>/sadmin/login" class="login-link">I have already signed up</a>
                            <div class="mdl-layout-spacer"></div>
                            <a href="index.html">
                                <buttons class="mdl-button mdl-js-button mdl-button--raised color--light-blue">
                                    SIGN UP
                                </buttons>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- inject:js -->
    <script src="<?= base_url() ?>/admin/js/d3.min.js"></script>
    <script src="<?= base_url() ?>/admin/js/getmdl-select.min.js"></script>
    <script src="<?= base_url() ?>/admin/js/material.min.js"></script>
    <script src="<?= base_url() ?>/admin/js/nv.d3.min.js"></script>
    <script src="<?= base_url() ?>/admin/js/layout/layout.min.js"></script>
    <script src="<?= base_url() ?>/admin/js/scroll/scroll.min.js"></script>
    <script src="<?= base_url() ?>/admin/js/widgets/charts/discreteBarChart.min.js"></script>
    <script src="<?= base_url() ?>/admin/js/widgets/charts/linePlusBarChart.min.js"></script>
    <script src="<?= base_url() ?>/admin/js/widgets/charts/stackedBarChart.min.js"></script>
    <script src="<?= base_url() ?>/admin/js/widgets/employer-form/employer-form.min.js"></script>
    <script src="<?= base_url() ?>/admin/js/widgets/line-chart/line-charts-nvd3.min.js"></script>
    <script src="<?= base_url() ?>/admin/js/widgets/map/maps.min.js"></script>
    <script src="<?= base_url() ?>/admin/js/widgets/pie-chart/pie-charts-nvd3.min.js"></script>
    <script src="<?= base_url() ?>/admin/js/widgets/table/table.min.js"></script>
    <script src="<?= base_url() ?>/admin/js/widgets/todo/todo.min.js"></script>
    <!-- endinject -->

</body>

</html>