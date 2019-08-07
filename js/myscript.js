 function convertSize(value_one, unit_one, value_two, unit_two, category) {
	// console.log(category+": "+value_one+unit_one+", "+value_two+unit_two);
}

$(document).ready(function() {

	/* round-off inches */
	$(".tab-content .table").each(function() {
		$(this).find('tr').each(function() {
			$(this).find('.size-in').text(
				+parseFloat(
					$(this).find('.size-in').text()
				).toFixed(2)
			);
		});
	});

	/* toggle cm/inch row */
	$(".length-unit").on("change", function() {
		var unit = $(".length-unit .dk-selected").text();
          console.log(unit);
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

	/* update category dropdown text */
	$("#category-dropdown .dropdown-item").on("click", function() {
		var active_item = $(this).find('> span').text();
		$("#category-toggle .selected-category").text(active_item);
          resetConverter();
	});

     $(".category-list .list-group-item").on("click", function() {
          var active_item = $(this).find('> span').text();
          $(".chart-col .section-title > span").text("(" + active_item + ")");
          resetConverter();
     });


     $('#input-value').on('change', function() {
          $("#input-value").removeClass('error');
          $("#input-value").siblings('.dk-select').removeClass('error');
     });

	$('#input-unit').on('change', function() {
          var input_unit = $("#input-unit").val();
          var input_value = $("#input-value");

          input_value.prop('disabled', false);
          $("#input-unit").removeClass('error');
          $("#input-unit").siblings('.dk-select').removeClass('error');

          if(input_unit != null) {
               var size_options = "<option value='null' selected disabled>Size</option>";
               input_value.find("option").remove();
               $("#charts .tab-pane.active table tbody tr").each( function() {
                    var sizes = $(this).find("td:nth-child("+input_unit+")").text();
                    var option = "<option value='" + sizes + "'>" + sizes + "</option>";
                    size_options += option;
     		});
               input_value.append(size_options);
               resetValueField();
          } else {
               input_value.prop('disabled', true);
               input_value.find('option:first-child').prop('selected', true);
               resetValueField();
          }
	});

     $('#convert').on('click', function() {
          var input_unit = $("#input-unit");
          var input_value = $("#input-value");

          if(input_unit.val() == null) {
               input_unit.addClass('error');
               input_unit.siblings('.dk-select').addClass('error');
          }else {
               input_unit.removeClass('error');
               input_unit.siblings('.dk-select').removeClass('error');
          }

          if(input_value.val() == null) {
               input_value.addClass('error');
               input_value.siblings('.dk-select').addClass('error');
          }else {
               input_value.removeClass('error');
               input_value.siblings('.dk-select').removeClass('error');
          }

          if((input_unit.val() != null) && (input_value.val() != null )) {
               $("#charts .tab-pane.active table tbody tr").each( function() {
                    var match_case = $(this).find("td:nth-child(" + input_unit.val() + ")").text()
                    if(match_case == input_value.val()) {
                         var us = $(this).find("td:nth-child(1)").text()
                         var eu = $(this).find("td:nth-child(2)").text()
                         var uk = $(this).find("td:nth-child(3)").text()
                         $("#result-us").text(us);
                         $("#result-eu").text(eu);
                         $("#result-uk").text(uk);
                         $(".results").removeClass('hidden');
                    }
     		});
          }
	});

     function resetConverter() {
          $(".results").addClass('hidden');
          $("#input-unit").find("option:first-child").prop("selected", true);
          $("#input-value").find("option:first-child").prop("selected", true);
          $("#input-value").prop("disabled", true);
          resetValueField();
     }

     function resetValueField() {
          var select = new Dropkick("#input-value");
          select.refresh();
     }

     // $("#input-unit, #input-value").dropkick({
     //      mobile: true
     // });
     $(".length-unit, #input-unit, #input-value").dropkick({
          mobile: true
     });
});
