<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php print $output; ?>
	


<style type="text/css">
		/*.view-wiki .views-row {
			margin: 10px 1% 0 1%;
			border: 1px solid #333;
			background-color: #000;
			padding: 10px;
			}
		.view-wiki .views-row h2.wiki_landing_title, .view-wiki .views-row h2.wiki_landing_title {
			color: #fff;
			padding:0;
			margin-bottom:0.1%;
			}
		.view-wiki .views-row h2.wiki_landing_title a, .view-wiki .views-row h2.wiki_landing_title a:hover {
			color: #fff;
			padding:0;
			margin-bottom:0.1%;
			}
		.view-wiki .views-row h3.wiki_landing_latin_title, .view-wiki .views-row h3.wiki_landing_latin_title {
			color: #fff;
			padding:0;
			margin:0;
			text-decoration: none;
			}
		.view-wiki .views-row h3.wiki_landing_latin_title a, .view-wiki .views-row h3.wiki_landing_latin_title a:hover {
			color: #ff4400;
			padding:0;
			margin:0;
			text-decoration: none;
			}*/
		.view-wiki .views-row .views-label-field-physical-desc {
			color: #ff9900;
			padding:0;
			margin:0;
			text-decoration: none;
			}
		.view-wiki .views-row .views-field-field-species-img-spec {
			padding: 0;
			}
		.view-wiki .views-row .views-field-field-species-img-spec img {
			width: 100%;
        	height:auto;
			background-color: #297ACC;
			margin-top: 2%;
			border: 1px solid #666;
	        -moz-border-radius:7px;
	        border-radius: 7px; 
	        -moz-border-radius: 7px; 
	        -webkit-border-radius: 7px;
	        overflow: hidden;
			}

/*.view h2.recent_sightings_title a, .view h2.recent_sightings_title a:hover {
			color: #fff;
			padding:0;
			margin-bottom:0.1%;
			}*/


		/* ### new stuff ### */
			/*.views-row {
			margin: 10px 1% 0 1%;
			border: 1px solid #333;
			background-color: #000;
			padding: 10px;
			}	*/
			.view h2.main_title, .view h2.main_title {
			padding:0;
			margin-bottom:0.1%;
			}
			.view h2.main_title a, .view h2.main_title a:hover {
			color: #fff;
			font-size: 16px;
			}

			.view h3.main2_title, .view h3.main2_title {
			padding:10px 0 0 10px !important;
			margin-bottom:0.1%;
			}
			.view h3.main2_title a, .view h3.main2_title a:hover {
			color: #ff4400;
			padding:0;
			margin:0;
			text-decoration: none;
			}


/* Views - Recent Sightings 
.view-test-view .views-row h2.node-title {
	font-size: 1.2em;
	line-height: 1.2em;
	color: #ffffff;
	text-decoration: none;
	font-weight: normal;
}
.view-test-view .views-row h2.node-title a {
	color: #ffffff;
	text-decoration: none;
}
.view-test-view .views-row h3.location-locations-header, .node-plot h3.location-locations-header {
	background-color: transparent !important;
}
.view-test-view .views-row-even, .view-test-view .views-row-odd {
	margin: 10px 1% 0 1%;
	border: 1px solid #333;
	background-color: #000;
	padding: 10px;
}

.view-test-view .views-row-odd {
	background-color: transparent;*/


	</style>
