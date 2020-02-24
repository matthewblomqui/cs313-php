// $(document).ready(function(){
//    $("#search").on("keyup", function() {
//       var value = $(this).val().toLowerCase();
//       $("#list li").filter(function() {
//          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//       });
//    });
// });
$(document).ready(function(){
   $("button").click(function(){
       $("#menu").append('<li><a href="#">New list item</a></li>');
   });
});