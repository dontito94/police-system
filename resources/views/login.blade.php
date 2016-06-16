<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>policesystem</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/login.css" rel="stylesheet">
  </head>
  <body><div class="row">
  	<div class="col-md-3">
  		<img src="img/nembo.png" class="img">
  	</div>
  	<div class="col-md-6">
  		<h1>POLICE SYSTEM</h1>
  	</div>
  	<div class="col-md-3">
  	<img src="img/bendera.png" class="img1">
     </div>
  </div>
    
  <div class="container">
  
   <div class="row">
     <form class="form-horizontal" action="{{ url('/home')}}" method="POST">
  <div class="form-group">
    <label for="inputUsername3" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-5">
      <input type="Username/Email" class="form-control" id="inputUsername3" placeholder="Username/Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
 
    </div>
 
  <div class="form-inline"> <button type="button" class="btn btn-primary">Sign-in</button>


<a href="/register"><button type="button" class="btn btn-success">Register</button></a>
    </div>


  </div>
</form>
</div>
 </div>
  <p>Forget password? <a href="">click here</a></p>
    </div>

  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
