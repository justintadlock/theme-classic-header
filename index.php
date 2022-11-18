<?php get_header() ?>

<?php
	// Quick conditional checks to pull the correct block template part.
	// these must match existing parts in the `/parts` folder. There's a 
	// ton you could do here and even check for the entire template hierarchy
	// or just for the specific templates you want.
	$slug = 'index';
	
	    if ( is_page() )    { $slug = 'page';    }
	elseif ( is_single() )  { $slug = 'single';  }
	elseif ( is_archive() ) { $slug = 'archive'; } 
	elseif ( is_404() )     { $slug = '404';     }

	block_template_part( "content-{$slug}" );
?>

<?php get_footer() ?>