<?php require_once("config.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Música</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- Custom styles for this template -->
    <link href="estil.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<div class='container'>
	<?php
		/*include de la capcelera php*/
		include("header.php");
	?>
	<main role="main" class='container'>
		<?php
		//carreguem les pàgines corresponents
		if($_GET["sec"]==1){
			//seccio listar discos
			include("discos.php");
		}
		else if($_GET["sec"]==2){
			//seccio listar cantantes
			include("cantantes.php");
		}else{
			//home
			include("inici.php");
		}
		?>
	</main>
	<?php
		/*include del footer php*/
		include("footer.php");
	?>
	</div>
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
	<!--Alguns javascripts-->
	<script>
		$(".togform").click(function(){
			$(".addform").toggleClass( "d-none" );
		});
		$(".del").click(function(){
			var a= confirm("Seguro que quiere eliminar?");
			if(a==true){
				return true;
			}else{
				return false;
			}
		});
		$(".tanca").click(function(){
			$(".editform").addClass("d-none");
		});
		$(".toedit").click(function(){
			$(".editform").removeClass("d-none");
			$(".editID").val($(this).attr("name"));
		});
	</script>
  
  </body>
</html>