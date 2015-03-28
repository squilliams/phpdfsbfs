<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>nyolong</title>

    <!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
	<nav class="navbar navbar-inverse">
	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		<a class="navbar-brand" href="stima2.php">nyolong</a>
		</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
	</div><!-- /.container-fluid -->
	</nav>
	
	<!--Content dari website-->
	<div class="container">
			<div class="page-header text-center">
				<h1>nyolong <small>halaman utama</small></h1>
			</div>

				<!-- Button trigger modal -->
				<blockquote class="blockquote-reverse">
					<small class="text-warning">In Indonesia, we could just wait for death. It was more relaxing</small>
					 <footer>Ahok</footer>
				</blockquote>

				<img src="img/Croissant1.jpg" alt="img" width="235px" class="img-circle center-block">
				<br>
				<button type="button" class="btn btn-primary btn-warning center-block" data-toggle="modal" data-target="#Modal1">
					Perihal
				</button>
			<form action="result.php" method="post">
			<div class="col-md-6 col-md-offset-3">
				<div class="form-group">
				  <label for="sel1">Select list (select one):</label>
					<select class="form-control" id="sel1" name="mode" width="50%">
						<option value="DFS">DFS</option>
						<option value="BFS">BFS</option>
					</select>
				</div>
				<input type="text" name="direktori" class="form-control" id = "direktori" width="50%" placeholder="Direktori...">
				<div class="input-group" >
				<input type="text" name="search" class="form-control" id = "search" width="50%" placeholder="Cari apa hayo...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit">Go!</button>
					</span>
				</div><!-- /input-group -->
			<!-- /div --><!-- /.col-lg-6 -->
			</div><!-- /.col-md-6 -->
			</form>
		</div>
	</div>
	<br>

	</div>
 	<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel">Perihal</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">Wisnu</div>
              <div class="col-md-4">13513029</div>
            </div>
            <div class="row">
              <div class="col-md-4">Bimo</div>
              <div class="col-md-4">13513075</div>
            </div>
            <div class="row">
              <div class="col-md-4">Ahmad Riz(d)aputra</div>
			  <div class="col-md-4">13513027</div>
            </div>
            <div class="row">
              <div class="col-sm-9">nyolong</div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>
