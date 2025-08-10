<?php
if( have_rows('content_modules') ):
	while ( have_rows('content_modules') ) : the_row();

		if( get_row_layout() == 'centered_logo_title_cta_link' ):
			get_template_part('template-parts/modules/module', 'centered_logo_title_cta_link');
		elseif( get_row_layout() == 'contact_info_two_columns' ):
			get_template_part('template-parts/modules/module', 'contact_info_two_columns');			
		elseif( get_row_layout() == 'copy_and_cta_left_image_right' ):
			get_template_part('template-parts/modules/module', 'copy_and_cta_left_image_right');
		elseif( get_row_layout() == 'outlined_centered_logo_title_copy' ):
			get_template_part('template-parts/modules/module', 'outlined_centered_logo_title_copy');
		elseif( get_row_layout() == 'download_rows' ):
			get_template_part('template-parts/modules/module', 'download_rows');
		elseif( get_row_layout() == 'form' ):
			get_template_part('template-parts/modules/module', 'form');
		elseif( get_row_layout() == 'outlined_title_cards' ):
			get_template_part('template-parts/modules/module', 'outlined_title_cards');
		elseif( get_row_layout() == 'page_banner' ):
			get_template_part('template-parts/modules/module', 'page_banner');
		elseif( get_row_layout() == 'page_title_subtitle' ):
			get_template_part('template-parts/modules/module', 'page_title_subtitle');
		elseif( get_row_layout() == 'service_rows' ):
			get_template_part('template-parts/modules/module', 'service_rows');
		elseif( get_row_layout() == 'team_cards' ):
			get_template_part('template-parts/modules/module', 'team_cards');
		endif;

	endwhile;
endif;
?>