@include('frontend.layouts.header')
@yield('main-section')
@include('frontend.layouts.footer')

<script type="text/javascript">
    $(document).ready(function() {
        $(".single_tentdetails_with_food_person").on('change',function(e){

            var click = $(this).val();
           var single_tentdetails_with_food = $(".single_tentdetails_with_food").val();

            console.log(click);

            console.log(single_tentdetails_with_food);
        });
    });
</script>
