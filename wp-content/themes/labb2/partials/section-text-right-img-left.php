<?php
 $image = get_sub_field('bild_vanster');
?>
<section class="container-fluid">
    <div class="row text-right-img-left">
        <div  class="img-left parallax col-6" style="background-image: url(<?php echo $image['url'];?>);" ></div>
        <div class="col-6 d-flex align-items-center">
            <div>
                <h1 class="display-4"><?php the_sub_field('text_hoger_rubrik')?></h1>
                <p><?php the_sub_field('text_hoger')?></p>
            </div>
        </div>
    </div>
</section>