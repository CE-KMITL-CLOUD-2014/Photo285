
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
	<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		<a class="navbar-brand" href="#">Photo285</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
		  <button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target=".bs-example-modal-lg1">Sign Up</button>
		</ul>
		  <ul class="nav navbar-nav navbar-right">
		  <button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target=".bs-example-modal-lg2"><a href = "#">Log in</a></button>
		  </ul>      
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
	</nav>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- xWrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
		<img class="img-responsive center-block" src="img/Tulips.jpg" alt="...">
		<div class="carousel-caption">
			ดอกไม้
		</div>
	</div>
    <div class="item">
      <img class="img-responsive center-block" src="img/Desert.jpg" alt="...">
      <div class="carousel-caption">
			ทะเลทราย
      </div>
    </div>
	<div class="item">
      <img class="img-responsive center-block" src="img/Koala.jpg" alt="...">
      <div class="carousel-caption">
			โคอาล่า
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>


    <!-- Modal -->
	<div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content"> 
				<div class= "row">
					<form role="form">
						<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputUsername1">Username</label>
									<input type="username" class="form-control " width = "50%" id="exampleInputUsername1" placeholder="Enter username">
								</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="exampleInputName1">Name</label>
								<input type="name" class="form-control" id="exampleInputName1" placeholder="Enter name">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="exampleInputDescription1">Description</label>
								<input type="description" class="form-control" id="exampleInputDescription1" placeholder="What do you want to tell?">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="exampleInputFile">File input</label>
								<input type="file" id="exampleInputFile">
								<p class="help-block">Example block-level help text here.</p>
							</div>
						</div>
						<div class="col-md-12">
							<div class="checkbox">
								<label>
								<input type="checkbox"> Check me out
								</label>
							</div>
						</div>
						<div class="col-md-12">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	 <!-- Modal -->
	<div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content"> 
				<div class="container">
					<div class= "row">
					<div class="col-md-12">
						<form class="form-signin" role="form">
							</div>
								<h2 class="form-signin-heading">Please sign in</h2>
							</div>
								<input type="email" class="form-control" placeholder="Email address" required autofocus>
									<input type="password" class="form-control" placeholder="Password" required>
									<label class="checkbox">
										<input type="checkbox" value="remember-me"> Remember me
									</label>
									<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
						</form>
					</div>
				</div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
			</div>
		</div>
	</div>
  </body>
</html>