function unhideMail() {
		document.getElementById('email-form').style = "display:block;";
		document.getElementById('sms-form').style = "display:none;";		
}
function unhideSMS() {
		document.getElementById('sms-form').style = "display:block;";
		document.getElementById('email-form').style = "display:none;";
}



function checkForm() {
	if (emailChecked()) {
	if (document.getElementById('email-text').value == "") {
		Materialize.toast('No email input', 2000);
		return false;
	}
	}
	if (smsChecked()) {
		if (document.getElementById('email-text').value == "") {
		Materialize.toast('No phone input', 2000);
		return false;
	}
	}
	if (!emailChecked() && !smsChecked()) {
		Materialize.toast('Select an option', 2000);
		return false;
	}
}

function emailChecked () {
	var inputs = document.getElementById('test1').checked;
	if (inputs == true) {
		return true;
	}
	else if (inputs == false) {
		return false;
	}
	 
}

function smsChecked () {
	var inputs = document.getElementById('test2').checked;
	if (inputs == true) {
		return true;
	}
	else if (inputs == false) {
		return false;
	}
	 
}
