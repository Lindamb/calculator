// Define sendformData function
function sendFormData( param ) {
}

// Define updateDisplay

function updateDisplay(ajaxResult){
		var displayInput = document.getElementById('calc_result');
		displayInput.value= ajaxResult;
		console.log("updateDisplay was called! ");
}

 
$( document ).ready( sendFormData );
	console.log( "ready!" );	
	
	function sendFormData() {
		console.log('körs');
		var form = $('#calculator-form');

		console.log(form);

		$(form).submit(function(event) {
			event.preventDefault();

		data = {};
         
		form.find('#calc_result').each(function(){
			var display = $(this),
			
			name = display.attr('name'),
			value = display.val();

			console.log(value);

		data[name] = value;
		});
		

		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: data,
			dataType:'json',
			success: function(result) {
				console.log(result);
				updateDisplay(result);
				

			},
			error: function(e) {
				console.log(e);
			}
		})
	});
}





 
