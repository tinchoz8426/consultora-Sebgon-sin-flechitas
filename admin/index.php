<?php 
	session_start();
	if (isset($_SESSION['logAdmin']))
	{
		if($_SESSION['perfil']==1)
		{
			header("location:users.php");	
		}
		if($_SESSION['perfil']==2)
		{
			header("location:form.php");	
		}
	}
	$root = '';
	include('../lib/init.php');
	include('../clases/clases_user.php');
	
	if($_POST["step"]== '2')
	{
		$usuario = $_POST['username'];
		$password = $_POST['password'];
		$em = new Users();
		$em->getUserLogin($usuario,$password);
		$id = $em->getId();
		if ($id!=0){
			$_SESSION['id_usuario'] = $id;
			$_SESSION['perfil'] = $em->getPerfil();
			$_SESSION['logAdmin'] = "ok";
			if($_SESSION['perfil']==1)
			{
				header("location:users.php");	
			}
			if($_SESSION['perfil']==2)
			{
				header("location:form.php");	
			}
		} else {
			header("location:index.php?err=1");
		}
	}	
	$err = $_GET["err"];
	
	$root = '';
	include('template/meta.php'); 
?>
<body onLoad="changeStackOrder()">
<div id="general" style="margin:0px auto; width:900px;">
	<?php include('template/header.php'); ?>
	<div id="container">
		<div id="mainContainer">
			<div class="pagelinks">Admin | Login</div>
			  <form name="form1" method="post" action="index.php">
				<table width="200px" border="0" align="center" cellpadding="5" cellspacing="0">
					<tr>
					  <td>User</td>
					  <td><input type="text" name="username">
					  </td>
					</tr>
					<tr>
					  <td>Password</td>
					  <td><input type="password" name="password"></td>
					</tr>
					<tr>
					  <td colspan="2" align="center">
					  	<input type="submit" name="form1" value="Submit">
						<input type="hidden" name="step" value="2"><br/>
						<?php switch($err) { 
							case 1: echo 'The User is not valid'; break;
							case 2: echo 'Thank you for using our Site'; break;
							case 3: echo 'Please login'; break;
						} ?>
					  </td>
					</tr>
				  </table>
			  </form>
		</div>
	</div>
	<?php include('template/footer.php'); ?>
</div>
</BODY>
</HTML>