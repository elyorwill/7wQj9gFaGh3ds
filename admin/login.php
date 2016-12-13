<?php


$loginpage=1;


include_once '../inc/configAll.php';

$_SESSION['rdrlocation'] = $currenturl;

if(isset($_SESSION['onlineadminid']))
header('location: index');

 ?>
<html>
<head>
<title>
Login
</title>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
body{
    background: url(http://www.hdbloggers.net/wp-content/uploads/2016/11/Dark-Abstract-Wallpaper-Background.jpg);
	background-color: #444;

}

.vertical-offset-100{
    padding-top:100px;
}
</style>
<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->

</head>
<body>
<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
            <?php
            echo $notficationmsg;
             ?>
			    	<form accept-charset="UTF-8" role="form" action="vals/loginprocess.php" method="post" autocomplete="off">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Username / E-mail" name="username" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" name="login" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
