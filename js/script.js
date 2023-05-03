$(document).ready(function(){
	// display_image();
	
	// function display_image(){
	// 	$.ajax({
	// 		url: 'get_image.php',
	// 		type: 'POST',
	// 		data: {res: 1},
	// 		success: function(data){
	// 			$('#result').html(data);
	// 		}
	// 	});
	// }
	
	$('#add').on('click', function(){
		var image = $('#image');
		var image_data = image.prop('files')[0];
 
		var formData = new FormData();
		formData.append('image', image_data);
		$.ajax({
			url: "upload_Product_on_db.php",
			type: "POST",
			data: formData,
			contentType:false,
			cache: false,
			processData: false,
		});
	});
});