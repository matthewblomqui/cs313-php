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
   var dex = [];
   var types = ["Null","normal", "fighting", "flying", "poison", "ground", "rock", "bug", "ghost", "steel", "fire", "water", "grass", "electric", "psychic", "ice", "dragon", "dark", "fairy"];
   get_csv();

   function get_csv() {
      csv = "";
      $.ajax({
         type: "POST",
         url: "sources/pokedex.csv",
         dataType: "text",
         data: {
            html: csv
         },
         success: function(data) {
            processData(data);
         }
      });
      
   }
   
   function processData(allText) {
       var allTextLines = allText.split(/\r\n|\n/);
       var headers = allTextLines[0].split(',');
       var lines = [];
   
       for (var i=1; i<allTextLines.length; i++) {
           var data = allTextLines[i].split(',');
           if (data.length == headers.length) {
   
               var tarr = [];
               for (var j=0; j<headers.length; j++) {
                   tarr.push(data[j]);
               }
               lines.push(tarr);
           }
       }
   //console.log(lines);
   dex = lines;
   console.log(dex);
   }

   $("#p_1").change(function() {
      var pokedex = $("#p_1").val();
      //alert(dex[pokedex - 1][0]);
      var str = "";
      str = str.concat("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/",pokedex,".png");
      $("#preview_1").attr("src",str);
      $("#name_1").text(dex[pokedex - 1][0]);
      $("#type_1_1").removeClass();
      $("#type_1_2").removeClass();
      $("#type_1_1").addClass("type");
      $("#type_1_1").addClass(types[dex[pokedex - 1][1]]);
      alert(dex[pokedex - 1][2]);
      if (dex[pokedex - 1][2] != "")
      {
         $("#type_1_2").addClass("type");
         $("#type_1_2").addClass(types[dex[pokedex - 1][2]]);
      }
   });
   $("#p_2").change(function() {
      var pokedex = $("#p_2").val();
      var str = "";
      str = str.concat("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/",pokedex,".png");
      $("#preview_2").attr("src",str);
      $("#name_2").text(dex[pokedex - 1][0]);
      $("#type_2_1").removeClass();
      $("#type_2_1").addClass("type");
      $("#type_2_1").addClass(types[dex[pokedex - 1][1]]);
   });
   $("#p_3").change(function() {
      var pokedex = $("#p_3").val();
      var str = "";
      str = str.concat("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/",pokedex,".png");
      $("#preview_3").attr("src",str);
      $("#name_3").text(dex[pokedex - 1][0]);
      $("#type_3_1").removeClass();
      $("#type_3_1").addClass("type");
      $("#type_3_1").addClass(types[dex[pokedex - 1][1]]);
   });
   $("#p_4").change(function() {
      var pokedex = $("#p_4").val();
      var str = "";
      str = str.concat("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/",pokedex,".png");
      $("#preview_4").attr("src",str);
      $("#name_4").text(dex[pokedex - 1][0]);
      $("#type_4_1").removeClass();
      $("#type_4_1").addClass("type");
      $("#type_4_1").addClass(types[dex[pokedex - 1][1]]);
   });
   $("#p_5").change(function() {
      var pokedex = $("#p_5").val();
      var str = "";
      str = str.concat("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/",pokedex,".png");
      $("#preview_5").attr("src",str);
      $("#name_5").text(dex[pokedex - 1][0]);
      $("#type_5_1").removeClass();
      $("#type_5_1").addClass("type");
      $("#type_5_1").addClass(types[dex[pokedex - 1][1]]);
   });
   $("#p_6").change(function() {
      var pokedex = $("#p_6").val();
      var str = "";
      str = str.concat("https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/",pokedex,".png");
      $("#preview_6").attr("src",str);
      $("#name_6").text(dex[pokedex - 1][0]);
      $("#type_6_1").removeClass();
      $("#type_6_1").addClass("type");
      $("#type_6_1").addClass(types[dex[pokedex - 1][1]]);
   });
});

// $(document).ready(function(){
//    $("button").click(function(){
//        $("#menu").append('<li><a href="#">New list item</a></li>');
//    });
// });