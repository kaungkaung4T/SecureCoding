$(document).ready(function(){

	//check login
	$.ajax({
			type: "POST",
			url: "../common/php/common.php",
			data: "phpFunction=checkLogin",
		    success: function(html){
				if(html=='false')    {
					window.location="../LoginPage/Login.html";
				}
		    }
	});

	showMyItems();
	showItemsToBuy();
});

//logout
$("#linkLogout").click(function(event){
	event.preventDefault();
	$.ajax({
			type: "POST",
			url: "../common/php/common.php",
			data: "phpFunction=logout",
		    success: function(html){
				if(html=='true')    {
					window.location.href="../LoginPage/Login.html";
				}
		    },
			error: function(xhr,textStatus,err)
			{
				console.log("readyState: " + xhr.readyState);
				console.log("responseText: "+ xhr.responseText);
				console.log("status: " + xhr.status);
				console.log("text status: " + textStatus);
				console.log("error: " + err);
			}
	});

});

//Show my items
function showMyItems() {
	//alert("1");
	var html = '';
	$.post("BuyItemDAO.php", "phpfunction=getMyItems", function(data) {
			//alert("2" + data);
			$.each(data, function(key, value){
				html = '<div>';
				html = html + 'Car category: ';
				html = html + value['Item_Category'] + '<br><br>';
				html = html + 'Car name: ';
				html = html + value['Item_Name'] + '<br><br>';
				html = html + 'Car description: ';
				html = html + value['Item_Description'] + '<br><br>';
				html = html + 'Car price: ';
				html = html + value['Price'] + '<br><br>';
				html = html + '</div> <hr color="black" /> <br>';

				//alert("3" + html);
				$('#myItems').append(html);
			});

	} , "json");
}

//Show items to Buy
function showItemsToBuy() {
	var html = '';
	$.post("BuyItemDAO.php", "phpfunction=getItemsToBuy", function(data) {
			$.each(data, function(key, value){
				html = '<div>';
				html = html + 'Car category: ';
				html = html + value['Item_Category'] + '<br><br>';
				html = html + 'Car name: ';
				html = html + value['Item_Name'] + '<br><br>';
				html = html + 'Car description: ';
				html = html + value['Item_Description'] + '<br><br>';
				html = html + 'Car price: ';
				html = html + value['Price']  + '<br><br>';
				html = html + 'Owner email: ';
				html = html + value['Owner_Email'] + '<br><br>' +'<input type="button" value="Add to Cart" button style="background-color:#2a475e; border-color:#2a475e; color:#66c0f4" />' + '<br><br>';
				html = html + '</div><hr color="black" /> <br>';


				$('#itemsToBuy').append(html);
			});

	} , "json");
}
