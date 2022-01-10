// validate taxpayer required input for form pages


class taxPageValidator{

	 

constructor() {
    this.booleanValidatedInput = false;
   
  }
	inputTaxYear(){

		if ($('#inputTaxYear').val()) {
			console.log($('#inputTaxYear').val());
			this.booleanValidatedInput =  true;

		}else{

			console.log($('#inputTaxYear').val());
			this.booleanValidatedInput = false;

		}
	}


	inputDate(){

		if ($('#inputDate').val()) {

			console.log($('#inputDate').val());
			this.booleanValidatedInput = true;

		}else{

			console.log($('#inputDate').val());
			this.booleanValidatedInput =  false;

		}
	}


	inputFirstName(){

		if ($('#inputFirstName').val()) {

			console.log($('#inputFirstName').val());
			this.booleanValidatedInput = true;

		}else{

			console.log($('#inputFirstName').val());
			this.booleanValidatedInput = false;

		}

	}

	inputLastName(){


		if ($('#inputLastName').val()) {

			console.log($('#inputLastName').val());
			this.booleanValidatedInput = true;

		}else{

			console.log($('#inputLastName').val());
			this.booleanValidatedInput = false;

		}

	}


	inputSSN1(){

		if ($('#ssn1').val()) {

			console.log($('#ssn1').val());
			this.booleanValidatedInput = true;

		}else{

			console.log($('#ssn1').val());
			this.booleanValidatedInput = false;
		}

	}


	inputDOB(){

		if ($('#inputDOB').val()) {
			console.log($('#inputDOB').val());
			this.booleanValidatedInput = true;

		}else{
			console.log($('#inputDOB').val());
			this.booleanValidatedInput = false;
		}

	}


	inputOccupation(){

		if ($('#inputOccupation').val()) {
			console.log($('#inputOccupation').val());
			this.booleanValidatedInput = true;

		}else{
			console.log($('#inputOccupation').val());
			this.booleanValidatedInput = false;
		}


	}


}

	let pageOneValidator = new taxPageValidator();

 



	


	//  pageTwo(){

	// }
