<?php
$ship1 = "Ship 1";

if (isset($_GET["ship"])) {
  $ship1 = $_GET["ship"];
}

?>

<html>
<header>
<title>Astroport-wegi</title>
</header>
<body>

<h1 id="astroport-name">Astroport-wegi</h1>

<h2 id="gate-1">Gate 1: <span id="ship-1"><?php echo $ship1; ?></span></h2>
<h2 id="gate-2">Gate 2: <span id="ship-2">Ship 2</span></h2>
<h2 id="gate-3">Gate 3: <span id="ship-3">Ship 3</span></h2>

<form action="." method="get">

Ship <input id="ship" name="ship" type="text" />
<button id="dock" name="dock" type="button">Dock</button>

</form>


</body>
</html>