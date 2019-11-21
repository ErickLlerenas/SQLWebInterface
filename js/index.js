function insertPassword(){ 
    prompt("Please insert password: ");
}

function cambiar(){
    var sql = document.getElementById('input').value;
    var split = sql.split(" ");

    for(i = 0; i<split.length;i++){
        if(split[i].toUpperCase() == "SELECT"){
            var reservedWord = document.getElementById('input').value.replace(split[i],"SELECT");
            document.getElementById('input').value = reservedWord;
        }

        if(split[i].toUpperCase() == "FROM"){
            var reservedWord = document.getElementById('input').value.replace(split[i],"FROM");
            document.getElementById('input').value = reservedWord;
        }

        if(split[i].toUpperCase() == "COUNT"){
            var reservedWord = document.getElementById('input').value.replace(split[i],"COUNT");
            document.getElementById('input').value = reservedWord;
        }

        if(split[i].toUpperCase() == "DROP"){
            var reservedWord = document.getElementById('input').value.replace(split[i],"DROP");
            document.getElementById('input').value = reservedWord;
        }

        if(split[i].toUpperCase() == "INNER"){
            var reservedWord = document.getElementById('input').value.replace(split[i],"INNER");
            document.getElementById('input').value = reservedWord;
        }
        if(split[i].toUpperCase() == "JOIN"){
            var reservedWord = document.getElementById('input').value.replace(split[i],"JOIN");
            document.getElementById('input').value = reservedWord;
        }

        if(split[i].toUpperCase() == "WHERE"){
            var reservedWord = document.getElementById('input').value.replace(split[i],"WHERE");
            document.getElementById('input').value = reservedWord;
        }

        if(split[i].toUpperCase() == "GROUP"){
            var reservedWord = document.getElementById('input').value.replace(split[i],"GROUP");
            document.getElementById('input').value = reservedWord;
        }

        if(split[i].toUpperCase() == "BY"){
            var reservedWord = document.getElementById('input').value.replace(split[i],"BY");
            document.getElementById('input').value = reservedWord;
        }

        if(split[i].toUpperCase() == "TRABAJADOR"){
            var reservedWord = document.getElementById('input').value.replace(split[i],"Trabajador");
            document.getElementById('input').value = reservedWord;
        }

        if(split[i].toUpperCase() == "ASIGNACION"){
            var reservedWord = document.getElementById('input').value.replace(split[i],"Asignacion");
            document.getElementById('input').value = reservedWord;
        }
        if(split[i].toUpperCase() == "EDIFICIO"){
            var reservedWord = document.getElementById('input').value.replace(split[i],"Edificio");
            document.getElementById('input').value = reservedWord;
        }
    }
    
}
