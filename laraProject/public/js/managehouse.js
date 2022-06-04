
$(document).ready(function(){

    const min_date = $("#date-min");
    const max_date = $("#date-max");

    const type_house = $("#filter-type-house");
    toggleHouseType();


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
        toggleHouseType();
    });

    function toggleHouseType(){
        const selected = type_house.find(":selected").val();
        const apartment = $("#filter-type-apartment");
        const bed = $("#filter-type-bed");
        switch (parseInt(selected)){
            case 1:
                apartment.show("slow", "swing");
                bed.hide("slow", "swing");
                break;
            case 0: 
                apartment.hide("slow", "swing");
                bed.show("slow", "swing");
                break;
            default: break;
        }
    }
});