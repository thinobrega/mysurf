

/*========================================================
                     REGISTRATION FORM 
=========================================================*/	

(function(){
	var formulario = document.form,
		elementos = form.elements;
	
	// FUNCTIONS
	
	var inputValidation = function(){
	for (var i = 0; i < elementos.length; i++) {
		// PUT ALL KINDS OF ELEMENTS  
		if (elementos[i].type == "text" || elementos[i].type == "email" || elementos[i].type == "password" || elementos[i].type == "number") {
			// CHECK ITS NOT EMPTY FIELDS
			if (elementos[i].value.length == 0) {
				console.log('El campo ' + elementos[i].name + ' esta incompleto');
				elementos[i].className = elementos[i].className + " error";
				return false;
			} else {
				elementos[i].className = elementos[i].className.replace(" error", "");
			}
		}
	}				
				
				
	
	
	// ----- PASSWORD AND PASSWORD CONFIRMATION ------
		
		if (elementos.pass.value !== elementos.pass2.value) {
		elementos.pass.value = "";
		elementos.pass2.value = "";
		elementos.pass.className = elementos.pass.className + " error";
		elementos.pass2.className = elementos.pass2.className + " error";
		return false;
	} else {
		elementos.pass.className = elementos.pass.className.replace(" error", "");
		elementos.pass2.className = elementos.pass2.className.replace(" error", "");
	}
	
	
		// ----- FOUR CHARACTERES PASSWORD VALIDATION ------
	
	if (elementos.pass.value.length < 4 || elementos.pass2.value.length < 4) {
		elementos.pass.value = "";
		elementos.pass2.value = "";
		elementos.pass.className = elementos.pass.className + " error";
		elementos.pass2.className = elementos.pass2.className + " error";
		return false;
	} 
	
	

	return true;
	};
	
	
	
	
	
	
// ----- RADIOS VALIDATION ------



	
	var radiosValidation = function(){
	var opciones = document.getElementsByName('sex'),
		resultado = false;

	for (var i = 0; i < elementos.length; i++) {
		if(elementos[i].type == "radio" && elementos[i].name == "sex"){
			// Recorremos los radio button
			for (var o = 0; o < opciones.length; o++) {
				if (opciones[o].checked) {
					resultado = true;
					break;
				}
			}

			if (resultado == false) {
				elementos[i].parentNode.className = elementos[i].parentNode.className + " error";
				console.log('El campo sexo esta incompleto');
				return false;
			} else {
				// Eliminamos la clase Error del radio button
				elementos[i].parentNode.className = elementos[i].parentNode.className.replace(" error", "");
				return true;
			}
		}
	}
};

	
	
	
	
// ----- CHECKBOX VALIDATION ------

var checkboxValidation = function(){
	var opciones = document.getElementsByName('terms'),
		resultado = false;

	for (var i = 0; i < elementos.length; i++) {
		if(elementos[i].type == "checkbox"){
			// Recorremos los radio button
			for (var o = 0; o < opciones.length; o++) {
				if (opciones[o].checked) {
					resultado = true;
					break;
				}
			}

			if (resultado == false) {
				elementos[i].parentNode.className = elementos[i].parentNode.className + " error";
				console.log('please confirm terms and conditions');
				return false;
			}  else {
				// To eliminate the error class
				elementos[i].parentNode.className = elementos[i].parentNode.className.replace(" error", "");
				return true;
			}
		}
	}
};

	




	
var send = function(e){
	if (!inputValidation()) {
		console.log('Name field is required');
		e.preventDefault();
	} else if (!radiosValidation()) {
		console.log('Sex field is required');
		e.preventDefault();
	} else if (!checkboxValidation()) {
		console.log('Agree with Terms and Conditions is required');
		e.preventDefault();
	} else {
		console.log('send correcltly');
	//e.preventDefault();
	}
};
	
	// FUNCTIONS BLUR AND FOCUS
	
	// parent element is input-group while iput type is 1st elmento and 2nd alemento is label 
	var focusInput = function(){
	this.parentElement.children[1].className = "label active";
	this.parentElement.children[0].className = this.parentElement.children[0].className.replace("error", "");
};

var blurInput = function(){
	if (this.value <= 0) {
		this.parentElement.children[1].className = "label";
		this.parentElement.children[0].className = this.parentElement.children[0].className + " error";
	}
};

// --- EVENTS ---
formulario.addEventListener("submit", send);

for (var i = 0; i < elementos.length; i++) {
	if (elementos[i].type == "text" || elementos[i].type == "email" || elementos[i].type == "password" || elementos[i].type == "number") {
		elementos[i].addEventListener("focus", focusInput);
		elementos[i].addEventListener("blur", blurInput);
	}
}

}())


























/*========================================================
                     IMAGE-SLIDER
=========================================================*/
	 


var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000); // Change image every 4 seconds
} 

		 




/*========================================================
                     TABS
=========================================================*/	



function openTab(evt, tabName) {
	
	
    // All Variables Declaration
    var i, tabcontent, tablinks;

    // Hide all elements in the class="tabcontent" 
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the class "active" of All elements in the class="tablinks" 
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab with an "active" class
	
	
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
