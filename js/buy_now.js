function buy_now(price_value){
    $('#package_price').val(price_value);
    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
    $('#edit_data').modal('show');
}

function facebook_graphics_design(){
    let amount = $('#service_package').val();
    let name = $('#service_name').val();
    let mobile = $('#service_mobile').val();
    let email = $('#service_email').val();
    let occasion = $('#service_occasion').val();
    let pictures = $('#service_pictures').val();
    let upload = $('#service_upload').val();
    let desc = $('#service_desc').val();

    if(amount && name && mobile && email && occasion && pictures && upload && desc){
        
        var options = {
            "key": "rzp_live_mUFaTSANpv0QiA", 
            "amount": amount*100 , 
            "currency": "INR",
            "name": "Apna Prachar",
            "description": "Test Transaction",
            "image": "https://example.com/your_logo",
            "handler": function (response){
            
        
            jQuery.ajax({
        
                type:'POST',
                url: 'donation_process.php',
                data: "payment_id="+ response.razorpay_payment_id+"&name="+name+"&email="+email+"&address="+address+"&amount="+amount,
                success: function(result){
                alert("Paid successfully");
                }
        
            });
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    }else{
        alert("Please fill the form first");
    }
}