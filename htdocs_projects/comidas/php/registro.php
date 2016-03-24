<?php

if ( isset($_POST['correo']) ){
  $correo = mysql_real_escape_string($_POST['correo']);
  $pass   = mysql_real_escape_string($_POST['pass']);

  $query = "SELECT * FROM negocios WHERE correo='".$correo."' AND contrasena='".$pass."' LIMIT 1";
  if ( mysql_num_rows(mysql_query($query)) ){
    $data = mysql_fetch_object(mysql_query($query));

    $_SESSION['userId']     = $data->idnegocios;
    $_SESSION['userCorreo'] = $data->correo;
    $_SESSION['userPanel']  = $data->panel;

  }
  
}
?>
<div>
  <div>
    <h4>Empresas</h4>
  </div>
  <div style="">
    <form action="" method="post">
      <div class="form-group">
        <label for="correoInput">Correo Electr&oacute;nico: </label>
        <input type="email" class="form-control" name="correo" id="correoInput" placeholder="">
      </div>
      <div class="form-group">
        <label for="passInput">Contrase&ntilde;a: </label>
        <input type="password" class="form-control" name="pass" id="passInput" placeholder="">
      </div>
      <button type="submit" class="btn btn-default btn-block">Entrar</button>
    </form>
  </div>
</div>