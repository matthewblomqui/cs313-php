// $(document).ready(function(){
//    $("#search").on("keyup", function() {
//       var value = $(this).val().toLowerCase();
//       $("#list li").filter(function() {
//          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//       });
//    });
// });

function teams() {
   window.location.replace('index.php');
}

$(document).ready(function(){
   $("#p_1").change(function() {
      //alert($("#p_1").val());
      var pokedex = $("#p_1").val();
      var str = "";
      str = str.concat("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/",pokedex,".png");
      $("#preview_1").attr("src",str);
   });
});

// $(document).ready(function(){
//    $("button").click(function(){
//        $("#menu").append('<li><a href="#">New list item</a></li>');
//    });
// });