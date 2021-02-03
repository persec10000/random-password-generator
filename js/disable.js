//disableとenableの切り替えとフォーカス

window.onload = function (){
	if(document.formcheck.stg[0].checked){
		enable();
	} else {
		disable();
	}
}

function disable() {
	document.getElementById("Cbox0").disabled = true;
	document.getElementById("Cbox1").disabled = true;
	document.getElementById("Cbox2").disabled = true;
	document.getElementById("Cbox3").disabled = true;
}

function enable(){
	document.getElementById("Cbox0").disabled = false;
	document.getElementById("Cbox1").disabled = false;
	document.getElementById("Cbox2").disabled = false;
	document.getElementById("Cbox3").disabled = false;
}

function d_focus() {
	document.formcheck.digit[0].checked = true;
}

function s_focus() {
	document.formcheck.su[0].checked = true;
}
