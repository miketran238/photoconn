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
                document.getElementById("requests").style.display = "none";
                document.getElementById("requests").style.visibility = "hidden";
                $.ajax({
                    url:'routing/loadAllRequests.php',
                    type:'post',
                    success:function(allRequests) {
                        console.log(allRequests);
                        $('#allRequest').html(allRequests);
                    },
                    complete:function() {
                        var selectButtons = document.getElementsByClassName('chooseBid');
                        // console.log(selectButtons)
                        for (var i = 0 ; i < selectButtons.length; i++) {
                            selectButtons[i].addEventListener('click' , event => {
                                console.log(event.target.value);
                                var myRate = $("#myRate").val();
                                console.log(myRate)
                                var reqId = event.target.value
                                $.ajax({
                                    url:'selectBid.php',
                                    type:'post',
                                    data:{req_id:reqId, rate:myRate},
                                    success:function(confirmSelectBid){
                                        window.alert("You successfully bid on this request")
                                    }
                                })
                            });
                         }
                    }
                });
            } 
            else if (response == 2) {
                msg = "Customer only"
                document.getElementById("photos").style.display = "none";
                document.getElementById("photos").style.visibility = "hidden";
                document.getElementById("bids").style.display = "none";
                document.getElementById("bids").style.visibility = "hidden";
                $('#datetimepicker').datetimepicker({
                    inline:true,
                    minDate: '0'
                    });
                $.ajax({
                    url:'routing/loadRequest.php',
                    type:'post',
                    success:function(loadRequestResponse) {
                        console.log(loadRequestResponse);
                        $('#requestTable').html(loadRequestResponse);
                    },
                    complete:function() {
                        $.ajax({
                            url:'routing/loadBids.php',
                            type:'post',
                            success:function(bidResultResponse){
                                console.log(bidResultResponse)
                                $('#bidsTable').html(bidResultResponse);
                            }
                        })
                    }
                });
            }
            else {
                msg = "Both of them"
            }
            $("#checkUser").html(msg);
        }
    });
    
    $("#chooseTimeDateBtn").on('click',function(){
        dateTime = $('#datetimepicker').datetimepicker('getValue')
        console.log(dateTime)
        // let [month, date, year] = new Date().toLocaleDateString("en-US").split("/")
        // console.log(month)
        // console.log(date)
        // console.log(year)
        mysqlDate = dateTime.toISOString().slice(0, 19).replace('T', ' ')
        mysqlTime = dateTime.toLocaleTimeString('it-IT');
        mysqlDate = mysqlDate.split(" ")[0];
        mysqlTimeAndDate = mysqlDate.concat(" ").concat(mysqlTime)
        console.log(mysqlTimeAndDate)
        var reqLoc = $("#reqLoc").val().trim();
        var reqType = $("#reqType").val().trim();
        $.ajax({
            url:'makeRequest.php',
            type:'post',
            data:{mysqlTimeAndDate:mysqlTimeAndDate,reqLoc:reqLoc,reqType:reqType},
            success:function(response){
                console.log(response)
                if ( response == 1 ) {
                    //$("#loginMessage").html(msg);
                    window.alert("Request was successfully made!")
                    $.ajax({
                        url:'routing/loadRequest.php',
                        type:'post',
                        success:function(loadRequestResponse) {
                            console.log(loadRequestResponse);
                            $('#requestTable').html(loadRequestResponse);
                        }
                    });
                }   
                else {
                    window.alert("Request cannot be made!")
                }
            }
        });
    })

});