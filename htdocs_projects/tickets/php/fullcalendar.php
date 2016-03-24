<!DOCTYPE html>
<html class="app" lang="en">
<head>
    <link href="css/font.css" rel="stylesheet" type="text/css">
    <link href="css/fuelux.css" rel="stylesheet" type="text/css">
    <link href="css/fullcalendar.css" rel="stylesheet" type="text/css">
    <link href="css/theme.css" rel="stylesheet" type="text/css">
    <link href="css/app.v1.css" rel="stylesheet" type="text/css">
</head>
<body class="">
    <section class="vbox">
        <section class="hbox stretch">
            <section id="content">
                <section class="hbox stretch">
                    <!-- .aside -->
                    <aside>
                        <section class="vbox">
                            <section class="scrollable wrapper">
                                <section class="panel panel-default">
                                    <header class=
                                    "panel-heading bg-light clearfix">
                                        <div class="btn-group pull-right"
                                        data-toggle="buttons">
                                            <label class=
                                            "btn btn-sm btn-bg btn-default active"
                                            id="monthview"><input name=
                                            "options" type=
                                            "radio">Mes</label>
                                            <label class=
                                            "btn btn-sm btn-bg btn-default"
                                            id="weekview"><input name=
                                            "options" type=
                                            "radio">Año</label>
                                            <label class=
                                            "btn btn-sm btn-bg btn-default"
                                            id="dayview"><input name=
                                            "options" type=
                                            "radio">Día</label>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-dark btn-icon"title="New project" type="button">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                            <div class="btn-group hidden-nav-xs">
                                            <button class="btn btn-sm btn-primary dropdown-toggle"data-toggle="dropdown" 
                                            type="button">Agregar Evento <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu text-left">
                                                <li>
                                                    <a href="#">Evento</a>
                                                </li>
                                                <li>
                                                    <a href="#">Tarea</a>
                                                </li>
                                                <li>
                                                    <a href="#">Recordatorio</a>
                                                </li>
                                            </ul>
                                            </div>
                                        </div>
                                    </header>
                                    <div class="calendar" id="calendar">
                                    </div>
                                </section>
                            </section>
                        </section>
                    </section><a class="hide nav-off-screen-block" data-target=
                    "#nav,html" data-toggle="class:nav-off-screen, open" href=
                    "#"></a>
                </section>
            </section>
        </section>
    </section><!-- Bootstrap --><!-- App -->
    <script src="js/app.v1.js">
    </script> <!-- fuelux -->
    <script src="js/fuelux.js">
    </script><!-- fullcalendar -->
    <script src="js/jquery-ui-1.10.3.custom.min.js">
    </script>
    <script src="js/jquery.ui.touch-punch.min.js">
    </script>
    <script src="js/fullcalendar.min.js">
    </script>
    <script src="js/demo.js">
    </script> 
    <script src="js/app.plugin.js">
    </script>
</body>
</html>