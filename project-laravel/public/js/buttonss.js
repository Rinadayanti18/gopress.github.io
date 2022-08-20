function tambah() {
	var i = document.getElementById("weight_id").value;;
	if (i <= 49) {
		i++;
		document.getElementById('weight_id').value = i;
	} else if (i >= 50) {
		alert("Batas Maksimal 50 KG!!!!!")
	}
}

function mines() {
	var i = document.getElementById("weight_id").value;;
	if (i >= 1 && i <= 50) {
		i--;
		document.getElementById('weight_id').value = i;
	} else if (i <= 1) {
		alert("Diatas 1 KG")
	}
}