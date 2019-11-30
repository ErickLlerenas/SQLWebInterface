<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
    <!-- Materializecss Compiled and minified CSS -->
	<link rel="stylesheet" href="./css/materialize.css" />
	<!-- Materializecss Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!-- Materializecss Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <link rel="stylesheet" href="./css/index.css">

    


<script>
     document.addEventListener('DOMContentLoaded', function () {
            var Modalelem = document.querySelector('.modal');
            var instance = M.Modal.init(Modalelem);
            instance.open();
    });
    
</script>
</head>
<body>

<form method="POST" action="mysql.php">
 <!-- Modal Structure -->
 <div id="modal1" class="modal center-align">
    <div class="modal-content">
      <h4>Log in</h4>
      <article class="container">
        <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
          <input id="last_name" type="text" class="validate" name="usuario"/>
          <label for="last_name" >User</label>
        </div>
        <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
          <input id="password" type="password" class="validate" name="contra"/> 
          <label for="password" >Password</label>
        </div>
    <div class="modal-footer">
      <button class="modal-close waves-effect waves-light btn center-align" name="ok" type="submit">Log in</button>
    </div>
    </article>
    </div>

  </div>
  </form>
</body>
</html>