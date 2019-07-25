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

});
