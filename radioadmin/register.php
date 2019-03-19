<?php
session_start();
require_once('class.user.php');
$user = new USER();

if($user->is_loggedin()!="")
{
	$user->redirect('home.php');
}

if(isset($_POST['submitregistrationform']))
{
	$unama = strip_tags($_POST['unama']);
	$emel = strip_tags($_POST['emel']);
	$password = strip_tags($_POST['password']);	
	
	if($unama=="")	{
		$error[] = "provide username !";	
	}
	else if($emel=="")	{
		$error[] = "provide email id !";	
	}
	else if(!filter_var($emel, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Please enter a valid email address !';
	}
	else if($password=="")	{
		$error[] = "provide password !";
	}
	else if(strlen($password) < 6){
		$error[] = "Password must be atleast 6 characters";	
	}
	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT unama, emel FROM users WHERE unama=:uname OR emel=:emel");
			$stmt->execute(array(':unama'=>$unama, ':emel'=>$emel));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
				
			if($row['unama']==$unama) {
				$error[] = "sorry username already taken !";
			}
			else if($row['emel']==$emel) {
				$error[] = "sorry email id already taken !";
			}
			else
			{
				if($user->register($unama,$emel,$password)){	
					$user->redirect('register.php?joined');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}	
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Radio MBI</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="./vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <h2 class="text-center mb-4">Register</h2>
            <div class="auto-form-wrapper">
            <form method="post" class="form-signin">
            <?php
			if(isset($error))
			{
			 	foreach($error as $error)
			 	{
					 ?>
                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                     </div>
                     <?php
				}
			}
			else if(isset($_GET['joined']))
			{
				 ?>
                 <div class="alert alert-info">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='login.php'>login</a> here
                 </div>
                 <?php
			}
			?>
              <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="unama" id="unama" class="form-control" placeholder="Nama Pengguna" value="<?php if(isset($error)){echo $unama;}?>"/>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
              <div class="form-group">
                  <div class="input-group">
                    <input type="email" name="emel" id="emel" class="form-control" placeholder="Emel" value="<?php if(isset($error)){echo $emel;}?>" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Kata Laluan">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" name="submitregistrationform" id="submitregistrationform">Daftar</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Already have and account ?</span>
                  <a href="login.php" class="text-black text-small">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="./vendors/js/vendor.bundle.base.js"></script>
  <script src="./vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="./js/off-canvas.js"></script>
  <script src="./js/misc.js"></script>
  <!-- endinject -->
</body>

</html>