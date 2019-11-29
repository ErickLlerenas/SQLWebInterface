<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>elleSQL</title>
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
session_start();

$Server = 'localhost:3307';
if(isset($_POST['ok'])){
  $User = $_POST['usuario'];
  $Password = $_POST['contra'];
  $_SESSION['usuario'] = $User;
  $_SESSION['contra'] = $Password;
}
  $User = $_SESSION['usuario'];
  $Password = $_SESSION['contra'];
 $DataBase="cpremier";

//conectarServidor y base de datos
$conn_string = "host=localhost port=5432 dbname='CPremier' user=postgres password=molly1603 ";
 
// establecemos una conexion con el servidor postgresSQL
$connection = pg_connect($conn_string);
 
if(isset($_POST['submit'])){
  $sql = $_POST['textarea'];

  if($sql=="use bsiabuc"){
    pg_close($connection);

      header('Location: ./sqI.php');
    }
     
}


//Regresar al Login en caso de Usuario Incorrecto

?>
  <form method="POST">
  <!-- NAV BAR -->
    <nav>
      <div class="nav-wrapper blue  darken-2"> <a href="#" class="brand-logo ml">elleSQL</a>
        <ul id="nav-mobile" class="right">
          <li> <button class="waves-effect waves-light btn blue darken-4 btn-small mb mr" type="submit" name="submit" onclick="getSelected()"><i class="material-icons">flash_on</i></button></li>
        </ul>
      </div>
    </nav>

  <section class="container-fluid">
    <div class="row">
    <!-- TREE -->
      <article class="col m4 scroll s12"> 
      <?php    
        echo '
        <ul id="myUL"> 
          <li> 
            <span class="caret"><i class="material-icons pink-text left">kitchen</i>Servers</span > 
            <ul class="nested"> 
              <li> 
                <span class="caret" ><i class="material-icons pink-text text-darken-4 left" >kitchen</i >mySQL</span >
                <ul class="nested"> 
                  <li> 
                    <span class="caret" ><i class="material-icons blue-text left">kitchen</i >databases</span > 
                    <ul class="nested"> 
                      <li>
                        <span class="caret" ><i class="material-icons blue-text left">kitchen</i >cpremier</span > 
                        <ul class="nested">
                          <li>
                            <span class="caret"><i class="material-icons pink-text left">border_all</i>tables/views</span > 
                            <ul class="nested">
                              <li> 
                                <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >asignacion</span > 
                                <ul class="nested"> 
                                  <li> 
                                    <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                                    <ul class="nested"> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Trabajador </li>
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Edificio </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Fecha_Inicio </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Num_Dias </li> 
                                    </ul> 
                                  </li>
                                </ul> 
                              </li> 
                              <li> 
                                <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >edificio</span > 
                                <ul class="nested"> 
                                  <li> 
                                    <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                                    <ul class="nested"> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Edificio </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Direccion </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tipo </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nivel_Calidad </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Categoria </li> 
                                    </ul> 
                                  </li> 
                                </ul> 
                              </li> 
                              <li> 
                                <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >trabajador</span > 
                                <ul class="nested"> 
                                  <li> 
                                    <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                                    <ul class="nested"> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Trabajador </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nombre </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tarifa_Hr </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tipo_De_Oficio </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Supv </li> 
                                    </ul>
                                  </li> 
                                </ul> 
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <!-- Bsiabuc -->
                      <li>
                        <span class="caret" ><i class="material-icons blue-text left">kitchen</i >bsiabuc</span > 
                        <ul class="nested">
                          <li>
                            <span class="caret"><i class="material-icons pink-text left">border_all</i>tables/views</span > 
                            <ul class="nested">
                              <li> 
                                <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >bibliotecas</span > 
                                <ul class="nested"> 
                                  <li> 
                                    <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                                    <ul class="nested"> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Bib_No </li>
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nombre </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nombre corto </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Director </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Telefono </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Email </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Campus_No </li> 
                                    </ul> 
                                  </li>
                                </ul> 
                              </li> 
                              <li> 
                                <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >ejemplares</span > 
                                <ul class="nested"> 
                                  <li> 
                                    <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                                    <ul class="nested"> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Ficha_No </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >NumAdqui </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >FechaIngreso </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Bib_No </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Volumen </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Ejemplar </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tomo </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Accesible </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Escuela_No </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >FechaMod </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Analista </li> 
                                    </ul> 
                                  </li> 
                                </ul> 
                              </li> 
                              <li> 
                                <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >escuelas</span > 
                                <ul class="nested"> 
                                  <li> 
                                    <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                                    <ul class="nested"> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Escuela_No </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nombre </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nombre Corto </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Responsable </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >e-mail </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Bib_No </li> 
                                    </ul>
                                  </li> 
                                </ul> 
                              </li>
                              <li> 
                                <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >fichas</span > 
                                <ul class="nested"> 
                                  <li> 
                                    <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                                    <ul class="nested"> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Ficha_No </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Fecha </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Fecha_Mod</li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >DatosFijos </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >EtiquetasMARC </li>
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >TipoMaterial</li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >ISBN</li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Titulo</li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Autor </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Clasificacion </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Ficha_No </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Estatus </li> 
                                      <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Coleccion_No</li> 
                                    </ul>
                                  </li> 
                                </ul> 
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul> 
                  </li> 
                </ul> 
              </li> 
              <li> 
              <span class="caret" ><i class="material-icons pink-text text-darken-4 left" >kitchen</i >postgreSQL</span >
              <ul class="nested"> 
                <li> 
                  <span class="caret" ><i class="material-icons blue-text left">kitchen</i >databases</span > 
                  <ul class="nested"> 
                    <li>
                      <span class="caret" ><i class="material-icons blue-text left">kitchen</i >cpremier</span > 
                      <ul class="nested">
                        <li>
                          <span class="caret"><i class="material-icons pink-text left">border_all</i>tables/views</span > 
                          <ul class="nested">
                            <li> 
                              <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >asignacion</span > 
                              <ul class="nested"> 
                                <li> 
                                  <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                                  <ul class="nested"> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Trabajador </li>
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Edificio </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Fecha_Inicio </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Num_Dias </li> 
                                  </ul> 
                                </li>
                              </ul> 
                            </li> 
                            <li> 
                              <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >edificio</span > 
                              <ul class="nested"> 
                                <li> 
                                  <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                                  <ul class="nested"> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Edificio </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Direccion </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tipo </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nivel_Calidad </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Categoria </li> 
                                  </ul> 
                                </li> 
                              </ul> 
                            </li> 
                            <li> 
                              <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >trabajador</span > 
                              <ul class="nested"> 
                                <li> 
                                  <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                                  <ul class="nested"> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Trabajador </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nombre </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tarifa_Hr </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tipo_De_Oficio </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Id_Supv </li> 
                                  </ul>
                                </li> 
                              </ul> 
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <!-- Bsiabuc -->
                    <li>
                      <span class="caret" ><i class="material-icons blue-text left">kitchen</i >bsiabuc</span > 
                      <ul class="nested">
                        <li>
                          <span class="caret"><i class="material-icons pink-text left">border_all</i>tables/views</span > 
                          <ul class="nested">
                            <li> 
                              <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >bibliotecas</span > 
                              <ul class="nested"> 
                                <li> 
                                  <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                                  <ul class="nested"> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Bib_No </li>
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nombre </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nombre corto </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Director </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Telefono </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Email </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Campus_No </li> 
                                  </ul> 
                                </li>
                              </ul> 
                            </li> 
                            <li> 
                              <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >ejemplares</span > 
                              <ul class="nested"> 
                                <li> 
                                  <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                                  <ul class="nested"> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Ficha_No </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >NumAdqui </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >FechaIngreso </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Bib_No </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Volumen </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Ejemplar </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Tomo </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Accesible </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Escuela_No </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >FechaMod </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Analista </li> 
                                  </ul> 
                                </li> 
                              </ul> 
                            </li> 
                            <li> 
                              <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >escuelas</span > 
                              <ul class="nested"> 
                                <li> 
                                  <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                                  <ul class="nested"> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Escuela_No </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nombre </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Nombre Corto </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Responsable </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >e-mail </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Bib_No </li> 
                                  </ul>
                                </li> 
                              </ul> 
                            </li>
                            <li> 
                              <span class="caret" ><i class="material-icons blue-text text-darken-4 left" >border_all</i >fichas</span > 
                              <ul class="nested"> 
                                <li> 
                                  <span class="caret" ><i class="material-icons purple-text left" >view_module </i >Columns</span > 
                                  <ul class="nested"> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Ficha_No </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Fecha </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Fecha_Mod</li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >DatosFijos </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >EtiquetasMARC </li>
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >TipoMaterial</li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >ISBN</li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Titulo</li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Autor </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Clasificacion </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Ficha_No </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Estatus </li> 
                                    <li> <i class="material-icons purple-text text-darken-3 left" >view_list </i >Coleccion_No</li> 
                                  </ul>
                                </li> 
                              </ul> 
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul> 
                </li> 
              </ul> 
            </li>
            </ul> 
          </li> 
        </ul> ';
      ?>
        </article>
    <!-- TEXTAREA INPUT -->
      <article class="col m8 s12">
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

            //Aqui separa sentencias por ;
            $comands = explode(";",$sql);

            //La última posición del array
            if(count($comands)>2){
              $sql = $comands[count($comands)/2];
            }
            echo "<table class='striped'>"; 
            $rows = 0;
            if($sql!='use cpremier' && $sql!='use bsiabuc'){
            if ($result = pg_query($connection, $sql)) {
              if(pg_query($connection,$sql)){//Validar otra vez por si hace una consulta que de TRUE o FALSE SIN resultados como DROP TABLE
                while($row = pg_fetch_array($result)){
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
        }
        pg_close($connection);
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
