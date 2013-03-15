<?
	$debug = false;
	$produse[0]["denumire"] 	= "Carrera 4S";
	$produse[0]["pret"] 		= 250000;
	$produse[0]["stoc"]			= 3;
	$produse[0]["categorie"] 	= "masini";
	$produse[0]["descriere"] 	= "supercar";
	$produse[0]["imagine"]		= "/";
	$produse[0]["producator"]	= "Porsche";
	$produse[0]["rating"]		= 4.2;
	
	$produse[1]["denumire"] 	= "LaFerrari";
	$produse[1]["pret"] 		= 1200000;
	$produse[1]["stoc"]			= 0;
	$produse[1]["categorie"] 	= "masini";
	$produse[1]["descriere"] 	= "pff...";
	$produse[1]["imagine"]		= "/";
	$produse[1]["producator"]	= "Ferrari";
	$produse[1]["rating"]		= 5;
	
	$produse[2]["denumire"] 	= "M5";
	$produse[2]["pret"] 		= 120000;
	$produse[2]["stoc"]			= 0;
	$produse[2]["categorie"] 	= "masini";
	$produse[2]["descriere"] 	= "";
	$produse[2]["imagine"]		= "/";
	$produse[2]["producator"]	= "BMW";
	$produse[2]["rating"]		= 5;
	
	$produse[3]["denumire"] 	= "F50";
	$produse[3]["pret"] 		= 12000000000;
	$produse[3]["stoc"]			= 0;
	$produse[3]["categorie"] 	= "masini";
	$produse[3]["descriere"] 	= "pff...";
	$produse[3]["imagine"]		= "/";
	$produse[3]["producator"]	= "Ferrari";
	$produse[3]["rating"]		= 5;
	
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
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
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
						<?for($i=0; $i<count($produse); $i++):?>
							<li><a href="index.php?producator=<?=$produse[$i]["producator"]?>"><?=$produse[$i]["producator"]?></a></li>
						<?endfor?>
					</ul>
				</div>
				<div class="span9">
					<table class="table table-bordered table-striped">
						<tr>
					<? foreach($ths as $v):?>
							<th>
							<?=$v?>
							</th>
					<? endforeach ?>
						</tr>
					<?
					for($i=0; $i<count($produse); $i++): ?>	
						<?if(isset($_GET["producator"])):?>
							<?if($produse[$i]["producator"]==$_GET["producator"]):?>
								<tr>
								<? 
								foreach($produse[$i] as $v) : ?>
									<td>
										<?=$v?>
									</td>
								<? endforeach ?>
								</tr>						
							<?endif?>
							<?else:?>
							<tr>
								<? 
								foreach($produse[$i] as $v) : ?>
									<td>
										<?=$v?>
									</td>
								<? endforeach ?>
								</tr>	
						<?endif?>
					<? endfor ?>
					</table>
				</div>
            <hr>

            <footer>
                <p>&copy; PWA 2013</p>
            </footer>
			<div class="row">
			<h1>DEBUG:</h1>
			<pre>
			<? var_dump($_GET)?>
			</pre>
			</div>
        </div> <!-- /container -->

        
        <script src="js/vendor/jquery-1.9.1.min.js"></script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
