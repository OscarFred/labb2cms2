<?php
if ( have_rows( 'sektioner' ) ) {
        while ( have_rows( 'sektioner' ) ) {
                the_row();
                if ( get_row_layout() == 'hero') {
                                get_template_part('partials/section-hero');
                }       elseif ( get_row_layout() == 'brytnings_bild' ) {
                                get_template_part( 'partials/section-brytningsbild');        
                }       elseif ( get_row_layout() == 'karusell' ) {
                                get_template_part( 'partials/section-karusell');        
                }       elseif ( get_row_layout() == 'text_med_rubrik' ) {
                                get_template_part( 'partials/section-text-med-rubrik');        
                }       elseif ( get_row_layout() == 'banner' ) {
                        get_template_part( 'partials/section-banner');        
                }       elseif ( get_row_layout() == 'text_vanster_bild_hoger' ) {
                        get_template_part( 'partials/section-text-left-img-right');        
                }       elseif ( get_row_layout() == 'text_hoger_bild_vanster' ) {
                        get_template_part( 'partials/section-text-right-img-left');        
                }



        }
}
?>