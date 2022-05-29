$(document).ready(function(){
    const fo = $("#fo");

    const min_price = $("#prize-min");
    const max_price = $("#prize-max");

    const min_date = $("#date-min");
    const max_date = $("#date-max");

    const type_house = $("#filter-type-house");

    fo.click(function(){
        const form = $("#createHouse");
        if (form.is(":visible")){
            form.hide("slow", "swing");
            fo.text("Mostra Filtri");
        }else{
            form.show("slow", "swing");
            fo.text("Nascondi Filtri");
        }
    });

    $(document).on('input', '#prize-min', function() {
        if (min_price.val() >= parseInt(max_price.val())){
            $("#filter-error-prices").text("Il prezzo minimo deve essere inferiore al prezzo massimo");
        }else{
            $("#filter-error-prices").text("");
        }
    });

    $(document).on('input', '#prize-max', function() {
        if (max_price.val() <= parseInt(min_price.val())){
            $("#filter-error-prices").text("Il prezzo minimo deve essere inferiore al prezzo massimo");
        }else{
            $("#filter-error-prices").text("");
        }
    });

    min_date.change(function() {
        if(new Date(min_date.val()) > new Date(max_date.val())){
            $("#filter-error-dates").text("La data d'inizio deve essere antecedente alla data di fine");
        }else{
            $("#filter-error-dates").text("");
        }
    });

    max_date.change(function() {
        if(new Date(min_date.val()) > new Date(max_date.val())){
            $("#filter-error-dates").text("La data d'inizio deve essere antecedente alla data di fine");
        }else{
            $("#filter-error-dates").text("");
        }
    });

    type_house.change(function() {
        const selected = type_house.find(":selected").val();
        const apartment = $("#filter-type-apartment");
        const bed = $("#filter-type-bed");
        switch (parseInt(selected)){
            case 0:
                apartment.show("slow", "swing");
                bed.show("slow", "swing");
                break;
            case 1:
                apartment.show("slow", "swing");
                bed.hide("slow", "swing");
                break;
            case 2: 
                apartment.hide("slow", "swing");
                bed.show("slow", "swing");
                break;
            default: break;
        }
    });


    var slidermin = document.getElementById("prize-min");
    var outputmin = document.getElementById("min");
    var slidermax = document.getElementById("prize-max");
    var outputmax = document.getElementById("max");
    outputmin.innerHTML = slidermin.value;
    outputmax.innerHTML = slidermax.value;
    slidermin.oninput = function() {
        outputmin.innerHTML = this.value;
    }
    slidermax.oninput = function() {
        outputmax.innerHTML = this.value;
    }

    /*function setDate(isMin){
        if (isMin){
            const maxdate = new Date(max_date.val());
            const newmindate = new Date();
            newmindate.setDate(maxdate.getDate() - 1);
            console.log(newmindate.toISOString().split('T')[0]);
            min_date.val(newmindate.toISOString().split('T')[0]);
        }else{

        }
    }*/
});