function login(){
	var student_id = $("#student_id").val();
	var studentPassword = $("#studentPassword").val();
	// alert(student_id);
	$.post("http://localhost/mizpah/studentProcess.php",{
		loginStudent: "login",
		student_id: student_id,
		studentPassword: studentPassword
	},function(response){
		if (response == false) {
			$("#indicator").html("Invalid credentials");
		}
		else{
			$("#indicator").html(response)
			location.href = 'http://localhost/mizpah/mainHub.php';
		}
	});
}
