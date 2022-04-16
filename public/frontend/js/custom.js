$(document).ready(function () {
    // person drop down in checkout page
    $('#person').on('change', function() {
        // get person
        let person = $(this).val();
        
        if(person <= 4) {
            $('#tent').val(1, true);
        }

        if(person > 4 && person <= 8) {
            $('#tent').val(2, true);
        }

        if(person > 8 && person <= 12) {
            $('#tent').val(3, true);
        }

        if(person > 12 && person <= 16) {
            $('#tent').val(4, true);
        }

        if(person > 16 && person <= 20) {
            $('#tent').val(5, true);
        }

        if(person > 20 && person <= 24) {
            $('#tent').val(6, true);
        }

    });

    // tent drop down in checkout page
    $('#tent').on('change', function() {
        // get tent value
        let tent = $(this).val();
        
        // get person value
        let person = $('#person').val();

        if(tent == 1) {
           if(person > 4) {
               alert("1 tent more then 4 persons not allowed");
               $('#person').val(4, true);
           }
        }

        if(tent == 2) {
            if(person > 8) {
                alert("2 tents more then 8 persons not allowed");
                $('#person').val(8, true);
            }

            if(person <= 1) {
                alert(person +" person cannot select "+tent+" tents");
                $(this).val(person, true);
            }
        }

        if(tent == 3) {
            if(person > 12) {
                alert("3 tents more then 12 persons not allowed");
                $('#person').val(12, true);
            }

            if(person <= 2) {
                alert(person +" persons cannot select "+ tent +" tents");
                $(this).val(person, true);
            }
        }

        if(tent == 4) {
            if(person > 16) {
                alert("4 tents more then 16 persons not allowed");
                $('#person').val(16, true);
            }

            if(person <= 3) {
                alert(person +" persons cannot select "+ tent +" tents");
                $(this).val(person, true);
            }
        }

        if(tent == 5) {
            if(person > 20) {
                alert("5 tents more then 20 persons not allowed");
                $('#person').val(20, true);
            }

            if(person <= 4) {
                alert(person +" persons cannot select "+ tent +" tents");
                $(this).val(person, true);
            }
        }

        if(tent == 6) {
            if(person <= 5) {
                alert(person +" persons cannot select "+tent+" tents");
                $(this).val(person, true);
            }
        }

    });

    // food drop down in checkout page
    $('#food').on('change', function() {
        alert("hii food change worked");
    });
});