function getText(){
    var textarea = document.getElementById("input").value;
    
    if(textarea==="SELECT * FROM Cpremier;"){
        textarea = "DATOS DE LA BASE DE DATOS XD"
    }
    document.getElementById("output").value = textarea;
}
function insertPassword(){ 
    prompt("Please insert password .l.");
}
    