window.addEventListener('load', function() {
	var display	 = document.getElementById('calc_result');	
   	var buttons = document.getElementsByClassName('calc_btn');
   	var clear	 = document.getElementById('ce');
   	var negativeValueBtn = document.getElementById('neg');

   	clear.addEventListener("click", clearDisplay);
   	negativeValueBtn.addEventListener("click", getNegativeNumber);


var i = 0;


while (i < buttons.length ) {
   	buttons[i].addEventListener("click", clickHandler);
   	i++;
	}

	function clickHandler(e) {

	var buttonValue = e.target.value;

	if(buttonValue == "C") {
		getNegativeNumber(e);

	}
	

	if(display.value == 0) {

		display.value = buttonValue;	    
	    
	    } else {

	        display.value += buttonValue;
	    };
	}

		function clearDisplay(e) {
			display.value = 0;	    
	}

	    function getNegativeNumber(e) {
			
			console.log(e.target.name);
			display.value = e.target.name + display.value;	    
	}







});



