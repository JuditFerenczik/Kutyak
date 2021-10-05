<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="hu">
    <head>
        <title>Létrehoz</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <?php
   global $connction;
        $connection = mysqli_connect("localhost","root","", "allatok");
        if($connection){
            echo "Csatlakozva"  ;
        }else{
            die("Hiba a csatlakozáskor");
           
        }
     
             $nev = filter_input(INPUT_POST, "nev", FILTER_SANITIZE_STRING);
     echo "<p> " . $nev ."</p>";
     $faj = filter_input(INPUT_POST, "faj", FILTER_SANITIZE_STRING);
     echo "<p> " . $faj ."</p>";
   $tomeg = filter_input(INPUT_POST, "test", FILTER_SANITIZE_NUMBER_INT);
   echo "<p> " . $tomeg ."</p>";
   $magassag = filter_input(INPUT_POST, "mag", FILTER_SANITIZE_NUMBER_INT);
   echo "<p> " . $magassag ."</p>";
    $szuletett = filter_input(INPUT_POST, "születés", FILTER_SANITIZE_STRING);
    $szuletes = date_format(date_create($szuletett), "Y-m-d");
    echo "<p> " . $szuletes ."</p>";
    
    if(empty($nev) || empty($faj) || empty($tomeg) || empty($magassag) || empty($szuletes) ){
       echo "<p> Egyik input üres volt!! </p>"; 
    }else{
    $query = "INSERT INTO KUTYIK(név, fajta, testsúly,magasság, születésnap) values( '$nev' ,  '$faj' , '$tomeg' , '$magassag'  ,  '$szuletes' )"  ;
    echo '<div>' . $query . '</div>';
    $res = mysqli_query($connection,$query);
if(!$res){
    die("Nem sikerült a hozzáadás" . mysqli_error($connection));
}
        }
        

mysqli_close($connection);



?>
  <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li class="active"><a data-toggle="collapse" href="#collapseForm">Felvétel</a></li>
            <li><a href="index.php">Listázás</a></li>

        </ul>
        <p class="navbar-text"></p>
    </nav>


    <div class="container collapse " id="collapseForm">
        <form class="bg-light rounded bg-primary w-50 mt-5 mx-auto px-5 pt-4 pb-3"   method="POST">
            <div
                class=" h3 text-dark  p-3 h-25 form-group row bg-dark rounded col-md-12">
                Kutyák hozzáadása
            </div>
            <div class="form-group row">
                <label for="nev" class="text-center  col-md-2 col-form-label">Név:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nev" name="nev" placeholder="név">
                </div>

            </div>
            <div class="form-group row">
                <label for="faj" class="text-center  col-md-2 col-form-label">Fajta:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="faj" id="faj" placeholder="fajta">
                </div>
            </div>

            <div class="form-group row">
                <label for="test" class="text-center  col-md-2 col-form-label">Testsúly:</label>
                <div class="col-md-8">
                    <input type="number" class="form-control" name="test" id="test" placeholder="kilogramm">
                </div>
            </div>
            <div class="form-group row ">
                <label for="mag" class="text-center col-md-2 col-form-label">Magasság:</label>
                <div class="col-md-8">
                    <input type="number" class="form-control" name="mag" id="mag" placeholder="centiméter">
                </div>
            </div>

            <div class="form-group row">
                <label for="születés" class="text-center col-md-2 col-form-label">Születésnap:</label>
                <div class="col-md-8">
                    <input type="date" class="form-control" name="születés" id="születés">
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-danger">Hozzáadás</button>
            </div>
        </form>

    </div>

    </body>
</html>