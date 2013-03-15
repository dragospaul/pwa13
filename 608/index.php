<?php	

	$debug = true;
	
	$produse[0]["denumire"]		= "Galaxy S IV";
	$produse[0]["pret"] 		= 650;
	$produse[0]["stoc"] 		= 10;		
	$produse[0]["categorie"] 	= "telefoane";
	$produse[0]["descriere"] 	= "latest phone";
	$produse[0]["imagine"] 		= "/";
	$produse[0]["producator"] 	= "Samsung";
	$produse[0]["rating"] 		= 4.5;
	
	$produse[1]["denumire"]		= "iPhone 5S";
	$produse[1]["pret"] 		= 1000;
	$produse[1]["stoc"] 		= 5;		
	$produse[1]["categorie"] 	= "telefoane";
	$produse[1]["descriere"] 	= "whatever";
	$produse[1]["imagine"] 		= "/";
	$produse[1]["producator"] 	= "Apple";
	$produse[1]["rating"] 		= 3.0;
	
	$ths = array_keys($produse[0]);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
				<div class="span3">					
					<ul>
						<? for($i=0; $i<count($produse); $i++): ?>
							<li><a href="index.php?producator=<?=$produse[$i]["producator"]?>"><?=$produse[$i]["producator"]?></a></li>
						<? endfor; ?>
					</ul>						
				</div>
				<div class="span9">					
					<table class="table table-striped table-bordered">
						<caption>Lista de produse</caption>
						<tr>
					<?
					foreach($ths as $th):?>
						<th><?=$th?></th>
					<?endforeach?>
						</tr>
					<?
					for($i=0; $i<count($produse); $i++):?>
						<tr>
						<?
						foreach($produse[$i] as $v) :?>
							<?if(isset($_GET["producator"])):?>
								<?if($produse[$i]["producator"]==$_GET["producator"]):?>
									<td><?=$v?></td>
								<?endif;?>
							<?else:?>
								<td><?=$v?></td>
							<?endif;?>
						<?endforeach?>
						</tr>
					<?endfor?>
					</table>
				</div>
            </div>

            <hr>
			
			<?if($debug): ?>
				<div class="row">
					<div class="span12">
						<h3>Debug area</h1>
						<pre>
						<?var_dump($_GET);?>							
						</pre>
					</div>
				</div>
			<?endif?>

            <footer>
                <p>&copy; PWA 2013</p>
            </footer>

        </div> <!-- /container -->

        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
