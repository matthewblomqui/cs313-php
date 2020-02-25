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
   csv = "heading1,heading2,heading3,heading4,heading5\nvalue1_1,value2_1,value3_1,value4_1,value5_1\nvalue1_2,value2_2,value3_2,value4_2,value5_2";


   
   $.ajax({
      type: "POST",
      url: "/sources/pokedex.csv",
      dataType: "text",
      data: {
         html: csv
      },
      success: function(data) {
         processData(data);
      }
   });
   
   function processData(allText) {
       var allTextLines = allText.split(/\r\n|\n/);
       var headers = allTextLines[0].split(',');
       var lines = [];
   
       for (var i=1; i<allTextLines.length; i++) {
           var data = allTextLines[i].split(',');
           if (data.length == headers.length) {
   
               var tarr = [];
               for (var j=0; j<headers.length; j++) {
                   tarr.push(headers[j]+":"+data[j]);
               }
               lines.push(tarr);
           }
       }
   console.log(lines);
   }










   $("#p_1").change(function() {
      //alert($("#p_1").text());
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