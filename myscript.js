function convertSize(value_one, unit_one, value_two, unit_two, category) {
	console.log(category+": "+value_one+unit_one+", "+value_two+unit_two);     
}

$(document).ready(function() {

	$(".tab-content .table").each(function() {
		$(this).find('tr').each(function() {
			$(this).find('.size-in').text(
				+parseFloat(
					$(this).find('.size-in').text()
				).toFixed(2)
			);
		});
	});

	$(".length-unit").on("change", function() {
		var unit = $(".length-unit").val();
		if(unit == "cm") {
			$(".size-in").hide(function() {
				$(this).attr("selected", false);
			});
			$(".size-cm").show(function() {
				$(this).attr("selected", true);
			});
		}else if (unit == "in") {
			$(".size-in").show(function() {
				$(this).attr("selected", true);
			});
			$(".size-cm").hide(function() {
				$(this).attr("selected", false);
			});
		}
	});

	$("#category-dropdown .dropdown-item").on("click", function() {
		var active_item = $(this).find('> span').text();
		$("#category-toggle .selected-category").text(active_item);
	});

	$('#category-dropdown .dropdown-item').on('click', function() {
		var value_one = $('#size-one-value').val(), 
			unit_one = $('#size-one-unit').val(), 
			value_two = $('#size-two-value').val(), 
			unit_two = $('#size-two-unit').val(), 
			category = $(this).find('> span').text();
		
		convertSize(value_one, unit_one, value_two, unit_two, category);
	});

	$('#size-one-value, #size-one-unit, #size-two-value, #size-two-unit').on('change', function() {
		var value_one = $('#size-one-value').val(), 
			unit_one = $('#size-one-unit').val(), 
			value_two = $('#size-two-value').val(), 
			unit_two = $('#size-two-unit').val(), 
			category = $('#category-dropdown > a.active > span').text();
		
		convertSize(value_one, unit_one, value_two, unit_two, category);
	});

});





