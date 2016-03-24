<?php 


  if (isset($_GET['del'])) {
      $id = $_GET['del'];
      mysql_query("DELETE FROM solicitud WHERE idSolicitud=".$id);
  }
  $query = "SELECT * FROM solicitud ORDER BY Fecha DESC";
  $resultado  = mysql_query($query);

 ?>


 <div class="panel panel-default ">
  <header class="panel-heading"> <i class="fa fa-envelope-o"></i> Tickets</header>
    <div class="row wrapper">
      <div class="col-sm-12 m-b-xs">
        <a class="btn btn-sm btn-success" href="admin.php?m=soporteAgregar"><i class="fa fa-plus"></i> Agregar Ticket</a>
      </div>
    </div>
    <section class="hbox stretch">
      <aside class="bg-light lter">        
        <section class="table-responsive">
          <table id="example" class="table table-striped b-t b-light" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Id</th>
                <th>Empresa</th>
                <th>Nombre del cliente</th>
                <th>Fecha</th>
                <th>Problema</th>
                <th>Status</th>
                <th>email</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php 
                while ($obj = mysql_fetch_object($resultado) ) {
                      switch ($obj->StatusPeticion) {
                      case 'Pendiente':
                        $color = "bg-warning";
                      break;
                      case 'Finalizado':
                        $color = "bg-success";
                      break;
                    }
                                  echo "<tr>";
                      echo "<td>".$obj->idSolicitud."</td>";
                      echo "<td>".$obj->Empresa."</td>";
                      echo "<td>".$obj->Reporto."</td>";
                      echo "<td>".$obj->Fecha."</td>";
                      echo "<td>".$obj->Problema."</td>";
                      echo "<td><label class='label ".$color."'>".$obj->StatusPeticion."</label></td>";
                      echo "<td>".$obj->email."</td>";
                    
                
             ?>
              <td class="text-center">
            <?php
              if ( $_SESSION['userTp'] == "Administrador" ){
            ?>
                <a href="admin.php?m=solicitudesEditar&id=<?php echo $obj->idSolicitud; ?>" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
               <!-- <a href="admin.php?m=solicitudes&del=<?php echo $obj->idSolicitud; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>-->
            <?php
              } else {
                if ($obj->StatusPeticion != "Finalizado"){
            ?>
                  <a href="admin.php?m=tareas&finalizado=<?php echo $v->idtareas; ?>" class="btn btn-sm btn-success"> <i class="fa fa-check"></i> Finalizado</a>
            <?php
                }
              }
            ?>
              </td>

            <?php 
              echo "</tr>";
            }
            ?>
            </tbody>
          </table>
        </section>
      </aside><!-- /.aside --><!-- .aside -->
    </section>
</div>