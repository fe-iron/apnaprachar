function complete(id, page){
	$("#id_record").val(id);
	$("#id_page").val(page);
	document.forms['mark_complete'].submit();
}

function my_complete(id, page){
	$("#my_record").val(id);
	$("#my_page").val(page);
	document.forms['bulk_message'].submit();
}

function submit_form(service_for){
	$("#service_for").val(service_for);

	document.forms['advertisement_form'].submit();
}



function myFunction() {
	var x = document.getElementById("myDIV");
	var y = document.getElementById("password");
	if (x.style.display === "block" || y.style.display === "none") {
		x.style.display = "none";
		y.style.display = "block";
	} else {
		x.style.display = "block";
		y.style.display = "none";
	}
}