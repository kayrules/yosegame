<html>
<head>
<title>Minesweeper</title>

<script type="text/javascript" src="jquery-3.1.0.min.js"></script>
<script>

$( document ).ready(function() {

	document.grid = [];
	
});

function load() {
	
	var gridWidth = 8;
	var gridHeight = 8;	
		
	for(var y = 0; y < gridHeight; y++) {
		//grid.push([]);
		for(var x = 0; x < gridWidth; x++) {
			//grid[y].push('empty');\
			if (grid[y][x] == 'bomb') {
				var el = "cell-"+y+"x"+x;
				document.getElementById(el).className = "lost";
			}
		}
	}
	
	
}


function dump(obj) {
    var out = '';
    for (var i in obj) {
        out += i + ": " + obj[i] + "\n";
    }

    alert(out);

    // or, if you wanted to avoid alerts...

    var pre = document.createElement('pre');
    pre.innerHTML = out;
    document.body.appendChild(pre)
}

function dumpall() {
	alert(document.grid);
}


function clickCell()
{
	
}
</script>


</head>
<body>

<h1 id="title">Minesweeper</h1>

<table border=1>

<?php
for ($x = 1; $x < 9; $x++) {
    echo "<tr>";
	
	for ($y = 1; $y < 9; $y++) {
		
				
		echo '<td onclick="clickedCell()" class="" id="cell-' . $x . "x" . $y . '"';
		echo ">&nbsp;&nbsp;&nbsp;&nbsp;</td>";
	}
	
	echo "</tr>";
} 
?>

</table>

<input type="button" onclick="dumpall();" value="Load">


</body>
</html>