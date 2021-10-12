<?php include 'includes/session.php'; ?>

  
<?php include 'includes/header.php'; ?>
<body class="hold-transition register-page">
<div class="register-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }

      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	<div class="register-box-body">
    	<p class="login-box-msg"> <b style="color:#AE4B27">Get In Touch</b> </p>

    	<form action="process.php" method="POST">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="firstname" placeholder="Firstname"  required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="lastname" placeholder="Lastname"   required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Email"  required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
            <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <textarea style="resize:none; height:100px; "    class="form-control" name="msg" placeholder="Enter your message here..." required></textarea>
            <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
          </div>
          
          <hr>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="submit" style="border-radius:2px;"><i class="fa fa-check"></i> Submit</button>
        		</div>
      		</div>
    	</form>
      <br>
      <a href="index.php"><i class="fa fa-home"></i> Home</a>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>