<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>erickSQL</title>
  <!-- Scripts -->
	<script src="./js/index.js"></script>
	<!-- Materializecss Compiled and minified CSS -->
	<link rel="stylesheet" href="./css/materialize.css" />
	<!-- Materializecss Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!-- Materializecss Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <!-- CSS -->
	<link rel="stylesheet" href="./css/index.css" />
	<link rel="stylesheet" href="./css/tree.css" />
  <link rel="stylesheet" href="./css/materializeChanges.css" />
  <!-- Metro CSS -->
  <link rel="stylesheet" href="./css/metro.css" />
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  
</head>

<body>
<?php
//Variables  
session_start();

$DataBase = "cpremier";
$Server = 'localhost';
if(isset($_POST['ok'])){
  $User = $_POST['usuario'];
  $Password = $_POST['contra'];
  $_SESSION['usuario'] = $User;
  $_SESSION['contra'] = $Password;
}
  $User = $_SESSION['usuario'] ;
  $Password = $_SESSION['contra'];
 

//conectarServidor y base de datos
$connection = new mysqli($Server,$User,$Password,$DataBase);


?>
  <form method="POST">
 
  <!-- NAV BAR -->
    <nav>
      <div class="nav-wrapper blue  darken-2"> <a href="#" class="brand-logo ml">erickSQL</a>
        <ul id="nav-mobile" class="right">
          <li> <button class="waves-effect waves-light btn blue darken-4 btn-small mb mr" type="submit" name="submit" onclick="getSelected()"><i class="material-icons">flash_on</i></button></li>
        </ul>
      </div>
    </nav>

  <section class="container-fluid">
    <div class="row">
    <!-- TREE -->
      <article class="col m3 scroll s12"> 
      <?php
        $sqlTABLES = "SELECT DISTINCT TABLE_NAME FROM information_schema.COLUMNS WHERE table_schema = 'cpremier';";
        $resultTables = $connection->query($sqlTABLES);
        $sqlCOLUMNS = 'SELECT column_name FROM information_schema.columns WHERE table_schema= "cpremier";';
        $resultColumns = $connection->query($sqlCOLUMNS);
        $row = mysqli_fetch_array($resultColumns);
        echo '<ul id="myUL"> <li> <span class="caret" onclick="insertPassword()" ><i class="material-icons pink-text left">kitchen</i>Data Bases</span > <ul class="nested"> <li> <span class="caret" ><i class="material-icons pink-text text-darken-4 left" >kitchen</i >Cpremier</span > <ul class="nested"> <li> <span class="caret" ><i class="material-icons blue-text left">border_all</i >Tables</span > <ul class="nested"> <li> <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >'.mysqli_fetch_array($resultTables)[0].'</span > <ul class="nested"> <li> <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > <ul class="nested"> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Trabajador </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Edificio </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Fecha_Inicio </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Num_Dias </li> </ul> </li> </ul> </li> <li> <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >'.mysqli_fetch_array($resultTables)[0].'</span > <ul class="nested"> <li> <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > <ul class="nested"> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Edificio </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Direccion </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tipo </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nivel_Calidad </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Categoria </li> </ul> </li> </ul> </li> <li> <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >'.mysqli_fetch_array($resultTables)[0].'</span > <ul class="nested"> <li> <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > <ul class="nested"> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Trabajador </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nombre </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tarifa_Hr </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tipo_De_Oficio </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Supv </li> </ul> </li> </ul> </li> </ul> </li> </ul> </li> </ul> </li> </ul> ';
      ?>
        </article>
    <!-- TEXTAREA INPUT -->
      <article class="col m9 s12">
        <textarea id="input" name="textarea" oninput="highLight()" class="z-depth-1"></textarea>
      </article>
    </div>

    <div class="row">
    <!-- OUTPUT -->
      <div class="col m12 scroll-output">
        <?php
        if(isset($_POST['submit'])){
          $sql = $_POST['textarea'];
          
          if($sql!=null){
            //Hacer los <tr>
            $splited = explode(" ",$sql);
            if($splited){
              

            echo "<table class='striped'>"; 
            
            }
            $rows = 0;
            if ($result = $connection->query($sql)) {
              if($connection->query($sql)){//Validar otra vez por si hace una consulta que de TRUE o FALSE SIN resultados como DROP TABLE
                while($row = mysqli_fetch_array($result)){
                  $rows++;
                  $columns = count($row)/2;
                  echo "<tr>";
                  for($i=0;$i<$columns;$i++){
                    echo "<td>" . $row[$i] . "</td>";
                  }
                  echo "</tr>";
                }
              }
              
              echo "</table>";
              echo "<div class='alert alert-success'>Success: " . $rows . " rows showed </div>";
            }else{
              echo "<div class='alert alert-danger'>Syntax Error: ".$sql."</div>";
            }
          }
        }
        mysqli_close($connection);
        ?>
      </div>
    </div>
  </section>
  <!-- TREE SCRIPT -->
  <script>
    var toggler = document.getElementsByClassName("caret");
    var i;

    for (i = 0; i < toggler.length; i++) {
      toggler[i].addEventListener("click", function() {
        this.parentElement
          .querySelector(".nested")
          .classList.toggle("active");
        this.classList.toggle("caret-down");
      });
    }
  </script>
  </form>
 

</body>
</html>