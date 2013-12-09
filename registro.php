<?php
session_start();
if (isset($_SESSION['nombre_cli'])) {
	$nombre = $_SESSION['nombre_cli'];
}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Hotel Palmira</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css" type="text/css" />
		<link rel="stylesheet" href="css/hotel.css" type="text/css" />
		<link rel="stylesheet" href="css/hotel-responsive.css" type="text/css" />
		<link rel="stylesheet" href="js/slider/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/socialcount-with-icons.css" type="text/css" media="screen" />
		<link href="favicon.ico" rel="icon" type="image/x-icon" />
		<style>
			div.ui-datepicker {
				font-size: 11px;
			}
		</style>

		<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/bootstrap_ie7.css" type="text/css">
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<!-- start header -->
				<div class="span5 logo">
					<a href="index.php">
					<div class="row">
						<div class="span3 logo">
							<h1>Hotel<span>Palmira</span></h1>
							<p>
								&#9733;&#9733;&#9733;&#9734;&#9734;
							</p>
						</div>
					</div> </a>
				</div>
				<div class="span6 pull-right main_menu">
					<div class="navbar">
						<div class="container">
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>

							<div class="nav-collapse">
								<ul class="nav nav-pills">
									<li class="">
										<a href="index.php">Inicio</a>
									</li>
									<li class="">
										<a href="habitaciones.php">Habitaciones</a>
									</li>
									<li class="">
										<a href="ubicacion.php">Ubicación</a>
									</li>
									<?php
									if (isset($nombre)) {
										echo '<li class=""><a class="tooltips" href="#">Mi cuenta<span>Bienvenido ' . $nombre . '</span></a></li>';

									} else {
										echo '<li class=""><a href="login.php">Inicia Sesión</a></li>';
									}
									?>
								</ul>
							</div><!-- /.nav-collapse -->
						</div>
					</div><!-- /navbar -->
				</div>
			</div><!-- end header -->
		</div>
		<div class="container-fluid">
			<div class="span12">
				<div class="row">
					<div class="span9">
						<form class="form-horizontal well" method="post" action="includes/validaregistro.php">

							<h1>Crea tu cuenta</br><small>y comienza a reservar tu habiación. </small></h1>
							<br />
							<div class="row">

								<div class="span8">
									<legend>
										<span>Tu</span> nombre
									</legend>
								</div>
								<div class="span3">
									<label>Nombres
										<input type="text" placeholder="Nombres..." name="nombres" required/>
									</label>
								</div>

								<div class="span3">
									<label>Apellidos
										<input type="text" placeholder="Apellidos..." name="apellidos" required />
									</label>
								</div>

							</div><!--/row Tu nombre-->
							<br />
							<div class="row">
								<div class="span8">
									<legend>
										<span>Tu</span> cuenta
									</legend>
								</div>

								<div class="span3">
									<label>Nombre de usuario
										<input type="text" name="user" required />
									</label>

								</div>

								<div class="span3">
									<label>Contraseña
										<br/>
										<input type="password" name="pass" required />
									</label>

								</div>

							</div><!--/row direccion-->
							<br/>
							<div class="row">
								<div class="span8">
									<legend>
										<span>Detalles </span>de contacto
									</legend>
								</div>
								<div class="span3">
									<label>Dirección de correo
										<input type="email" name="email" required/>
									</label>
								</div>

								<div class="span3">
									<label>Número de telefóno
										<input type="tel" placeholder="(+##)-###-###-####" name="tel" required/>
									</label>
								</div>
							</div><!--/row detalles de contacto-->
							<br />
							<div class="row">
								<div class="span8">
									<legend>
										<span>Tu</span> dirección
									</legend>
								</div>

								<div class="span3">
									<label>Dirección 										<textarea class="address_box" rows="3" name="direccion" required></textarea> </label>
								</div>

								<div class="span3">
									<label>Ciudad
										<input type="text" name="ciudad" required />
									</label>
									<label>Código postal
										<input type="text" name="cp" required/>
									</label>
								</div>

								<div class="span3">
									<label>Estado
										<input type="text" name="estado" required />
									</label>
									<label>País
										<select name="pais" value="" required>
											<option value="MX" />México<option value="US"/>Estados Unidos<option value="AD" />Andorra<option value="AE" />United Arab Emirates<option value="AF" />Afghanistan<option value="AG" />Antigua and Barbuda<option value="AI" />Anguilla<option value="AL" />Albania<option value="AM" />Armenia<option value="AN" />Netherlands Antilles<option value="AO" />Angola<option value="AQ" />Antarctica<option value="AR" />Argentina<option value="AS" />American Samoa<option value="AT" />Austria<option value="AU" />Australia<option value="AW" />Aruba<option value="AX" />Åland Islands<option value="AZ" />Azerbaijan<option value="BA" />Bosnia and Herzegovina<option value="BB" />Barbados<option value="BD" />Bangladesh<option value="BE" />Belgium<option value="BF" />Burkina Faso<option value="BG" />Bulgaria<option value="BH" />Bahrain<option value="BI" />Burundi<option value="BJ" />Benin<option value="BL" />Saint Barthélemy<option value="BM" />Bermuda<option value="BN" />Brunei<option value="BO" />Bolivia<option value="BQ" />British Antarctic Territory<option value="BR" />Brazil<option value="BS" />Bahamas<option value="BT" />Bhutan<option value="BV" />Bouvet Island<option value="BW" />Botswana<option value="BY" />Belarus<option value="BZ" />Belize<option value="CA" />Canada<option value="CC" />Cocos [Keeling] Islands<option value="CD" />Congo - Kinshasa<option value="CF" />Central African Republic<option value="CG" />Congo - Brazzaville<option value="CH" />Switzerland<option value="CI" />Côte d’Ivoire<option value="CK" />Cook Islands<option value="CL" />Chile<option value="CM" />Cameroon<option value="CN" />China<option value="CO" />Colombia<option value="CR" />Costa Rica<option value="CS" />Serbia and Montenegro<option value="CT" />Canton and Enderbury Islands<option value="CU" />Cuba<option value="CV" />Cape Verde<option value="CX" />Christmas Island<option value="CY" />Cyprus<option value="CZ" />Czech Republic<option value="DD" />East Germany<option value="DE" />Germany<option value="DJ" />Djibouti<option value="DK" />Denmark<option value="DM" />Dominica<option value="DO" />Dominican Republic<option value="DZ" />Algeria<option value="EC" />Ecuador<option value="EE" />Estonia<option value="EG" />Egypt<option value="EH" />Western Sahara<option value="ER" />Eritrea<option value="ES" />Spain<option value="ET" />Ethiopia<option value="FI" />Finland<option value="FJ" />Fiji<option value="FK" />Falkland Islands<option value="FM" />Micronesia<option value="FO" />Faroe Islands<option value="FQ" />French Southern and Antarctic Territories<option value="FR" />France<option value="FX" />Metropolitan France<option value="GA" />Gabon<option value="GB" />United Kingdom<option value="GD" />Grenada<option value="GE" />Georgia<option value="GF" />French Guiana<option value="GG" />Guernsey<option value="GH" />Ghana<option value="GI" />Gibraltar<option value="GL" />Greenland<option value="GM" />Gambia<option value="GN" />Guinea<option value="GP" />Guadeloupe<option value="GQ" />Equatorial Guinea<option value="GR" />Greece<option value="GS" />South Georgia and the South Sandwich Islands<option value="GT" />Guatemala<option value="GU" />Guam<option value="GW" />Guinea-Bissau<option value="GY" />Guyana<option value="HK" />Hong Kong SAR China<option value="HM" />Heard Island and McDonald Islands<option value="HN" />Honduras<option value="HR" />Croatia<option value="HT" />Haiti<option value="HU" />Hungary<option value="ID" />Indonesia<option value="IE" />Ireland<option value="IL" />Israel<option value="IM" />Isle of Man<option value="IN" />India<option value="IO" />British Indian Ocean Territory<option value="IQ" />Iraq<option value="IR" />Iran<option value="IS" />Iceland<option value="IT" />Italy<option value="JE" />Jersey<option value="JM" />Jamaica<option value="JO" />Jordan<option value="JP" />Japan<option value="JT" />Johnston Island<option value="KE" />Kenya<option value="KG" />Kyrgyzstan<option value="KH" />Cambodia<option value="KI" />Kiribati<option value="KM" />Comoros<option value="KN" />Saint Kitts and Nevis<option value="KP" />North Korea<option value="KR" />South Korea<option value="KW" />Kuwait<option value="KY" />Cayman Islands<option value="KZ" />Kazakhstan<option value="LA" />Laos<option value="LB" />Lebanon<option value="LC" />Saint Lucia<option value="LI" />Liechtenstein<option value="LK" />Sri Lanka<option value="LR" />Liberia<option value="LS" />Lesotho<option value="LT" />Lithuania<option value="LU" />Luxembourg<option value="LV" />Latvia<option value="LY" />Libya<option value="MA" />Morocco<option value="MC" />Monaco<option value="MD" />Moldova<option value="ME" />Montenegro<option value="MF" />Saint Martin<option value="MG" />Madagascar<option value="MH" />Marshall Islands<option value="MI" />Midway Islands<option value="MK" />Macedonia<option value="ML" />Mali<option value="MM" />Myanmar [Burma]<option value="MN" />Mongolia<option value="MO" />Macau SAR China<option value="MP" />Northern Mariana Islands<option value="MQ" />Martinique<option value="MR" />Mauritania<option value="MS" />Montserrat<option value="MT" />Malta<option value="MU" />Mauritius<option value="MV" />Maldives<option value="MW" />Malawi<option value="MX" />Mexico<option value="MY" />Malaysia<option value="MZ" />Mozambique<option value="NA" />Namibia<option value="NC" />New Caledonia<option value="NE" />Niger<option value="NF" />Norfolk Island<option value="NG" />Nigeria<option value="NI" />Nicaragua<option value="NL" />Netherlands<option value="NO" />Norway<option value="NP" />Nepal<option value="NQ" />Dronning Maud Land<option value="NR" />Nauru<option value="NT" />Neutral Zone<option value="NU" />Niue<option value="NZ" />New Zealand<option value="OM" />Oman<option value="PA" />Panama<option value="PC" />Pacific Islands Trust Territory<option value="PE" />Peru<option value="PF" />French Polynesia<option value="PG" />Papua New Guinea<option value="PH" />Philippines<option value="PK" />Pakistan<option value="PL" />Poland<option value="PM" />Saint Pierre and Miquelon<option value="PN" />Pitcairn Islands<option value="PR" />Puerto Rico<option value="PS" />Palestinian Territories<option value="PT" />Portugal<option value="PU" />U.S. Miscellaneous Pacific Islands<option value="PW" />Palau<option value="PY" />Paraguay<option value="PZ" />Panama Canal Zone<option value="QA" />Qatar<option value="RE" />Réunion<option value="RO" />Romania<option value="RS" />Serbia<option value="RU" />Russia<option value="RW" />Rwanda<option value="SA" />Saudi Arabia<option value="SB" />Solomon Islands<option value="SC" />Seychelles<option value="SD" />Sudan<option value="SE" />Sweden<option value="SG" />Singapore<option value="SH" />Saint Helena<option value="SI" />Slovenia<option value="SJ" />Svalbard and Jan Mayen<option value="SK" />Slovakia<option value="SL" />Sierra Leone<option value="SM" />San Marino<option value="SN" />Senegal<option value="SO" />Somalia<option value="SR" />Suriname<option value="ST" />São Tomé and Príncipe<option value="SU" />Union of Soviet Socialist Republics<option value="SV" />El Salvador<option value="SY" />Syria<option value="SZ" />Swaziland<option value="TC" />Turks and Caicos Islands<option value="TD" />Chad<option value="TF" />French Southern Territories<option value="TG" />Togo<option value="TH" />Thailand<option value="TJ" />Tajikistan<option value="TK" />Tokelau<option value="TL" />Timor-Leste<option value="TM" />Turkmenistan<option value="TN" />Tunisia<option value="TO" />Tonga<option value="TR" />Turkey<option value="TT" />Trinidad and Tobago<option value="TV" />Tuvalu<option value="TW" />Taiwan<option value="TZ" />Tanzania<option value="UA" />Ukraine<option value="UG" />Uganda<option value="UM" />U.S. Minor Outlying Islands<option value="US" />United States<option value="UY" />Uruguay<option value="UZ" />Uzbekistan<option value="VA" />Vatican City<option value="VC" />Saint Vincent and the Grenadines<option value="VD" />North Vietnam<option value="VE" />Venezuela<option value="VG" />British Virgin Islands<option value="VI" />U.S. Virgin Islands<option value="VN" />Vietnam<option value="VU" />Vanuatu<option value="WF" />Wallis and Futuna<option value="WK" />Wake Island<option value="WS" />Samoa<option value="YD" />People's Democratic Republic of Yemen<option value="YE" />Yemen<option value="YT" />Mayotte<option value="ZA" />South Africa<option value="ZM" />Zambia<option value="ZW" />Zimbabwe<option value="ZZ" />Desconocido
										</select> </label>
								</div>

							</div><!--/row direccion-->
							<br/>

							<div class="row">
								<div class="span9">
									<br />
									<p>
										<input type="submit" value="Reistrar &rarr;"/ class="btn btn-primary btn-large book-now">
									</p>
									<br />
									<br />
								</div>
							</div>

						</form>
					</div><!--/span9-->
					<div class="span3">

						<h3><span>Crea</span> tu cuenta</h3>
						<br/>
						<h3>Obten <span>grandes</span> beneficios</h3>
						<p>

							<div class="pull-left">
								Con tu cuenta de usuario podras obtener grandes beneficios
							</div>
							<br />
							<br />
							<br />

					</div><!--/spam3-->

				</div><!--/row va a contener span9-->

			</div><!--/span12-->

		</div><!-- /container-fluid-->

		<footer>
			<div class="container">
				<div class="row footer_section_pre">

					<div class="span4">
						<h4>Hotel Palmira<span class="line"></span></h4>

						<p>
							Lázaro Cárdenas Sur # 200
						</p>
						<p>
							Jiquilpan, Michoacan De Ocampo, Mexico
							<br />
							Tel: 01 353 533 0091
							<br />
							Email: hotelpalmiramich@prodigy.net.mx
						</p>

						<ul data-facebook-action="recommend" data-url="#" class="socialcount socialcount-small recommend grade-a">
							<li class="facebook">
								<a title="Comparte en Facebook" href="https://www.facebook.com/HotelPalmira"><span class="social-icon icon-facebook"></span><span class="count"></span></a>
							</li>
						</ul>
						<br />
						<p class="copy">
							&copy; 2013 <a href="#">DJLabs</a>
						</p>

					</div>
					<div class="span4">
						<h4>Ofertas Especiales<span class="line"></span></h4>
						<p>
							Hospedate cinco noches y disfrute de una noche más totalmente <b>gratis</b>!
						</p>
					</div>
					<div class="span4">
						<h4>Patrocinadores<span class="line"></span></h4>
						<ul class="thumbnails">
							<li class="span2">
								<div class="thumbnail">
									<img src="css/images/airlines/Pueblo-Mágico.jpg" alt="" />
								</div>
							</li>
							<li class="span2">
								<div class="thumbnail">
									<img src="css/images/airlines/viajesnavacastro.jpg" alt="" />
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
		<script type="text/javascript" src="js/socialcount.min.js"></script>
		<script src="js/jquery.quicksand.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/global.js"></script>
	</body>
</html>