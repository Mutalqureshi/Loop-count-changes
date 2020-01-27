<?php
    if ( $counter % 3 == 1 ) { // use this line for the first and the fourth iteration
        echo '<div class="layer">';
    }
        if ( $counter % 6 == 1 ) { // use this line for the first iteration only
            echo '<div class="large left">';
        } else if ( $counter % 6 == 2 ) { // use this line for the second iteration only
            echo '<div class="small right">';
        } else if ( $counter % 6 == 4 ) { // use this line for the fourth iteration only
            echo '<div class="small left">';
        } else if ( $counter % 6 == 5 ) { // use this line for the fifth iteration only
            echo '<div class="large right">';
        }
        //nothing to do for the sixth and the third iteration
        // the item is the same all the time
?>
        <div class="item">
            <?php the_title(); ?>
            <?php the_content(); ?>
        </div><!--item-->
<?php
        if ( $counter % 6 == 1 || $counter % 6 == 3 || $counter % 6 == 5 || $counter % 6 == 0 ) { // use this line everytime you close a subblock
            echo '</div>';
        }
    if ( $counter++ % 3 == 0 ) { // use this line for the third and the sixth iteration
        echo '</div>';
    }
?>



-------------------------------


                                if( have_rows('gallery_slide') ):
                                $in = 0;
                                while ( have_rows('gallery_slide') ) : the_row(); 
                                $in++;
                        $html .="<div class='slide clearfix'>";
                                /*----for image-------*/
                                $bigimage = get_sub_field('bigimage');
                                $horizontal_image = get_sub_field('horizontal_image');
                                $horizontal_image_2 = get_sub_field('horizontal_image_2');
                                $square_image = get_sub_field('square_image');
                                $square_image_2= get_sub_field('square_image_2');

        if ($in % 2 == 0){
                          
                                $image_list = array(
                                    array($horizontal_image['sizes']['gallery-horizontal'], $horizontal_image['sizes']['large'] , 'hor-40'), 
                                    array($square_image_2['sizes']['gallery-square'], $square_image_2['sizes']['large'] , 'square'),
                                    array($bigimage['sizes']['gallery-vertical'], $bigimage['sizes']['large'] ,'width-75 fl-right'),
                                    array($square_image['sizes']['gallery-square'], $square_image['sizes']['large'] , 'square'), 
                                    array($horizontal_image_2['sizes']['gallery-horizontal'], $horizontal_image_2['sizes']['large'] , 'hor-40'), 
                                );
        }
        else{
              $image_list = array(
                                    array($bigimage['sizes']['gallery-vertical'], $bigimage['sizes']['large'] ,'width-75'),
                                    array($horizontal_image['sizes']['gallery-horizontal'], $horizontal_image['sizes']['large'] , 'hor-40'), 
                                    array($square_image_2['sizes']['gallery-square'], $square_image_2['sizes']['large'] , 'square'), 
                                    array($square_image['sizes']['gallery-square'], $square_image['sizes']['large'] , 'square'), 
                                    array($horizontal_image_2['sizes']['gallery-horizontal'], $horizontal_image_2['sizes']['large'] , 'hor-40'), 
                                );
        }
                                foreach ($image_list as $key => $image_list) {
                                    $html .='<div class="grid-item '.$image_list[2] .' gallery_product gallery-'.get_the_ID().'">';
                                        $html .='<div class="relative-main">';  
                                            $html .='<a class="box" data-fancybox="gallery" href="'.$image_list[1].'">';
                                                 $html .='<img class="" src="'.$image_list[0].'" alt="" />';
                                            $html .='</a>';
                                        $html .='</div>';   
                                    $html .='</div>'; 
                                 }
                                // $html .= "<div>";
                                    $html .="</div>";
                                endwhile;
                            endif;
                            endwhile;