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
      var pokedex = $("#p_1").val();
      var str = "";
      str = str.concat("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/",pokedex,".png");
      $("#preview_1").attr("src",str);
   });
   $("#p_2").change(function() {
      var pokedex = $("#p_2").val();
      var str = "";
      str = str.concat("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/",pokedex,".png");
      $("#preview_2").attr("src",str);
   });
   $("#p_3").change(function() {
      var pokedex = $("#p_3").val();
      var str = "";
      str = str.concat("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/",pokedex,".png");
      $("#preview_3").attr("src",str);
   });
   $("#p_4").change(function() {
      var pokedex = $("#p_4").val();
      var str = "";
      str = str.concat("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/",pokedex,".png");
      $("#preview_4").attr("src",str);
   });
   $("#p_5").change(function() {
      var pokedex = $("#p_5").val();
      var str = "";
      str = str.concat("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/",pokedex,".png");
      $("#preview_5").attr("src",str);
   });
   $("#p_6").change(function() {
      var pokedex = $("#p_6").val();
      var str = "";
      str = str.concat("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/",pokedex,".png");
      $("#preview_6").attr("src",str);
   });
});

// $(document).ready(function(){
//    $("button").click(function(){
//        $("#menu").append('<li><a href="#">New list item</a></li>');
//    });
// });