$(function() {
      $('#dependentsNum').change(function() {

          $('.dependents').empty();
          $('.childCare').empty();
          $('.collegeTuition').empty();
          $('.healthInsurance').empty();
          $('.insuredDependents').empty();

          var numOfDependents = $(this).val();
          var index = 0;


          for (let i = 0; i < $(this).val(); i++) {

            $(".dependents").
            append('<div class="row form-group"><div class="col-lg-3 form-group"><label for="inputFirstName'+i+'">Dependent(s) first name</label> <input id="inputFirstName'+i+'" type="text" class="form-control" placeholder="First name" name="dependents_first_name[]"></div><div class="col-lg-3 form-group"><label for="inputMiddleName'+i+'">middle name</label><input id="inputMiddleName'+i+'" type="text" class="form-control" placeholder="Middle name" name="dependents_middle_name[]"></div><div class="col-lg-3 form-group"><label for="inputLastName'+i+'">last name</label><input id="inputLastName'+i+'" type="text" class="form-control" placeholder="Last name" name="dependents_last_name[]"></div><div class="col-lg-2 form-group"><label for="inputSuffix'+i+'">Suffix</label><input id="inputSuffix'+i+'" type="text" class="form-control" placeholder="Suffix" name="dependents_suffix[]"></div></div>');
            

            $(".dependents").append('<div class="row form-group"><p class="input-group gutter-width-30"><span class="gutter-width col-lg-4 form-group" ><label style="margin-top:4px" for="inputSSN'+i+'">SSN</label> <input type="text" id="inputSSN'+i+'"  placeholder="***-**-****" maxlength="12" name="dependents_ssn[]"></span><span class="gutter-width col-lg-4 form-group"><label for="inputDateOfBirth'+i+'">Date of Birth</label> <input type="date" id="inputDateOfBirth'+i+'" name="dependents_date_of_birth[]"></span><span class="gutter-width col-lg-4 form-group"><label style="margin-top:4px"  for="inputRelationship'+i+'">Relationship</label> <input type="text" id="inputRelationship'+i+'" placeholder="Relationship" name="dependents_relationship[]"></span></p></div>');

            
            $(".childCare").append('<fieldset class="form-group"><div class="row"><legend class="col-form-label col-sm-2 pt-0">Child Care</legend><div class="col-sm-10"><div class="form-check"><input class="form-check-input" type="radio" name="dependents_child_care[]" id="childCareTrue'+i+'" value="true"><label class="form-check-label" for="childCareTrue'+i+'">Yes</label></div><div class="form-check"><input class="form-check-input" type="radio" name="dependents_child_care[]" id="childCareFalse'+i+'" value="false"><label class="form-check-label" for="childCareFalse'+i+'">No</label></div></div></div></fieldset>');

            $('.collegeTuition').append('<fieldset class="form-group" ><div class="row"><legend class="col-form-label col-sm-2 pt-0">College Tuition</legend><div class="col-sm-10"><div class="form-check"><input class="form-check-input" type="radio" name="dependents_college_tuition[]"  id="collegeTuitionTrue'+i+'" value="true"><label class="form-check-label" for="collegeTuitionTrue'+i+'">Yes</label></div><div class="form-check"><input class="form-check-input" type="radio" name="dependents_college_tuition[]"  id="collegeTuitionFalse'+i+'" value="false"><label class="form-check-label" for="collegeTuitionFalse'+i+'">No</label></div></div></div></fieldset>');


          }



          if ($(this).val()>0) {

             $('.healthInsurance').append('<fieldset class="form-group"> <div class="row"> <legend class="col-form-label col-sm-2 pt-0">Health Insurance: Was everyone listed above covered by a qualified health insurance plan for all of 2018? </legend> <div class="col-sm-10"> <div class="form-check"> <input class="form-check-input" type="radio" name="dependents_health_insurance" id="healthInsurance1" value="true"> <label class="form-check-label" for="healthInsurance1">Yes</label> </div> <div class="form-check"> <input class="form-check-input" type="radio" name="dependents_health_insurance" id="healthInsurance2" value="false"> <label class="form-check-label" for="healthInsurance2">No</label> </div> </div> </div> </fieldset>');

          }



          $("#healthInsurance1").on("click", function(){

             if ($("#healthInsurance1").is(":checked") == true) {

                $('.insuredDependents').empty();


              }
  
          });



        for (let x = 0; x < numOfDependents; x++) {

          $('#inputFirstName'+x).change(function() {


            console.log( $('#inputFirstName'+x).val());

            $('#selectInsuredDependents').empty();

             for (let i = 0; i < numOfDependents; i++) {

                if ($('#inputFirstName'+i).val().trim().length > 0) {
                  
                  $('#selectInsuredDependents').append('<option value="'+i+'">'+$('#inputFirstName'+i).val().trim()+'</option>');


                }

            
              }

          });

        }



          $("#healthInsurance2").on("click", function(){

            if($("#healthInsurance2").is(":checked") == true){

                $('.insuredDependents').empty();

                $('.insuredDependents').append('<div class="row form-group"> <p class="h6">The answer to the above question was NO, please give us a list of individuals and which months they were insured. </p> </div>');

               
                $('.insuredDependents').append(' <div class="row form-group"> <label class="my-1 mr-2" for="selectInsuredDependents">Dependent:</label> <select class="form-control my-1 mr-sm-2" id="selectInsuredDependents" name="selectedInsuredDependents">');


                for (let i = 0; i < numOfDependents; i++) {

                  if ($('#inputFirstName'+i).val().trim().length > 0) {
                    $('#selectInsuredDependents').append('<option value="'+i+'">'+$('#inputFirstName'+i).val().trim()+'</option>');
                  }
                
                }

                $('.insuredDependents').append('</select></div>');



                $('.insuredDependents').append('<div class="row form-group"> <label>Months insured:</label></div>');


                $('.insuredDependents').append('<div class="row form-group" id="selectedDepdendentsMonth_'+index+'"> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxJanuary'+index+'" value="January_'+index+'" name="months_insured_january[]"> <label class="form-check-label" for="inlineCheckboxJanuary'+index+'">January</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxFebuary'+index+'" value="Febuary_'+index+'" name="months_insured_febuary[]"> <label class="form-check-label" for="inlineCheckboxFebuary'+index+'">Febuary</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxMarch'+index+'" value="March_'+index+'" name="months_insured_march[]"> <label class="form-check-label" for="inlineCheckboxMarch'+index+'">March</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxApril'+index+'" value="April_'+index+'" name="months_insured_april[]"> <label class="form-check-label" for="inlineCheckboxApril'+index+'">April</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxMay'+index+'" value="May_'+index+'" name="months_insured_may[]"> <label class="form-check-label" for="inlineCheckboxMay'+index+'">May</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxJune'+index+'" value="June_'+index+'" name="months_insured_june[]"> <label class="form-check-label" for="inlineCheckboxJune'+index+'">June</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxJuly'+index+'" value="July_'+index+'" name="months_insured_july[]"> <label class="form-check-label" for="inlineCheckboxJuly'+index+'">July</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxAugust'+index+'" value="August_'+index+'" name="months_insured_august[]"> <label class="form-check-label" for="inlineCheckboxAugust'+index+'">August</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxSeptember'+index+'" value="September_'+index+'" name="months_insured_september[]"> <label class="form-check-label" for="inlineCheckboxSeptember'+index+'">September</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxOctober'+index+'" value="October_'+index+'" name="months_insured_october[]"> <label class="form-check-label" for="inlineCheckboxOctober'+index+'">October</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxNovember'+index+'" value="November_'+index+'" name="months_insured_november[]"> <label class="form-check-label" for="inlineCheckboxNovember'+index+'">November</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxDecember'+index+'" value="December_'+index+'" name="months_insured_december[]"> <label class="form-check-label" for="inlineCheckboxDecember'+index+'">December</label> </div> </div>');

                for(let i =1; i < numOfDependents; i++){

                  $('.insuredDependents').append('<div class="row form-group" id="selectedDepdendentsMonth_'+i+'"> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxJanuary'+i+'" value="January_'+i+'" name="months_insured_january[]"> <label class="form-check-label" for="inlineCheckboxJanuary'+i+'">January</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxFebuary'+i+'" value="Febuary_'+i+'" name="months_insured_febuary[]"> <label class="form-check-label" for="inlineCheckboxFebuary'+i+'">Febuary</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxMarch'+i+'" value="March_'+i+'" name="months_insured_march[]"> <label class="form-check-label" for="inlineCheckboxMarch'+i+'">March</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxApril'+i+'" value="April_'+i+'" name="months_insured_april[]"> <label class="form-check-label" for="inlineCheckboxApril'+i+'">April</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxMay'+i+'" value="May_'+i+'" name="months_insured_may[]"> <label class="form-check-label" for="inlineCheckboxMay'+i+'">May</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxJune'+i+'" value="June_'+i+'" name="months_insured_june[]"> <label class="form-check-label" for="inlineCheckboxJune'+i+'">June</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxJuly'+i+'" value="July_'+i+'" name="months_insured_july[]"> <label class="form-check-label" for="inlineCheckboxJuly'+i+'">July</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxAugust'+i+'" value="August_'+i+'" name="months_insured_august[]"> <label class="form-check-label" for="inlineCheckboxAugust'+i+'">August</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxSeptember'+i+'" value="September_'+i+'" name="months_insured_september[]"> <label class="form-check-label" for="inlineCheckboxSeptember'+i+'">September</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxOctober'+i+'" value="October_'+i+'" name="months_insured_october[]"> <label class="form-check-label" for="inlineCheckboxOctober'+i+'">October</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxNovember'+i+'" value="November_'+i+'" name="months_insured_november[]"> <label class="form-check-label" for="inlineCheckboxNovember'+i+'">November</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="checkbox" id="inlineCheckboxDecember'+i+'" value="December_'+i+'" name="months_insured_december[]"> <label class="form-check-label" for="inlineCheckboxDecember'+i+'">December</label> </div> </div>');

                  $('#selectedDepdendentsMonth_'+i).hide();

                }

                $('#selectInsuredDependents').change(function() {

                  index = $('#selectInsuredDependents').val().trim();

                  for(let x =0; x < numOfDependents; x++){

                    $('#selectedDepdendentsMonth_'+x).hide();
                  }
                    $('#selectedDepdendentsMonth_'+index).show();

                });


            }
  
          });



          });
      });
