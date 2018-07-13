<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>the connected beehive</title>
    <!-- Bootstrap CSS version 4.1.1 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="scripts/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/ruche.css" />
	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.png" type="image/png">
	<link rel="icon" sizes="32x32" href="favicon-32.png" type="image/png">


    <!-- Style pour la boite (div id popin) coins arrondis bordure blanche ombre -->
        <style type="text/css">
		.popin {
				background-color: #fff;
				border-radius: 8px;
				box-shadow: 0 0 20px #999;
				padding: 10px;
				margin: 30px;

		}

		.h1 {
			font-size: 80px;
		}

		</style>

		

</head>

<body>
	
	<div class="row" style="background-color:white; padding-top: 35px; ">
		<div class="col-lg-12">
			
			<a href="index.html">
			<img  style="width:100%;" title="Retour accueil" src="images/bandeau_ruche.png" />
			</a>
		</div>
		
	</div>
	
	<?php require_once 'menu.php'; ?>
	
	<div class="container" >
			
	<div class="row" style="padding-top: 35px; ">
		<div class="col-lg-12">
			<h2>La ruche connectée</h2>
			<p>Suivez vos ruches en direct depuis votre smartphone. Economisez votre temps et vos déplacements. Gagnez en sérénité !</p>
			<p>D’une installation facile et rapide, le système se positionne sous n’importe quelle ruche et délivre en temps réel un suivi précis des grandeurs mesurées, 
			via des vues graphiques sur notre site internet. 
			En cas de besoin d’intervention, des alertes par sms sont émises.</p>
		</div>
	</div>
	<div class="row">
	<div class="col-md-4 col-sm-4 col-xs-12">
		<p style="text-align:center;"><img src="images/picto_masse.png" alt="" width="60" height="60">
		<br><strong style="font-size:18px;color:#000000;line-height:1.4;">Masse</strong>
		<br><span class="span_ent_defaut"> Evaluation de la santé de la colonie et de l’avancée de la production de miel.</span></p>
		
		<p style="text-align:center;"><img src="images/picto_eclairement.png" alt="" width="60" height="60">
		<br><strong style="font-size:18px;color:#000000;line-height:1.4;">Eclairement</strong>
		<br><span class="span_ent_defaut">la mesure de l'éclairement évalue la période de pollinisation des abeilles dans la journée</span></p>
	</div>
	
	<div class="col-md-4 col-sm-4 col-xs-12">
		<p style="text-align:center;"><img src="images/picto_temperature.png" alt="" width="60" height="60">
		<br><strong style="font-size:18px;color:#000000;line-height:1.4;">Température</strong>
		<br><span class="span_ent_defaut">Suivi de l’état de la ruche (ouverture possible, ajout d’un abreuvoir nécessaire...)</span></p>
		
		<p style="text-align:center;"><img src="images/picto_humidite.png" alt="" width="60" height="60">
		<br><strong style="font-size:18px;color:#000000;line-height:1.4;">Humidité</strong>
		<br><span class="span_ent_defaut">Suivi de l’état de la ruche (ouverture possible, ajout d’un abreuvoir nécessaire...)</span></p>
		
	</div>
	
	<div class="col-md-4 col-sm-4 col-xs-12">
		<p style="text-align:center;"><img src="images/picto_pression.png" alt="" width="60" height="60">
		<br><strong style="font-size:18px;color:#000000;line-height:1.4;">Pression atmosphérique</strong>
		<br><span class="span_ent_defaut">Prévision des changements météo influençant le comportement des abeilles.</span></p>
		
		<p style="text-align:center;"><img src="images/picto_autres.png" alt="" width="60" height="60">
		<br><strong style="font-size:18px;color:#000000;line-height:1.4;">Autres fonctionnalités</strong>
		<br><span class="span_ent_defaut">Le tableau de bord intègre également un état des capteurs et de la batterie.</span></p>
	</div>
	
	</div>
	
	<footer>
        <hr>
		<div class="row">
			<div class="col-lg-12">
				<p>Copyright &copy; Section Snir Lycée Touchard - le Mans</p>
			</div>
        </div>
    </footer>

	</div>
</body>	