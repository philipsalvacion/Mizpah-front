// function sendContact(){
//
// }

$("#contactForm").submit(function(e) {
	e.preventDefault();
	var data = $('#contactForm').serialize();
	$.ajax({
		url: 'contactRecieve.php',
		type: 'post',
		// dataType: 'json',
		data: data,
		success: function(response) {
			alert(response);
			location.href = 'index.html';
		}
	});
});
