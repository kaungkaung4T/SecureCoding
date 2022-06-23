$(document).ready(function(){
	$.ajax({
			type: "POST",
			url: "../common/php/common.php",
			data: "phpFunction=checkLogin",
		    success: function(html){
				if(html=='true')    {
					$("#divError").html("already logged in...");
					window.location="../SellItemPage/SellItem.html";
				}
		    }
	});
});

// $("#txtUserName").keypress(function(event) {
//     var character = String.fromCharCode(event.keyCode);
//     return isValid(character);
// });
//
// function isValid(str) {
//     return !/[~`!#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
// }
//
// $('#txtUserName').bind("cut copy paste",function(e) {
//      e.preventDefault();
//  });



	//$("#btnLogin").click(function(){
$('#formUserLogin').submit(function(event){
		//username=$("#txtUserName").val();
		//password=$("#txtPassword").val();
		//modulecode=$("#txtModuleCode").val();
		formData = $('#formUserLogin').serialize();
		//alert(formData);
		event.preventDefault();
		//alert(formData);

		$.ajax({
			type: "POST",
			url: "LoginDAO.php",
			//data: "username="+username+"&password="+password+"&modulecode="+modulecode,
			data: formData+"&phpFunction=login",
			datatype: 'json',
		    success: function(data){
				if(data=='false')    {
					$("#divError").css('display', 'inline', 'important');
					$("#divError").html("<img src='../images/alert.png' />Wrong username or password");
				}
				else    {
					//alert("test1:" + html);
					//$("#divError").css('display', 'inline', 'important');
					//$("#divError").html("<img src='../images/alert.png' />Wrong username or password");
					$("#divError").html("right username or password");
					dataJson = JSON.parse(data);
					firstName = dataJson['First_Name'];
					lastName = dataJson['Last_Name'];
					sessionStorage.setItem('firstName', firstName);
					sessionStorage.setItem('lastName', lastName);
					window.location="../SellItemPage/SellItem.html";
				}
		    },
		    beforeSend:function()
		    {
				//$("#divError").css('display', 'inline', 'important');
				$("#divError").html("<img src='../images/ajax-loader.gif' /> Loading...")
		    }
		});
		//return false;
});
