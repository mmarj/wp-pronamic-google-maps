<?php

if ( function_exists( 'pronamic_google_maps_mashup' ) ) {
	pronamic_google_maps_mashup(
		array(
			'post_type'      => 'post',
			'posts_per_page' => 50,
		),
		array(
			'width'          => 800,
			'height'         => 800,
			'map_type_id'    => 'satellite',
			'latitude'       => 52,
			'longitude'      => 8,
			'zoom'           => 4,
			'fit_bounds'     => false,
		)
	);
}
