<?php
$form = get_sub_field('form_id') ?? null;

if( $form ):
?>
<section class="module form">
	<div class="grid-container">
		<div class="grid-x align-center">
			<div class="cell small-12 medium-10 tablet-8">
				<?php  gravity_form( $form, false, false, false, '', true, '' );?>
			</div>
		</div>
	</div>
</section>
<?php endif;?>