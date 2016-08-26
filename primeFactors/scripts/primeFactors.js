$( document ).ready(function() {
	
	$('#go').click(function(){
		var number = $('#number').val();
		var values = number.split(',');

		for(var i=0; i<values.length; i++) {
			var value = values[i];
			if(value < 0) printResult(value + ' is not an integer > 1');
			else ajaxProcess(value);
		}
	});

	function ajaxProcess(value) {
		// $.get("./index.php", {
		// 	number: value
		// }, function(data, status){
	 //        // alert("Data: " + data + "\nStatus: " + status);
	 //        console.log(data, status);
	 //        if(data.error) {
		// 		if(data.error == 'not a number') printResult(data.number + ' is ' + data.error);
		// 		else printResult(data.error);


	 //        } else {	
		// 		printResult(data.number + ' = ' + data.decomposition.join(' x '));
	 //        }
	 //    });
	 	$.ajax({ url: './index.php?number=' + value, 
         	async: false,
         	dataType: 'json',
         	success: function(data) {
            	console.log(data, status);
		        if(data.error) {
					if(data.error == 'not a number') printResult(data.number + ' is ' + data.error);
					else printResult(data.error);


		        } else {	
					printResult(data.number + ' = ' + data.decomposition.join(' x '));
		        }
        	}
        });
	}

	function printResult(string) {
		var number = $('#number').val();
		var values = number.split(',');
		if(values.length > 1) {
			var list = '<li>' + string + '</li>';
			$('#results').append(list);
		} else {
			$('#result').html(string);
		}
	}

});