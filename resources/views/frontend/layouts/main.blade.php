@include('frontend.layouts.header')
@yield('main-section')
@include('frontend.layouts.footer')

<script type="text/javascript">
    $(document).ready(function() {
        $("select.single_tent_with_food_person").on('change',function(e){

            var person = $(this).val();
            var convert_person_to_int = parseInt(person);

            var price = $(".single_tent_with_food_price").val();
             if(convert_person_to_int==1){

               $(".single_tent_with_food_price").html('<option value="2000" readonly="">2000</option>');
             }else{
                $(".single_tent_with_food_price").html('<option value="2500" readonly="">2500</option>');
             }
        });

         $("select.single_tent_without_food_person").on('change',function(e){

            var person = $(this).val();
            var convert_person_to_int = parseInt(person);

            var price = $(".single_tent_without_food_price").val();
            if(convert_person_to_int==1){

            $(".single_tent_without_food_price").html('<option value="2000" readonly="">2000</option>');
            }else{
                $(".single_tent_without_food_price").html('<option value="2500" readonly="">2500</option>');
            }
        });

        $("select.grouped_with_food_person").on('change',function(e){

            var person = $(this).val();
            var convert_person_to_int = parseInt(person);

            var price = $(".grouped_tent_with_food_price").val();
            if(convert_person_to_int==5){

            $(".grouped_tent_with_food_price").html('<option value="5000" readonly="">5000</option>');
            $(".grouped_with_food_tent").html('<option value="2">2</option>');
            }else{
                $(".grouped_tent_with_food_price").html('<option value="4500" readonly="">4500</option>');
                $(".grouped_with_food_tent").html('<option value="1">1</option>');
            }
        });

        $("select.grouped_tent_without_food_person").on('change',function(e){

            var person = $(this).val();
            var convert_person_to_int = parseInt(person);
            var price = $(".grouped_tent_without_food_price").val();
            if(convert_person_to_int==5){

                $(".grouped_tent_without_food_price").html('<option value="5000" readonly="">5000</option>');
                $(".grouped_tent_without_food_tent").html('<option value="2">2</option>');
            }else{
                $(".grouped_tent_without_food_price").html('<option value="4500" readonly="">4500</option>');
                $(".grouped_tent_without_food_tent").html('<option value="1">1</option>');
            }
        });


    });

     //set today date
   var today_date =  document.getElementById('check_in').valueAsDate = new Date();

    //set next date
 var next_Day = new Date();
 next_Day.setDate(next_Day.getDate()+1);
 document.getElementById('check_out').valueAsDate = next_Day;

</script>

