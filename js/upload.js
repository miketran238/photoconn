$(window).on("load", function(){
    $("#uploadBtn").on('click',function(event){
       event.preventDefault();
        var fd = new FormData();
        var files = $('#file')[0].files;
        // Check file selected or not
        console.log("here");
        if(files.length > 0 ){
           fd.append('file',files[0]);
           $.ajax({
              url: 'upload.php',
              type: 'post',
              data: fd,
              contentType: false,
              processData: false,
              success: function(response){
                 console.log(response)
                 if(response != 0){
                    // $("#img").attr("src",response); 
                    // $(".preview img").show(); // Display image element
                    //console.log(response)
                    $("#myGallery").append(response);
                     alert("Image uploaded successfully!"); 
                 }else{
                    alert('file not uploaded');
                 }
              },
           });
        }else{
           //alert("Please select a file.");
        }
    })
})