is_lessee = true;
function showRad1(){
    elementsPri = document.getElementsByClassName("input_lessee");
    for (var i = 0, len = elementsPri.length; i < len; i++){
        element = elementsPri[i];
        element.style.display = "block";
    }
    /*elements = document.getElementsByClassName("input_locatore");
    for (var i = 0, len = elements.length; i < len; i++){
        element = elements[i];
        element.style.display = "none";
    }*/
    elements = document.getElementsByClassName("error_message_private");
    for (var i = 0, len = elements.length; i < len; i++){
        element = elements[i];
        element.style.display = "block";
    }
    document.getElementById("desc_locatario").style.display = "block";
    document.getElementById("desc_locatore").style.display = "none";
}
function showRad2(){
    elementsPri = document.getElementsByClassName("input_lessee");
    for (var i = 0, len = elementsPri.length; i < len; i++){
        element = elementsPri[i];
        element.style.display = "none";
    }
    document.getElementById("desc_locatario").style.display = "none";
    document.getElementById("desc_locatore").style.display = "block";
    /*elements = document.getElementsByClassName("input_locatore");
    for (var i = 0, len = elements.length; i < len; i++){
        element = elements[i];
        element.style.display = "block";
        document.getElementById("desc_locatario").style.display = "none";
        document.getElementById("desc_locatore").style.display = "block";
    }*/
    elementsPri = document.getElementsByClassName("error_message_private");
    for (var i = 0, len = elementsPri.length; i < len; i++){
        element = elementsPri[i];
        element.style.display = "none";
    }
}

function radioChangedValue(radio_id){
    if (radio_id === "rad1"){
        is_lessee = true;
        showRad1();
    }else if(radio_id === "rad2"){
        is_lessee = false;
        showRad2();
    }
}

function prepare_createUser(){
    var terms_checkbox = document.getElementById('terms_checkbox').checked;
    var privacy_checkbox = document.getElementById('privacy_checkbox').checked;
    var name = document.getElementById('name').value.trim();
    var surname = document.getElementById('surname').value.trim();
    var email = document.getElementById('email').value.trim().toLowerCase();
    var password = document.getElementById('password').value.trim();
    var repeat_password = document.getElementById('repeat_password').value.trim();
    
    if (password !== repeat_password){
        alert('Le password devono corrispondere tra loro');
        return;
    }
    if (name === "" || surname === "" ){
        alert('Completa tutti i campi');
        return;
    }
    if (!terms_checkbox || !privacy_checkbox){
        alert('Accetta i Termini e le Condizioni e la Privacy Policy');
        return;
    }
    if (is_lessee){
        var gender = document.getElementById('gender').value.trim();
        var age = document.getElementById('age').value.trim();
        
        if (age === "" || parseInt(age) < 18){
            alert('I minorenni non possono registrarsi');
            return;
        }
            
        if (parseInt(gender) <= 0){
            alert('Seleziona un genere');
            return;
        }
        //createPrivateUser(email, password_locatario, name_locatario,cognome_locatario, eta_locatario);
    }else{
        //createCompanyUser(email_locatore, password, name_locatore,cognome_locatore );
    }
}

document.addEventListener("DOMContentLoaded", function(){
    showRad1();
});