function checkDates(){
    const start_date = document.getElementById("start_date").value;
    const end_date = document.getElementById("end_date").value;
    if (start_date >= end_date){
        alert("La data d'inizio deve essere antecedente alla data di fine");
        return;
    }
    //TODO: apply filter
}