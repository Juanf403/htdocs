<!DOCTYPE html>
<html class="app" lang="en">
<head>
    <link href="css/font.css" rel="stylesheet" type="text/css">
    <link href="css/fuelux.css" rel="stylesheet" type="text/css">
    <link href="css/fullcalendar.css" rel="stylesheet" type="text/css">
    <link href="css/theme.css" rel="stylesheet" type="text/css">
    <link href="css/app.v1.css" rel="stylesheet" type="text/css">
</head>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Evento</h4>
      </div>
      <div class="modal-body" id = "bg">
      <?php
      $serv = "localhost";
      $user = "root";
      $pass = "";
      $data = "calendar";

      // Create connection
$conn = mysqli_connect($serv, $user, $pass, $data);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
        if (isset($_POST['crear'])) {
            # code...
            $title       = mysql_real_escape_string($_POST['title']);
            $start       = mysql_real_escape_string($_POST['start']);
            $end         = mysql_real_escape_string($_POST['end']);
            $para        = mysql_real_escape_string($_POST['para']);
            $descripcion = mysql_real_escape_string($_POST['descripcion']);

            $sql = "INSERT INTO evenement SET title='".$title."',start='".$start."',end='".$end."', descripcion='".$descripcion."'";

            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);
            header("location : fullcalendar.php");
        }
         ?>
        <form role="form" method = "post">

            <div class="form-group">
                <input class="form-control" placeholder="Evento sin Titulo" type=
                "text" name = "title">
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-3">
                        <input class="form-control" type="date" name = "start">
                    </div><label class="col-md-1">a</label>
                    <div class="col-md-3">
                        <input class="form-control" type="date" name = "end">
                    </div>
                    <div class="col-md-3">
                        <label class="control-label pull-right">Evento para:</label>
                    </div>
                    <div class="col-md-2">
                        <select id="target" class="form-control" name = "para">
                            <option value="JAV" selected="selected">JAV</option>
                            <option value="WR" selected="selected" >WR</option>
                            <option value="JAT" selected="selected">JAT</option>
                            <option value="LMP" selected="selected">LMP</option>
                        </select>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="bs-example col-md-12">
                    <textarea class="form-control" placeholder="Descripcion del Evento" rows="3" name="descripcion"></textarea>
                </div>
            </div>
            <div class="modal-footer" id="bg">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit"  name = "crear" class="btn btn-primary">Crear Evento</button>
      </div>
        </form>
    </div>
    </div>
  </div>
</div>
<body class="">
    <section class="vbox">
        <section class="hbox stretch">
            <section id="content">
                <section class="hbox stretch">
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
                                        "radio">Semana</label>
                                        <label class=
                                        "btn btn-sm btn-bg btn-default"
                                        id="dayview"><input name=
                                        "options" type=
                                        "radio">D&iacutea</label>
                                    </div>
                                    <div class="btn-group" data-toggle="modal" data-target="#myModal">
                                        <button class="btn btn-sm btn-dark btn-icon"title="Agregar Evento" type="button">
                                            <i class="fa fa-plus" ></i>
                                        </button>
                                        <div class="btn-group hidden-nav-xs">
                                        <button class="btn btn-sm btn-primary"
                                        type="submit">Agregar Evento <span class="caret"></span>
                                        </button>
                                        </div>
                                    </div>
                                </header>
                                <div class="calendar" id="calendar">
                                </div>
                                <div id="fullCalModal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"> x </span> <span class="sr-only">close</span></button>
                                            <h4 id="modalTitle" class="modal-title"></h4>
                                        </div>
                                        <div id="modalBody" class="modal-body"></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">ok</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </section>
                        </section>
                    </section>
            </section>
        </section>
        </section>
    </section>
    <!-- Bootstrap --><!-- App -->
    <script src="js/app.v1.js"></script> 
    <!-- fuelux -->
    <script src="js/fuelux.js"></script>
    <!-- fullcalendar -->
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/app.plugin.js"></script>
</body>
</html>
