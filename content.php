<?php
/**
 * The template part for displaying content
 *
 *
 */
?>
     <div class="container">
        <div class="entry-content>
    
            <div class="row">
                <div class="col-md-12">
            		<?php
            			/* translators: %s: Name of current post */
            			the_content( sprintf(
            				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
            				get_the_title()
            			) );
            
            			wp_link_pages( array(
            				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
            				'after'       => '</div>',
            				'link_before' => '<span>',
            				'link_after'  => '</span>',
            				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
            				'separator'   => '<span class="screen-reader-text">, </span>',
            			) );
            		?>
    	           </div>
            </div>
        </div>
	</<div>