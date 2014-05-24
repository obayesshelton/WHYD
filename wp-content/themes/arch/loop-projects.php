<?php
	if(get_post_meta( $post->ID, "exclude", true )) {
	}else {
		?>
		<div class="chunk">
			<h2>Montauk House</h2>
			<div class="meta-data">
				<p>Long Island, USA<br>2009 – 2013</p>
			</div>
		</div>
		<?php
	}
?>
