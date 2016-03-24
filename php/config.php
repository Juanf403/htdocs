<div class="row">
	<div class="col-sm-6">
		<section class="panel panel-default pos-rlt clearfix">
			<header class="panel-heading"> <i class="fa fa-users"></i> Users</header>
			
			<div class="col-md-12">
					<form role="form" action="" method="post">
						<br>
<?php
						if ( isset($_GET['id']) ){
							$id = mysql_real_escape_string($_GET['id']);

							if ( isset($_POST['user']) ){
								$user = mysql_real_escape_string($_POST['user']);
								$pass = mysql_real_escape_string($_POST['pass']);

								if ( mysql_query("UPDATE usuarios SET usuario='".$user."',password='".$pass."' WHERE id='".$id."'") ){
									echo '<div class="alert alert-success"> Username updated.</div>';
								} else {
									echo '<div class="alert alert-danger"> Error, try again.</div>';
								}	
							}

							$data = mysql_fetch_object(mysql_query("SELECT * FROM usuarios WHERE id='".$id."'"));

							$user = $data->usuario;
							$pass = $data->password;
						} else {
							$user = "";
							$pass = "";

							if ( isset($_POST['user']) ){
							
								$user = mysql_real_escape_string($_POST['user']);
								$pass = mysql_real_escape_string($_POST['pass']);

								if ( mysql_query("INSERT INTO usuarios SET usuario='".$user."',password='".$pass."'") ){
									echo '<div class="alert alert-success"> Username added.</div>';
								} else {
									echo '<div class="alert alert-danger"> Error, try again.</div>';
								}
							}
						}
?>
						<div class="row">
							<div class="col-sm-5">
								<div class="form-group">
									<input type="text" class="form-control" name="user" placeholder="new username" value="<?php echo $user; ?>">
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<input type="password" class="form-control" name="pass" placeholder="password" value="<?php echo $pass; ?>">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group text-right">
									<button type="submit" class="btn btn-sm btn-success"><strong> <i class="fa fa-check"></i> Add </strong></button>
								</div>
							</div>
							
						</div>
<?php

						if ( isset($_GET['del']) ){
							$id = mysql_real_escape_string($_GET['del']);

							mysql_query("DELETE FROM usuarios WHERE id='".$id."'");

						}
?>
					</form>
				<hr>
				<div class="table-responsive">
					<table class="table table-striped b-t b-light">
						<thead>
							<tr>
								<th>User</th>
								<th width="100"></th>
							</tr>
						</thead>
						<tbody>
<?php
						$users   = mysql_query("SELECT * FROM usuarios ORDER BY usuario ASC");
						while($u = mysql_fetch_object($users)){
?>
							<tr>
								<td><?php echo $u->usuario; ?></td>
								<td class="text-center">
									<a href="admin.php?m=config&id=<?php echo $u->id; ?>" class="btn btn-xs btn-default"> <i class="fa fa-edit"></i> </a> &nbsp;&nbsp;&nbsp;
									<a href="admin.php?m=config&del=<?php echo $u->id; ?>" class="btn btn-xs btn-danger"> <i class="fa fa-times"></i> </a>
								</td>
							</tr>
<?php
						}
?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>

	<div class="col-sm-6">
		<section class="panel panel-default pos-rlt clearfix">
			<header class="panel-heading"> <i class="fa fa-users"></i> Mail Options</header>
			<div class="col-md-12">
					<form role="form" action="" method="post">
						<br>
<?php
						if ( isset($_POST['name']) ){
							$name = mysql_real_escape_string($_POST['name']);
							$mail = mysql_real_escape_string($_POST['mail']);

							if ( mysql_query("UPDATE config SET name='".$name."',mail='".$mail."'") ){
								echo '<div class="alert alert-success"> Mail config updated.</div>';
							} else {
								echo '<div class="alert alert-danger"> Error, try again.</div>';
							}	
						}

						$data = mysql_fetch_object(mysql_query("SELECT * FROM config ORDER BY id ASC"));

						$name = $data->name;
						$mail = $data->mail;
						
?>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" name="name" placeholder="" value="<?php echo $name; ?>">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Mail</label>
									<input type="text" class="form-control" name="mail" placeholder="" value="<?php echo $mail; ?>">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group text-right">
									<button type="submit" class="btn btn-sm btn-success"><strong> <i class="fa fa-check"></i> Update </strong></button>
								</div>
							</div>
							
						</div>
					</form>
			</div>
		</section>
	</div>
</div>