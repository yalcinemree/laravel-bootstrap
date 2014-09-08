(function () {
	var formOne  = function () {
	var formData = $("#search-form").serialize();
		$.ajax({ url: 'ajax/search',
			data: formData,
			type: 'post',
			complete: function(output) {
			$('#formOneResults').html(output.responseText);
			}
		});	
	};

	$(document).ready(function () {
		$("#formOneBtn").on("click", function(e){
		e.preventDefault();
		formOne();
		});

	});
} ()); 