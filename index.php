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

</head>

<body>
  <form method="POST">
  <!-- NAV BAR -->
    <nav>
      <div class="nav-wrapper blue  darken-2"> <a href="#" class="brand-logo ml">erickSQL</a>
        <ul id="nav-mobile" class="right">
          <li> <button class="waves-effect waves-light btn blue darken-4 btn-small mb mr" type="submit" name="submit"><i class="material-icons">flash_on</i></button></li>
        </ul>
      </div>
    </nav>

  <section class="container-fluid">
    <div class="row">
    <!-- TREE -->
      <article class="col m3 scroll s12"> 
        <ul id="myUL"> <li> <span class="caret" onclick="insertPassword()" ><i class="material-icons pink-text left">kitchen</i>Data Bases</span > <ul class="nested"> <li> <span class="caret" ><i class="material-icons pink-text text-darken-4 left" >kitchen</i >Cpremier</span > <ul class="nested"> <li> <span class="caret" ><i class="material-icons blue-text left">border_all</i >Tables</span > <ul class="nested"> <li> <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >Asignacion</span > <ul class="nested"> <li> <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > <ul class="nested"> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Trabajador </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Edificio </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Fecha_Inicio </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Num_Dias </li> </ul> </li> </ul> </li> <li> <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >Edificio</span > <ul class="nested"> <li> <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > <ul class="nested"> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Edificio </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Direccion </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tipo </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nivel_Calidad </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Categoria </li> </ul> </li> </ul> </li> <li> <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >Trabajador</span > <ul class="nested"> <li> <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > <ul class="nested"> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Trabajador </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nombre </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tarifa_Hr </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tipo_De_Oficio </li> <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Supv </li> </ul> </li> </ul> </li> </ul> </li> </ul> </li> </ul> </li> </ul> 
      </article>
    <!-- TEXTAREA INPUT -->
      <article class="col m9 s12">
        <textarea id="input" name="textarea" oninput="cambiar()"></textarea>
      </article>
    </div>

    <div class="row">
    <!-- OUTPUT -->
      <div class="col m12 scroll-output">
        <?php
        //Variables
        $Server = 'localhost';
        $User = 'root';
        $Password = '';
        $DataBase = 'cpremier';

        //conectarServidor y base de datos
        $connection = new mysqli($Server,$User,$Password,$DataBase);

        if(isset($_POST['submit'])){
          $sql = $_POST['textarea'];

          if($sql!=null){
            //Hacer los <tr>
            $splited = explode(" ",$sql);
            if($splited){
              //Seleccionar de information_schema los nombres de la tabla Trabajador
              $sqltr = null;
              for($i=0;$i<count($splited);$i++){
                if($splited[$i] == "Trabajador" || $splited[$i] == "Trabajador;"){
                  $sqltr = "SELECT column_name FROM information_schema.columns WHERE table_schema= 'cpremier' AND table_name = 'Trabajador'";
                }
              }
              //Seleccionar de information_schema los nombres de la tabla Edificio
              for($i=0;$i<count($splited);$i++){
                if($splited[$i] == "Edificio" || $splited[$i] == "Edificio;"){
                  $sqltr = "SELECT column_name FROM information_schema.columns WHERE table_schema= 'cpremier' AND table_name = 'Edificio';";
                }
              }
              //Seleccionar de information_schema los nombres de la tabla Asignacion
              for($i=0;$i<count($splited);$i++){
                if($splited[$i] == "Asignacion" || $splited[$i] == "Asignacion;"){
                  $sqltr = "SELECT column_name FROM information_schema.columns WHERE table_schema= 'cpremier' AND table_name = 'Asignacion';";
                }
              }

            echo "<table class='striped'>"; 
            echo "<tr>";
              if($sqltr!=null){
                $resultado = $connection->query($sqltr);

                while($row = mysqli_fetch_array($resultado)){
                  $columnas = count($row)/2;
                  for($i=0;$i<$columnas;$i++){
                    echo "<th>". $row[$i] . "</th>";
                  }
                }
              }
              echo "</tr>";
            }
            $rows = 0;
            $result = $connection->query($sql);
            
              while($row = mysqli_fetch_array($result)){
                $rows++;
                $columns = count($row)/2;
                echo "<tr>";
                for($i=0;$i<$columns;$i++){
                  echo "<td>" . $row[$i] . "</td>";
                }
                echo "</tr>";
              }
          echo "</table>";
          
          //ALERT
          echo "<div class='alert alert-success'>";
          echo $rows . " rows showed";
          echo "</div>";
          }
        }
        mysqli_close($connection);
        ?>
      </div>
    </div>
  </section>
  <!-- Tree -->
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