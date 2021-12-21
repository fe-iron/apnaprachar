function check_video_picture(){
    let video = $("#video_video").val();
    let picture = $("#video_picture").val();
    let mobile = $("#video_mobile").val();
    let name = $("#video_name").val();
    let desc = $("#video_desc").val();

    if(video == "" && picture == ""){
        $("#error_msg").html("Please select atleast a video or picture");
        
    }else{
        if(mobile == "" || mobile == " "){
            $("#error_msg").html("Please enter mobile number");
        }else if(name == "" || name == " "){
            $("#error_msg").html("Please enter your name");
        } else if(desc == "" || desc == " "){
            $("#error_msg").html("Please enter the description");
        }else{
            document.forms['video_services'].submit();
        }
    }
}