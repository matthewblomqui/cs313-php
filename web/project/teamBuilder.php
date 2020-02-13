<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <title>Pokemon Battle Simulator</title>
      <link rel="stylesheet" href="prove.css">
   </head>
   <body>

      <div class="row pt-3 pb-3 pokeDark text-warning">
         <h2 class="text-center col">Team Builder</h2>
      </div>

      <div class="row pokeLight">
         <div class="col back">
         </div>
         <div class="col-8 text-center">
            
            <?php
               $curl = curl_init();
               $auth_data = array(
                  'fields'    => 'fields age_ratings,aggregated_rating,aggregated_rating_count,alternative_names,artworks,bundles,category,collection,cover,created_at,dlcs,expansions,external_games,first_release_date,follows,franchise,franchises,game_engines,game_modes,genres,hypes,involved_companies,keywords,multiplayer_modes,name,parent_game,platforms,player_perspectives,popularity,pulse_count,rating,rating_count,release_dates,screenshots,similar_games,slug,standalone_expansions,status,storyline,summary,tags,themes,time_to_beat,total_rating,total_rating_count,updated_at,url,version_parent,version_title,videos,websites;'
                  'user-key' 	=> '56b3ac350a8ebcdd30e790eeced588bd',
                  'Accept'   => 'application/json'
               );
               curl_setopt($curl, CURLOPT_POST, 1);
               curl_setopt($curl, CURLOPT_POSTFIELDS, $auth_data);
               curl_setopt($curl, CURLOPT_URL, 'https://api-v3.igdb.com/games/?user-key=56b3ac350a8ebcdd30e790eeced588bd');
               curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
               curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
               $result = curl_exec($curl);
               if(!$result){die("Connection Failure");}
               curl_close($curl);
               echo $result;


               //$response = file_get_contents("https://pokeapi.co/api/v2/pokemon/?offset=0&limit=1000");
               //$response = file_get_contents("https://api-v3.igdb.com/games/");
               //$response = json_decode($response);
               //print_r($response);
            ?>

         </div>
         <div class="col back">
         </div>
      </div>
      
      <?php include '../../footer.php';?>
   </body>
</html>