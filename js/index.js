function insertPassword(){ 
    prompt("Please insert password: ");
}

function highLight(){
    keyWords = ["SELECT","FROM","WHERE","BETWEEN","LIKE","FALSE","NULL","FROM","TRUE","NOT","COUNT","DROP","INNER", "JOIN","GROUP", "BY","DROP","trabajador","edificio","asignacion","bibliotecas","ejemplares","escuelas","fichas"];
    var sql = document.getElementById('input').value;
    var words = sql.split(/[\s,]+/)

    words.forEach(word => {
        keyWords.forEach(key=>{
            if(word.toUpperCase()==key || word.toLowerCase()==key){
                var textarea = document.getElementById('input').value.replace(word,key);
                document.getElementById('input').value = textarea;
            }
        })  
    });  


}

    
function getSelected(){
    if(window.getSelection().toString()!=""){
        document.getElementById('input').value = window.getSelection().toString();
    }
}


    