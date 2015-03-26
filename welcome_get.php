<html>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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
      <a class="navbar-brand" href="#">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Setting <span class="sr-only">(current)</span></a></li>
        <li><a href="#">About</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
	<?php 
		$search = $_POST["search"]; 
		//system("hello $search", $output);
		//print_r($output);
		// descriptor array
			$desc = array(
				0 => array('pipe', 'r'), // 0 is STDIN for process
				1 => array('pipe', 'w'), // 1 is STDOUT for process
				2 => array('file', 'error-output.txt', 'a') // 2 is STDERR for process
			);
			 
			// command to invoke markup engine
			$cmd = "AlgoritmaBFS-DFS\AlgoritmaBFS-DFS\bin\Release\AlgoritmaBFS-DFS.exe";
			// spawn the process
			$p = proc_open($cmd, $desc, $pipes);
			 
			// send the wiki content as input to the markup engine 
			// and then close the input pipe so the engine knows 
			// not to expect more input and can start processing
			//fwrite($pipes[0], $content);
			//fclose($pipes[0]);
			
			if (is_resource($p)) {
				fwrite($pipes[0], $search);
				fwrite($pipes[0], "D:\Semester IV");
				fclose($pipes[0]);
			}

			while (!feof($pipes[1])) {
				echo stream_get_contents($pipes[1]);
			}	

			fclose($pipes[1]);
			// read the output from the engine
			//$html = stream_get_contents($pipes[1]);
			 
			// all done! Clean up
			proc_close($p);
			//echo $html;
	?><br>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html> 