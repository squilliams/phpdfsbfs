<html>
<body>
<link rel="stylesheet" href="css/bootstrap.css">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>dicari!</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/full.css" rel="stylesheet">
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
      <a class="navbar-brand" href="test.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Setting <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Perihal</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div class="col-md-6 col-md-offset-2" id="outputcsharp" >
	<?php 
		$search = $_POST["search"]; 
				// Turn off output buffering
				ini_set('output_buffering', 'off');
				// Turn off PHP output compression
				ini_set('zlib.output_compression', false);

				while (@ob_end_flush());
				ini_set('implicit_flush', true);
				ob_implicit_flush(true);
				 
				for($i = 0; $i < 1000; $i++)
				{
					echo ' ';
				}		 
				flush();
				 
				$cmd = "AlgoritmaBFS-DFS\AlgoritmaBFS-DFS\bin\Debug\AlgoritmaBFS-DFS.exe";
				$dir = "D:\TPB";
				exec("$cmd $search $dir", $output);

				for($x = 1; $x < count($output); $x++) {					
						echo $output[$x];
						echo "<br>";
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