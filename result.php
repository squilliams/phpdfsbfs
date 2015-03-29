<html>
<body>
<link rel="stylesheet" href="css/bootstrap.css">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>nyolong</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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

  </div><!-- /.container-fluid -->
</nav>
	<div class="page-header">
		<h1>nyolong <small>hasil pencarian</small></h1>
	</div>
	<button type="button" class="btn btn-primary btn-warning center-block" data-toggle="modal" data-target="#Modal1">
					Perihal
	</button>
	<div class="col-md-6 col-md-offset-2" id="outputcsharp" >
	<form>
		<fieldset disabled>
		<div class="form-group col-xs-4">
		<label for="disabledTextInput"> Kata</label>
		<input type="text" class="form-control" placeholder=<?php echo $_POST["search"] ?> readonly>
		<label for="disabledTextInput">Mode Pencarian</label>
		<input type="text" class="form-control" placeholder=<?php echo $_POST["mode"] ?> readonly>
		<label for="disabledTextInput">Direktori</label>
		<input type="text" class="form-control" placeholder=<?php echo $_POST["direktori"] ?> readonly>
		</div>	
		</fieldset>
	</form>
	
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
              <div class="col-md-4 col-md-offset-3"><a href="mailto:13513029@std.stei.itb.ac.id">Wisnu</a></div>
              <div class="col-md-4">13513029</div>
            </div>
            <div class="row">
              <div class="col-md-4 col-md-offset-3"><a href="mailto:13513075@std.stei.itb.ac.id">Bimo</a></div>
              <div class="col-md-4">13513075</div>
            </div>
            <div class="row">
              <div class="col-md-4 col-md-offset-3"><a href="mailto:13513027@std.stei.itb.ac.id">Ahmad Riz(d)aputra</a></div>
			  <div class="col-md-4">13513027</div>
            </div>
            <div class="row">
              <div class="text-center text-success"><h2><b>nyolong</b></h2></div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
	<?php 
		
				$search = $_POST["search"]; 
				$pencarian = $_POST["mode"];
				
				// Turn off output buffering
				ini_set('output_buffering', 'off');
				// Turn off PHP output compression
				ini_set('zlib.output_compression', false);
				ini_set('max_execution_time', 300);
				ob_start();
				while (@ob_end_flush());
				ini_set('implicit_flush', true);
				ob_implicit_flush(true);
				 
				for($i = 0; $i < 1000; $i++)
				{
					echo ' ';
				}		 
				flush();
				 
				$cmd = "AlgoritmaBFS-DFS\AlgoritmaBFS-DFS\bin\Debug\AlgoritmaBFS-DFS.exe";
				$dir0 = $_POST["direktori"];
				$dir = "\"" . $dir0 . "\"";
				exec("$cmd $search $dir $pencarian", $output);
		
				for($x = 1; $x < count($output); $x++) {	
							echo "<h4>";
							$search1 = array($search, "~^");
							$replacement = array("<strong>".$search."</a></strong>", "</a></h4><mark>...");
							echo str_replace($search1 , $replacement, $output[$x]);
							echo "...</mark><br>";
				}
				flush();

	?>
	</div>
	<br>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html> 