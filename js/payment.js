 function payment(){
    
  var name = $("#fname").val();
  var email = $("#email").val();
  var address = $("#city").val();
  var mobile = $("#mobile").val();
  var amount = $("#package_price").val();
  // console.log(name+email+address+phone+amount)
  if(name && address && amount && mobile) {
    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
    $('#edit_data').modal('hide');
    var options = {
        "key": "rzp_test_q5FFAxWyFhbued", 
        "amount": amount*100 , 
        "currency": "INR", 
        "name": "Apna Prachar",
        "description": "Apna Prachar Service",
        "image": "http://localhost/apnaprachar/images/logo.png",
        "handler": function (response){
          var payment_id = response['razorpay_payment_id'];
          $("#payment_id").val(payment_id);
          document.forms['service_submit'].submit();
        }
      };
      var rzp1 = new Razorpay(options);
      rzp1.open();

  }else{
    alert("Please fill the form first");
  }

 }
