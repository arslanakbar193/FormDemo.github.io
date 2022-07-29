$(document).ready(function () {
  $("#next-1").click(function (e) {
    e.preventDefault();

    $("#fn-Error").html("");
    $("#ln-Error").html("");
    // console.log($("#fname").val());
    if ($("#fname").val() == "") {
      $("#fn-Error").html("* First Name is Required");
      return false;
    } else if ($("#fname").val().length < 3) {
      $("#fn-Error").html(
        "* First Name Length must be of more than 7 characters"
      );
      return false;
    } else if (!isNaN($("#fname").val())) {
      $("#fn-Error").html("* Numbers are not Allowded");
      return false;
    } else if ($("#lname").val() == "") {
      $("#ln-Error").html("* Last Name is Required");
      return false;
    } else if ($("#lname").val().length < 3) {
      $("#ln-Error").html(
        "* Last Name Length must be of more than 7 characters"
      );
      return false;
    } else if (!isNaN($("#lname").val())) {
      $("#ln-Error").html("* Numbers are not Allowded");
      return false;
    } else {
      $("#second").show();
      $("#first").hide();
      $("#progressBar").css("width", "60%");
      $("#progresstext").html("Step-2");
    }
  });

  $("#prev-2").click(function () {
    $("#second").hide();
    $("#first").show();
    $("#progressBar").css("width", "20%");
    $("#progresstext").html("Step-1");
  });

  $("#next-2").click(function (e) {
    e.preventDefault();

    $("#email-Error").html("");
    $("#phone-Error").html("");

    if ($("#email").val() == "") {
      $("#email-Error").html("* Email is Required");
      return false;
    }else if(!validateEmail($("#email").val())){
      $("#email-Error").html("* Email is not valid");
      return false;
    }if ($("#phone").val() == "") {
      $("#phone-Error").html("* Phone Number is Required");
      return false;
    } else if ($("#phone").val().length != 6) {
      $("#phone-Error").html(
        "* Phoe Number must 6 Digits"
      );
      return false;
    } else {
      $("#second").hide();
      $("#third").show();
      $("#progressBar").css("width", "100%");
      $("#progresstext").html("Step-3");
    }
    function validateEmail($email){
      var emailReg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return emailReg.test($email);
    }
  });


  $("#prev-3").click(function () {
    $("#second").show();
    $("#third").hide();
    $("#progressBar").css("width", "60%");
    $("#progresstext").html("Step-2");
  });


  $("#submit").click(function(e){
    alert("asd");
    $("#p-Error").html("");
    $("#cp-Error").html("");
    
    e.preventDefault();
    if ($("#password").val() == "") {
      $("#p-Error").html("* Password is Required");
      return false;
    }else if ($("#password").val().length < 4) {
      $("#p-Error").html("* Password Length must be of more 4 characters");
      return false;
    }else if ($("#cpassword").val() == "") {
      $("#cp-Error").html("* Confirm Password  is Required");
      return false;
    }
    else if ($("#password").val() != $("#cpassword").val()) {
      $("#cp-Error").html("* password Not Match" );
      return false;
    }else{
      
      // $("#form-data").attr(
      //   'action',
      //   'mailto:akbararslan193@gmail.com?subject=Jeannette Chambliss Digital Portfolio');
      // console.log($("#form-data")[0].action);
      // return true;
    //   alert("submited");
     console.log($("#fname").val());
      $.ajax({
        url:'action.php',
        method:'post',
        data:$("#form-data").serialize(),
        success:function(response){
          $("#result").show();
          $("#result").html(response);
        }
      })
    }

  });

  
});
