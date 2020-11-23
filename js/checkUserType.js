$(window).on("load", function(){
    $.ajax({
        url:'checkUserType.php',
        type:'post',
        success:function(response){
            var msg = "";
            console.log(response)
            if(response == -1){
                msg = "Something is seriously wrong"
            }
            else if (response == 1) {
                msg = "Photographer only"
            } else if (response == 2) {
                msg = "Customer only"
            }
            else {
                msg = "Both of them"
            }
            $("#checkUser").html(msg);
        }
    });
});