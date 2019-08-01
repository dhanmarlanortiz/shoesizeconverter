function convertSize(value_one, unit_one, value_two, unit_two, category) {
	// console.log(category+": "+value_one+unit_one+", "+value_two+unit_two);
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


	$('#size-one-unit').on('change', function() {
		var unit_one = $('#size-one-unit');
		var unit_two = $('#size-two-unit');
		unit_two.find('option').removeClass('hidden');
		unit_two.find('option[value="' + unit_one.val() + '"]').addClass('hidden');
	});

	$('#size-two-unit').on('change', function() {
		var unit_one = $('#size-one-unit');
		var unit_two = $('#size-two-unit');
		unit_one.find('option').removeClass('hidden');
		unit_one.find('option[value="' + unit_two.val() + '"]').addClass('hidden');
	});

	$('#size-one-value').on('change', function() {
		var input_val = $("#size-one-value").val();
		var input_unit = $("#size-one-unit").val();
		var output_unit = $("#size-two-unit").val();
		var output_val = "";

		var search_col = "";
		if(input_unit == "US") {
			search_col = "td:nth-child(1)";
		}else if(input_unit == "EU") {
			search_col = "td:nth-child(2)";
		}else if(input_unit == "UK") {
			search_col = "td:nth-child(3)";
		}

		var result_col = "";
		if(output_unit == "US") {
			result_col = "td:nth-child(1)";
		}else if(output_unit == "EU") {
			result_col = "td:nth-child(2)";
		}else if(output_unit == "UK") {
			result_col = "td:nth-child(3)";
		}

		$("#charts .tab-pane.active table tbody tr").each( function() {
			var i = $(this).find(search_col).text();

			if(input_val == i) {
				output_val = $(this).find(result_col).text();
				$("#size-two-value").val(output_val);
			}
		});


	});


});
