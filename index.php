<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <style>
            td, th{
                width: 120px;
                text-align: center;
            }
            th{
                background-color: red;
            }
            
        </style>      
  <title>Listázás</title>
    </head>
    <body>
          <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li class="active"><a data-toggle="collapse" href="#collapseForm">Listázás</a></li>
            <li><a href="letrehoz.php">Hozzáadás</a></li>

        </ul>
         <p class="navbar-text"></p>
    </nav>
        <div class="container collapse" id ="collapseForm">
         <?php
        echo "<table style='border:1px solid black;'>

<tr>
<th>Sorszám</th>
<th>Név</th>

<th>Fajta</th>

<th>Tömeg</th>

<th>Magasság</th>
<th>Születésnap</th>

</tr>";
        
        $mysqli = new mysqli("localhost","root","", "allatok");
        if($mysqli -> connect_error){
            echo "Hiba a csatlakozáskor";
            exit();
        }
        if($result = $mysqli ->query("select * from kutyik;")){
            
            while($row = $result->fetch_assoc() ){
                echo '<tr><td>' . $row['id'] . '</td>';
                echo '<td>' . $row['név'] . '</td>';
                 echo '<td>' . $row['fajta'] . '</td>';
                 echo '<td>' . $row['testsúly'] . '</td>';
                 echo '<td>' . $row['magasság'] . '</td>';
                  echo '<td>' . $row['születésnap'] . '</td></tr>';
            } 
             
            echo '</table>';
           
        }
        ?>
            </div>
    </body>
</html>
