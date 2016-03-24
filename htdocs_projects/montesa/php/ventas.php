<section>
<div class="card">
    <div class="card-header">
        <h2><i class="fa fa-file"></i> Historial de Ventas</h2>
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
                <tr>
                    <td>13100</td>
                    <td>Paracetamol</td>
                    <td>Paracetamol</td>
                    <td>15</td>
                    <td>150.00</td>
                    <td>2250</td>
                    <td> Informacion Adicional de Prueba</td>
                    <td>
                        <a href="admin.php?m=serviciosEditar&id=<?php echo $q->idservicios; ?>" class="btn btn-sm btn-success"> <i class="fa fa-check"></i> </a> &nbsp;&nbsp;&nbsp;
                        <a href="admin.php?m=servicios&del=<?php echo $q->idservicios; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
                    </td>
                </tr>   
                 <tr>
                    <td>13106</td>
                    <td>Naproxeno</td>
                    <td>Naproxeno</td>
                    <td>10</td>
                    <td>100</td>
                    <td>1000</td>
                    <td> Informacion Adicional de Prueba</td>
                    <td>
                        <a href="admin.php?m=serviciosEditar&id=<?php echo $q->idservicios; ?>" class="btn btn-sm btn-success"> <i class="fa fa-check"></i> </a> &nbsp;&nbsp;&nbsp;
                        <a href="admin.php?m=servicios&del=<?php echo $q->idservicios; ?>" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
                    </td>
                </tr>           

            </tbody>
        </table>
    </div>
        <footer class="panel-footer">
       
    </footer>
</section>