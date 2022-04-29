$(document).ready(function () {

    // person drop down in checkout page
    $('#person').on('change', function () {
        $('#extra_bed').attr('disabled', false);
        let person = $(this).val();
        let extraBedVal = 0;

        if (person <= 2) {
            extraBedVal = 0;
            $('#extra_bed').attr('disabled', true);
        }
        else if (person > 2 && person <= 4) {
            extraBedVal = needExtraBed(person);
        }
        else if (person > 4 && person <= 6) {
            extraBedVal = 2;
        }
        else if (person > 6 && person <= 8) {
            extraBedVal = needExtraBed(person);
        }
        else if (person > 8 && person <= 10) {
            extraBedVal = 4;
        }
        else if (person > 10 && person <= 12) {
            extraBedVal = needExtraBed(person);
        }
        else if (person > 12 && person <= 14) {
            extraBedVal = 6;
        }
        else if (person > 14 && person <= 16) {
            extraBedVal = needExtraBed(person);
        }
        else if (person > 16 && person <= 18) {
            extraBedVal = 8;
        }
        else if (person > 18 && person <= 20) {
            extraBedVal = needExtraBed(person);
        }
        else if (person > 20 && person <= 22) {
            extraBedVal = 10;
        }
        else if (person > 22 && person <= 24) {
            extraBedVal = needExtraBed(person);
        }
        else {
            extraBedVal = 0;
        }

        $('#extra_bed option').remove();
        for (i = 0; i <= extraBedVal; i++) {

            // append to dropdown of extrabed
            $('#extra_bed').append('<option value="' + i + '">' + i + '</option>');
        }

        let extraBed = $('#extra_bed').val();
        let foodOption = $('#food').val();

        // calculate price 
        calculatePrice(foodOption, person, extraBed);
    });


    // food drop down in checkout page
    $('#food').on('change', function () {
        let person = $('#person').val();
        let extraBed = $('#extra_bed').val();
        let foodOption = $(this).val();

        if (person <= 2) {
            $('#extra_bed').attr('disabled', true);
        } else {
            $('#extra_bed').attr('disabled', false);
        }

        // calcute price
        calculatePrice(foodOption, person, extraBed);
    });

    // extra bed drop down in checkout page
    $('#extra_bed').on('change', function() {
        
        let person = $('#person').val();
        let extraBed = $(this).val();
        let foodOption = $('#food').val();

        // calcute price
        calculatePrice(foodOption, person, extraBed);
    });

    function needExtraBed(person) {
        let result = person / 2;
        if(!Number.isInteger(result)) {
            result = Math.round(result) - 1;
        }
        return result;
    }

    function calculatePrice(foodOption = "with_food", person = 2, extraBed = 0) {
        let perPersonPrice = 1000;
        let tentPrice;
        let extraBedPrice = extraBed * 500;
        let price;

        if (foodOption == "with_food") {
            perPersonPrice = 1500;
            person = person - extraBed;
            price = perPersonPrice * person;
            tentPrice = price + extraBedPrice;
        } else {
            price = perPersonPrice * person;
            tentPrice = price - extraBedPrice;
        }

        $('#tentPrice').val(tentPrice);
        $('.tentPrice').text(separator(tentPrice));
    }

    function separator(numb) {
        var str = numb.toString().split(".");
        str[0] = str[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return str.join(".");
    }
});