// custom js

    var index =1;
    var dynamicString1 = 'tag-date1'
    var dynamicString2 = 'tag-date1'



    // only do these commands when tax portal is clicked to save js browser runtime executions
    $('#paidEstimatedTaxes').hide();

    $('#paidEstimatedTaxesButton').hide();

    $('#removeEstimatedTaxesButton').hide();

    $('#newBankingInfo').hide();

    $('#bankingInfo').hide();




    $("#addTaxPayment").on("click", function(){




        ++index;
        dynamicString = '#tag-input'+index;
        dynamicString1 = 'tag-input'+index;
        dynamicString2 = 'tag-date'+index;

        $('#paidEstimatedTaxes').append('<p class="input-group gutter-width-30 " id="taxPaymentID_'+index+'" style="margin-top:1em;"> <span class="gutter-width col-lg-4 form-group"> <label style="margin-top:4px" for="'+dynamicString1+'" style="margin-top:4px;">Paid tax estimate ('+index+') </label> <input id="'+dynamicString1+'" type="text" name="estimated_taxes_paid_and_date_'+index+'"> </span> <span class="gutter-width col-lg-4 form-group"> <label for="'+dynamicString2+'">Date</label> <input id="'+dynamicString2+'" type="date" name="paid_taxes_date_'+index+'"> </span> </p>');
              

        if (index>=2) {

           $('#removeEstimatedTaxesButton').show();
           
        }else{
             $('#removeEstimatedTaxesButton').hide();
        }


      });


    $("#removeTaxPayment").on("click", function(){



        $('#taxPaymentID_'+index).remove();

          --index;
          dynamicString = '#tag-input'+index;
          dynamicString1 = 'tag-input'+index;
          dynamicString2 = 'tag-date'+index;   

            if(index<2){

                      $('#removeEstimatedTaxesButton').hide();
                    }

      });



    $("#gridRadios13").on("click", function(){




             if ($("#gridRadios13").is(":checked") == true) {

                $('#paidEstimatedTaxes').show();

                $('#paidEstimatedTaxesButton').show();

                if(index>=2){

                      $('#removeEstimatedTaxesButton').show();
                    }

              }

  
          });



  $("#gridRadios14").on("click", function(){

            if($("#gridRadios14").is(":checked") == true){
                       $('#paidEstimatedTaxes').empty();

                        index = 1;
                        $('#paidEstimatedTaxes').append('<p class="input-group gutter-width-30" id="taxPaymentID_'+index+'" style="margin-top:1em;"> <span class="gutter-width col-lg-4 form-group"> <label style="margin-top:4px" for="'+dynamicString1+'" style="margin-top:4px;">Paid tax estimate ('+index+') </label> <input id="'+dynamicString1+'" type="text" name="estimated_taxes_paid_and_date_'+index+'"> </span> <span class="gutter-width col-lg-4 form-group"> <label for="'+dynamicString2+'">Date</label> <input id="'+dynamicString2+'" type="date" name="paid_taxes_date_'+index+'"> </span> </p>');
                        $('#paidEstimatedTaxes').hide();
                        $('#paidEstimatedTaxesButton').hide();
                        $('#removeEstimatedTaxesButton').hide();

                     }
              
  
          });




    $("#gridRadios15").on("click", function(){




             if ($("#gridRadios15").is(":checked") == true) {


                $('#newBankingInfo').show();
                $('#bankingInfo').show();

              }

  
          });



  $("#gridRadios16").on("click", function(){

            if($("#gridRadios16").is(":checked") == true){

                $('#newBankingInfo').hide();
            
                $('#bankingInfo').hide();

                     }
              
  
          });


  function pageOne() {

    document.getElementById("navBtn1").style.color = "white";
    document.getElementById("navBtn1").style.backgroundColor = "black";

    document.getElementById("navBtn2").style.color = "black";
    document.getElementById("navBtn2").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn3").style.color = "black";
    document.getElementById("navBtn3").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn4").style.color = "black";
    document.getElementById("navBtn4").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn5").style.color = "black";
    document.getElementById("navBtn5").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn6").style.color = "black";
    document.getElementById("navBtn6").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn7").style.color = "black";
    document.getElementById("navBtn7").style.backgroundColor = "#f8f8f8";

    document.getElementById("pageOne").style.display = "block";
    document.getElementById("pageTwo").style.display = "none";
    document.getElementById("pageThree").style.display = "none";
    document.getElementById("pageFour").style.display = "none";
    document.getElementById("pageFive").style.display = "none";
    document.getElementById("pageSix").style.display = "none";
    document.getElementById("pageSeven").style.display = "none";

   


}

function pageTwo() {


    document.getElementById("navBtn1").style.color = "black";
    document.getElementById("navBtn1").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn2").style.color = "white";
    document.getElementById("navBtn2").style.backgroundColor = "black";

    document.getElementById("navBtn3").style.color = "black";
    document.getElementById("navBtn3").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn4").style.color = "black";
    document.getElementById("navBtn4").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn5").style.color = "black";
    document.getElementById("navBtn5").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn6").style.color = "black";
    document.getElementById("navBtn6").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn7").style.color = "black";
    document.getElementById("navBtn7").style.backgroundColor = "#f8f8f8";

    document.getElementById("pageOne").style.display = "none";
    document.getElementById("pageTwo").style.display = "block";
    document.getElementById("pageThree").style.display = "none";
    document.getElementById("pageFour").style.display = "none";
    document.getElementById("pageFive").style.display = "none";
    document.getElementById("pageSix").style.display = "none";
    document.getElementById("pageSeven").style.display = "none";
}


function pageThree() {

    document.getElementById("navBtn1").style.color = "black";
    document.getElementById("navBtn1").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn2").style.color = "black";
    document.getElementById("navBtn2").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn3").style.color = "white";
    document.getElementById("navBtn3").style.backgroundColor = "black";

    document.getElementById("navBtn4").style.color = "black";
    document.getElementById("navBtn4").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn5").style.color = "black";
    document.getElementById("navBtn5").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn6").style.color = "black";
    document.getElementById("navBtn6").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn7").style.color = "black";
    document.getElementById("navBtn7").style.backgroundColor = "#f8f8f8";

    document.getElementById("pageOne").style.display = "none";
    document.getElementById("pageTwo").style.display = "none";
    document.getElementById("pageThree").style.display = "block";
    document.getElementById("pageFour").style.display = "none";
    document.getElementById("pageFive").style.display = "none";
    document.getElementById("pageSix").style.display = "none";
    document.getElementById("pageSeven").style.display = "none";
}

function pageFour() {

    document.getElementById("navBtn1").style.color = "black";
    document.getElementById("navBtn1").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn2").style.color = "black";
    document.getElementById("navBtn2").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn3").style.color = "black";
    document.getElementById("navBtn3").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn4").style.color = "white";
    document.getElementById("navBtn4").style.backgroundColor = "black";

    document.getElementById("navBtn5").style.color = "black";
    document.getElementById("navBtn5").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn6").style.color = "black";
    document.getElementById("navBtn6").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn7").style.color = "black";
    document.getElementById("navBtn7").style.backgroundColor = "#f8f8f8";

    document.getElementById("pageOne").style.display = "none";
    document.getElementById("pageTwo").style.display = "none";
    document.getElementById("pageThree").style.display = "none";
    document.getElementById("pageFour").style.display = "block";
    document.getElementById("pageFive").style.display = "none";
    document.getElementById("pageSix").style.display = "none";
    document.getElementById("pageSeven").style.display = "none";
}


function pageFive() {

    document.getElementById("navBtn1").style.color = "black";
    document.getElementById("navBtn1").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn2").style.color = "black";
    document.getElementById("navBtn2").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn3").style.color = "black";
    document.getElementById("navBtn3").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn4").style.color = "black";
    document.getElementById("navBtn4").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn5").style.color = "white";
    document.getElementById("navBtn5").style.backgroundColor = "black";

    document.getElementById("navBtn6").style.color = "black";
    document.getElementById("navBtn6").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn7").style.color = "black";
    document.getElementById("navBtn7").style.backgroundColor = "#f8f8f8";

    document.getElementById("pageOne").style.display = "none";
    document.getElementById("pageTwo").style.display = "none";
    document.getElementById("pageThree").style.display = "none";
    document.getElementById("pageFour").style.display = "none";
    document.getElementById("pageFive").style.display = "block";
    document.getElementById("pageSix").style.display = "none";
    document.getElementById("pageSeven").style.display = "none";
}


function pageSix() {

    document.getElementById("navBtn1").style.color = "black";
    document.getElementById("navBtn1").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn2").style.color = "black";
    document.getElementById("navBtn2").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn3").style.color = "black";
    document.getElementById("navBtn3").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn4").style.color = "black";
    document.getElementById("navBtn4").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn5").style.color = "black";
    document.getElementById("navBtn5").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn6").style.color = "white";
    document.getElementById("navBtn6").style.backgroundColor = "black";

    document.getElementById("navBtn7").style.color = "black";
    document.getElementById("navBtn7").style.backgroundColor = "#f8f8f8";

    document.getElementById("pageOne").style.display = "none";
    document.getElementById("pageTwo").style.display = "none";
    document.getElementById("pageThree").style.display = "none";
    document.getElementById("pageFour").style.display = "none";
    document.getElementById("pageFive").style.display = "none";
    document.getElementById("pageSix").style.display = "block";
    document.getElementById("pageSeven").style.display = "none";
}


function pageSeven() {

    document.getElementById("navBtn1").style.color = "black";
    document.getElementById("navBtn1").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn2").style.color = "black";
    document.getElementById("navBtn2").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn3").style.color = "black";
    document.getElementById("navBtn3").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn4").style.color = "black";
    document.getElementById("navBtn4").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn5").style.color = "black";
    document.getElementById("navBtn5").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn6").style.color = "black";
    document.getElementById("navBtn6").style.backgroundColor = "#f8f8f8";

    document.getElementById("navBtn7").style.color = "white";
    document.getElementById("navBtn7").style.backgroundColor = "black";



    document.getElementById("pageOne").style.display = "none";
    document.getElementById("pageTwo").style.display = "none";
    document.getElementById("pageThree").style.display = "none";
    document.getElementById("pageFour").style.display = "none";
    document.getElementById("pageFive").style.display = "none";
    document.getElementById("pageSix").style.display = "none";
    document.getElementById("pageSeven").style.display = "block";
}

 $(document).ready(function() {
      $(".btn-primary").click(function(){ 
          var btnControl = $(".clone").html();
          $(".increment").after(btnControl);
          if(btnControl.length<103){
            $('.clone').append('<div class="removeButton control-group lst input-group" style="margin-top:10px"><input type="file" name="filenames[]" class="myfrm form-control"> <div class="input-group-btn"><button class="btn btn-warning" type="button"> Remove</button></div></div>');
          }
      });
      $("body").on("click",".btn-warning",function(){ 
          $(this).parents(".removeButton").remove();
      });
    });
