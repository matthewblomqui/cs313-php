<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
            <div class="container">
               <br>
               <div class="row">
                  <button type="button" class="btn btn-danger waves-effect ml-3">Return to Teams</button>
                  <button type="button" class="btn btn-success waves-effect ml-auto mr-3">Add to Teams</button>
               </div>
               <br>

               <div class="row">

<!-- Grid column -->
<div class="col-md-6">

    <!--Blue select-->
    <div class="select-wrapper mdb-select md-form colorful-select dropdown-primary"><span class="caret">▼</span>
        <input type="text" class="select-dropdown form-control" readonly="true" required="false" data-activates="select-options-76f3f0e3-c47d-4831-8cb4-c9ef5fbc5ca1" value="" role="combobox" aria-multiselectable="false" aria-disabled="false" aria-required="false" aria-haspopup="true" aria-expanded="false">
        <ul id="select-options-76f3f0e3-c47d-4831-8cb4-c9ef5fbc5ca1" class="dropdown-content select-dropdown w-100" style="display: none; width: 351.281px; position: absolute; top: 0px; left: 0px; opacity: 1;"><span class="search-wrap ml-2" role="searchbox"><div class="md-form mt-0"><input type="text" class="search w-100 d-block " tabindex="-1" placeholder="Search here.."></div></span>
            <li class=" active " role="option" aria-selected="true" aria-disabled="false" style=""><span class="filtrable " style=""> Option 1    </span></li>
            <li class="  " role="option" aria-selected="false" aria-disabled="false" style=""><span class="filtrable " style=""> Option 2    </span></li>
            <li class="  " role="option" aria-selected="false" aria-disabled="false" style=""><span class="filtrable " style=""> Option 3    </span></li>
            <li class="  " role="option" aria-selected="false" aria-disabled="false"><span class="filtrable "> Option 4    </span></li>
            <li class="  " role="option" aria-selected="false" aria-disabled="false" style=""><span class="filtrable " style=""> Option 5    </span></li>
        </ul>
        <select class="mdb-select md-form colorful-select dropdown-primary initialized" searchable="Search here..">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
            <option value="4">Option 4</option>
            <option value="5">Option 5</option>
        </select>
        <label class="mdb-main-label active">Example label</label>
    </div>

    <!--/Blue select-->

</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-md-6">

    <div class="select-wrapper mdb-select mt-4"><span class="caret">▼</span>
        <input type="text" class="select-dropdown form-control" readonly="true" required="false" data-activates="select-options-c0682d1f-ea30-4fb9-a5f1-7680ab519315" value="" role="combobox" aria-multiselectable="false" aria-disabled="false" aria-required="false" aria-haspopup="true" aria-expanded="false">
        <ul id="select-options-c0682d1f-ea30-4fb9-a5f1-7680ab519315" class="dropdown-content select-dropdown w-100" style="display: none; width: 389.688px; position: absolute; top: 0px; left: 0px; opacity: 1;"><span class="search-wrap ml-2" role="searchbox"><div class="md-form mt-0"><input type="text" class="search w-100 d-block " tabindex="-1" placeholder="Search here.."></div></span>
            <li class="disabled active " role="option" aria-selected="true" aria-disabled="true"><span class="filtrable "> Choose your option    </span></li>
            <li class="  " role="option" aria-selected="false" aria-disabled="false"><img alt="" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg" class="rounded-circle"><span class="filtrable "> 
        example
        1    </span></li>
            <li class="  " role="option" aria-selected="false" aria-disabled="false"><img alt="" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle"><span class="filtrable "> 
        example
        2    </span></li>
            <li class="  " role="option" aria-selected="false" aria-disabled="false"><img alt="" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-3.jpg" class="rounded-circle"><span class="filtrable "> 
        example
        1    </span></li>
        </ul>
        <select class="mdb-select mt-4 initialized" searchable="Search here..">
            <option value="1" disabled="" selected="">Choose your option</option>
            <option value="2" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg" class="rounded-circle">
                example 1
            </option>
            <option value="3" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle">
                example 2
            </option>
            <option value="4" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-3.jpg" class="rounded-circle">
                example 1
            </option>
        </select>
    </div>

</div>
<!-- Grid column -->

</div>


               <!-- <input class="form-control" id="search" type="text" placeholder="Search for Pokemon">
               <br>
               <ul class="list-group" id="list">
                  <?php include 'pokiApi.php';?>
               </ul> -->
               <br><br><br><br><br><br>
            </div>
         </div>
         <div class="col back">
         </div>
      </div>
      
      <?php include '../footer.php';?>
      <script src="script.js"></script>
   </body>
</html>