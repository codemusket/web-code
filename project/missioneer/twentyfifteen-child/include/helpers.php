<?php

function theme_root() {
	return get_template_directory_uri() . "-child";
}

function img_uri($file) {
	return theme_root() . "/images/" . $file;
}

function get_img($file) {
	echo img_uri($file);
}

?>