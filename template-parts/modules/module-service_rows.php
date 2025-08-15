<?php
$service_rows = get_sub_field('service_rows') ?? null;
if( $service_rows ):
?>
<section class="module service-rows">
	<div class="grid-container">
		<?php foreach($service_rows as $service_row):
			$title = $service_row['title'] ?? null;
			$text = $service_row['text'] ?? null;
			if($title || $text):
		?>	
			<div class="service-row">
				<div class="grid-x align-center">
					<div class="cell small-12 tablet-11 large-10">
						<div class="green-outline relative">
							<div class="grid-x grid-padding-x">
								<?php if( $title ):?>
									<div class="cell small-12 medium-5 tablet-5">
										<h3 class="color-black"><?=wp_kses_post($title);?></h3>
									</div>
								<?php endif;?>
								<?php if( $text ):?>
									<div class="cell small-12 medium-7">
										<p><b><?=wp_kses_post($text);?></b></p>
									</div>
								<?php endif;?>
								<div class="square bg-light-green"></div>
								<div class="square bg-light-green-3"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; endforeach;?>
	</div>
</section>
<?php endif;?>