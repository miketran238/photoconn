$(function() {

  $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM
      var username = $("input#usernameRegister").val();
      var email = $("input#email").val();
      // var phone = $("input#phone").val();
      // var message = $("textarea#message").val();
      var firstname = $("input#firstname"); 
      var lastname = $("input#lastname");
      var password = $("input#password"); 
      var phone = $("input#phonenumber");
      var zipcode = $("input#zipcode");
      var isPhotographer = $("input#isPhotographer");
      var isCustomer = $("input#isCustomer");
      // Check for white space in name for Success/Fail message
      // if (firstName.indexOf(' ') >= 0) {
      //   firstName = name.split(' ').slice(0, -1).join(' ');
      // }
      // console.log(username);
      $this = $("#registerButton");
      $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
      console.log("Before AJAX");
      $.ajax({
        url: "././register.php",
        type: "POST",
        data: {
          username: username,
          email: email,
          firstname: firstname,
          lastname: lastname,
          password: password,
          phone: phone,
          zipcode: zipcode,
          isPhotographer: isPhotographer,
          isCustomer: isCustomer,
          register_php: true
          // message: message
        },
        dataType: "text",
        cache: false,
        success: function(data, message) {
          // Success message
          // $('#success').html("<div class='alert alert-success'>");
          // $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
          //   .append("</button>");
          // $('#success > .alert-success')
          //   .append("<strong>Your message has been sent. </strong>");
          // $('#success > .alert-success')
          //   .append('</div>');
          //clear all fields
          //$('#contactForm').trigger("reset");
          content.html(data);
          console.log(message);
          alert('works');
          window.location.replace("././profile.php");

        },
        error: function() {
          // Fail message
          // $('#success').html("<div class='alert alert-danger'>");
          // $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
          //   .append("</button>");
          // $('#success > .alert-danger').append($("<strong>").text("Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!"));
          // $('#success > .alert-danger').append('</div>');
          // //clear all fields
          // $('#contactForm').trigger("reset");
          alert('something went wrong');
        },
        // complete: function() {
        //   setTimeout(function() {
        //     $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
        //   }, 1000);
        // }
      });
    },
    // filter: function() {
    //   return $(this).is(":visible");
    // },
  });

  $("a[data-toggle=\"tab\"]").click(function(e) {
    e.preventDefault();
    $(this).tab("show");
  });
});

/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
  $('#success').html('');
});
