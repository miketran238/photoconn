$(window).on("load", function(){
    $("#registerBtn").on('click',function(){
        console.log('Here')
        var firstname = $("#newFn").val().trim();
        var lastname = $("#newLn").val().trim();
        var phonenumber = $("#newPhoneN0").val().trim();
        var zipcode = $("#newZipCode").val().trim();
        var username = $("#newUserName").val().trim();
        var email = $("#newEmail").val().trim();
        var password = $("#newPw").val().trim();
        var isPhotographer = $('#isPhotographer').val();
        var isCustomer = $('#isCustomer').val();
        console.log(isPhotographer, isCustomer);
        var msg = "";
        if( username != "" && password != "" ){
            $.ajax({
                url:'register.php',
                type:'post',
                data:{username:username,password:password,
                    firstname:firstname, lastname:lastname,
                    email:email, isPhotographer: isPhotographer, isCustomer: isCustomer,
                    phonenumber:phonenumber},
                success:function(response){
                    console.log(response)
                    if(response == 1){
                        msg = "Register successfully!, please login";
                        document.getElementById("loginForm").style.display = "block";
                        document.getElementById("loginForm").style.visibility = "visible";
                        document.getElementById("register").style.display = "none";
                        document.getElementById("register").style.visibility = "hidden";
                        var link = document.getElementById("LoginOrRegister");
                        link.setAttribute("href", "#loginForm");
                        link.innerHTML = "Login";
                        msg = "Register successfully, please login";
                        $("#loginMessage").html(msg);

                    } else if ( response == 3 ) {
                        msg = "Username already exists";
                        $("#registerMessage").html(msg);
                    } else if ( response == 4 ) {
                        msg = "Email has been used";
                        $("#registerMessage").html(msg);
                    }
                    
                }
            });
        }
    });

});