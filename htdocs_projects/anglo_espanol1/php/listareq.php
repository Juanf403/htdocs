<section>
<div class="card">
    <div class="card-header">
        <h2><i class="fa fa-file"> Requisiciones </i><small> Historial de requisiciones</small></h2>
    </div>
    
    <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Articulo</th>
                    <th>Marca</th>
                    <th width="150">Cantidad</th>
                    <th width="150">P. Unitario</th>
                    <th width="150">Total </th>
                    <th>Informacion Adicional</th>
                </tr>
            </thead>
            <tbody>
<?php
            if ( isset($_GET['del']) ){
                $del = mysql_real_escape_string($_GET['del']);
                mysql_query("DELETE FROM requisiciones WHERE idrequisiciones='".$del."'");
            }

            if ( isset($_GET['buscar']) ){
                $buscar = mysql_real_escape_string($_GET['buscar']);
                $consulta  = "SELECT * FROM requisiciones WHERE 
                    (articulo LIKE '%".$buscar."%' OR 
                        marca LIKE '%".$buscar."%' OR 
                        cantidad LIKE '%".$buscar."%' OR 
                        punitario LIKE '%".$buscar."%' OR
                        total LIKE '%".$buscar."%' OR  
                        adicional LIKE '%".$buscar."%') 
                    ORDER BY fecha DESC";
                    $url = "admin.php?m=requisiciones&buscar=".$buscar;
            } else {
                $consulta  = "SELECT * FROM requisiciones ORDER BY fecha DESC";
                $url = "admin.php?m=requisiciones";
            }

##### PAGINADOR #####
$rows_per_page = 20;

if(isset($_GET['pag']))
    $page = mysql_real_escape_string($_GET['pag']);
else if (@$_GET['pag'] == "0")
    $page = 1;
else 
    $page = 1;

$num_rows       = mysql_num_rows(mysql_query($consulta));
$lastpage       = ceil($num_rows / $rows_per_page);         
$page     = (int)$page;
if($page > $lastpage){
    $page = $lastpage;
}
if($page < 1){
    $page = 1;
}
$limit      = 'LIMIT '. ($page -1) * $rows_per_page . ',' .$rows_per_page;
$consulta  .=" $limit";

$consulta = mysql_query($consulta);
##### PAGINADOR #####

            while($q = mysql_fetch_object($consulta)){
?>
                <tr>
                    <td><?php echo $q->idrequisiciones; ?></td>
                    <td><?php echo $q->articulo; ?></td>
                    <td><?php echo $q->marca; ?></td>
                    <td><?php echo $q->cantidad; ?></td>
                    <td><?php echo $q->punitario; ?></td>
                    <td><?php echo $q->total; ?></td>
                    <td><?php echo $q->adicional; ?></td>
                    <td>
                        <a href="admin.php?m=serviciosEditar&id=<?php echo $q->idservicios; ?>" class="btn btn-sm btn-success"> <i class="fa fa-check"></i> </a> &nbsp;&nbsp;&nbsp;
                        <a href="admin.php?m=servicios&del=<?php echo $q->idservicios; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
                    </td>
                </tr>           
<?php
            }
?>
            </tbody>
        </table>
    </div>
        <footer class="panel-footer">
        <div class="row">
            <div class="col-sm-12 text-right text-center-xs">
                <ul class="pagination pagination-sm m-t-none m-b-none">
<?php
    if($num_rows != 0){
        $nextpage = $page + 1;
        $prevpage = $page - 1;

        if ($page == 1) {
            echo '<li class="disabled"><a href="#"><i class="fa fa-chevron-left"></i></a></li>';
            
            echo '<li class="active"><a href="">1</a></li>';
            
            for($i= $page+1; $i<= $lastpage ; $i++){
                echo '<li><a href="'.$url.'&pag='.$i.'">'.$i.'</a></li> ';
            }

            if($lastpage >$page ){
                echo '<li><a href="'.$url.'&pag='.$nextpage.'"><i class="fa fa-chevron-right"></i></a></li>';
            }else{  
                echo '<li class="disabled"><a href="#"><i class="fa fa-chevron-right"></i></a></li>';
            }
        } else {
            echo '<li><a href="'.$url.'&pag='.$prevpage.'"><i class="fa fa-chevron-left"></i></a></li>';
            
            for($i= 1; $i<= $lastpage ; $i++){
                if($page == $i){
                    echo '<li class="active"><a href="#">'.$i.'</a></li>';
                } else {
                    echo '<li><a href="'.$url.'&pag='.$i.'">'.$i.'</a></li> ';
                }
            }
         
            if($lastpage >$page ){
                echo '<li><a href="'.$url.'&pag='.$nextpage.'"><i class="fa fa-chevron-right"></i></a></li>';
            } else {
                echo '<li class="disabled"><a href="#"><i class="fa fa-chevron-right"></i></a></li>';
            }
        }
    }
?>
                </ul>
            </div>
        </div>
    </footer>
</section>