<section class="buy-back-form">
    <div class="buy-back-form-container">
        <div class="heading">
            <h2><?php echo $block['heading']; ?></h2>
        </div>
        <div class="subheading">
            <p><?php echo $block['subheading']; ?></p>
        </div>
        <div class="form-button">
            <button id="start-form">Get Started</button>
        </div>
    </div>
</section>

<div class="form-wrap">
    <?php echo $block['form']; ?>
</div>

<script>
    $(document).ready(function(){
       $(".form-button #start-form").click(function(){
        console.log("hello");
        $(".form-wrap").addClass("active");
        $(".form-wrap").fadeIn();
        $(".buy-back-form").fadeOut();
       });

       


        // $('.gform_page_footer input').click(function() {
        //     // Remove selected class from all divs
        //     $('.gchoice').removeClass('selected');
        // });

    })

    $(document).on('change', '.gfield_radio .gfield-choice-input[type="radio"]', function() {
        // Remove the class from all parent divs within this radio field
        $(this).closest('.gfield_radio').find('.gchoice').removeClass('selected');
        // Add class to the parent div of the selected input
        $(this).closest('.gchoice').addClass('selected');
    });



</script>

