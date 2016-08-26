<?php

$class1 = "free";
$class2 = "free";
$class3 = "free";

$ship = @$_GET["ship"];

if (!empty($ship)) {
  $ship1  = $ship;
  $class1 = "occupied";
}

?>

<html>
<head>
<title>Astroport-wegi</title>

<style type="text/css">
  .free {
    color: white;
    background-color: green;
  }
  .occupied {
    color: white;
    background-color: red;
  }
  .hidden {
    display: none;
  }
</style>

<script type="text/javascript">
  function onKeyDown() {
    document.getElementById("info").className = "hidden";
  }
</script>

</head>
<body>

<h1 id="astroport-name">Astroport-wegi</h1>

<h2 id="gate-1" class="<?php echo $class1; ?>">Gate 1: <span id="ship-1"><?php echo ($ship1) ? $ship1 : "None"; ?></span></h2>
<h2 id="gate-2" class="<?php echo $class2; ?>">Gate 2: <span id="ship-2"><?php echo ($ship2) ? $ship2 : "None"; ?></span></h2>
<h2 id="gate-3" class="<?php echo $class3; ?>">Gate 3: <span id="ship-3"><?php echo ($ship2) ? $ship3 : "None"; ?></span></h2>

<h3 id="info" class="<?php echo ($ship) ? "anything" : "hidden"; ?>">Info: <?php echo ($ship) ? "$ship has docked at Gate 1" : "None"; ?></h3>

<form name="dock-form" id="dock-form" action="." method="get">

Ship Name:
<input id="ship" name="ship" type="text" value="<?php echo $ship; ?>" onkeydown="onKeyDown();" />
<button id="dock" name="dock" type="submit"  value="1">Dock</button>
<button id="reset" name="reset" type="reset" value="reset" onclick="window.location='./'">Reset</button>

</form>



</body>
</html>