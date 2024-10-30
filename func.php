<?php


function CodeLibs($which, $version) {

	$which = strtolower($which);
	$version = strtolower($version);
	
	if($which == 'chromeframe' && $version == 'latest') {
		$version = '1.0.2';
	}
	elseif($which == 'dojo' && $version == 'latest') {
		$version = '1.7.1';
	}
	elseif($which == 'ext-core' && $version == 'latest') {
		$version = '3.1.0';
	}
	elseif($which == 'ext-js' && $version == 'latest') {
		$version = '4.0.7';
	}
	elseif($which == 'filer' && ($version == 'latest' || $version != 'latest')) {
		$version = 'latest';
	}
	elseif($which == 'form2js' && ($version == 'latest' || $version != 'latest')) {
		$version = 'latest';
	}
	elseif($which == 'geo' && $version == 'latest') {
		$version = '0.4.3';
	}
	elseif($which == 'impress' && ($version == 'latest' || $version != 'latest')) {
		$version = 'latest';
	}
	elseif($which == 'jquery' && $version == 'latest') {
		$version = '1.7.1';
	}
	elseif($which == 'jqueryui' && $version == 'latest') {
		$version = '1.8.17';
	}
	elseif($which == 'modernizr' && $version == 'latest') {
		$version = '2.0.6';
	}
	elseif($which == 'mootools' && $version == 'latest') {
		$version = '1.4.1';
	}
	elseif($which == 'prototype' && $version == 'latest') {
		$version = '1.7.0.0';
	}
	elseif($which == 'scriptaculous' && $version == 'latest') {
		$version = '1.9.0';
	}
	elseif($which == 'swfobject' && $version == 'latest') {
		$version = '2.2';
	}
	elseif($which == 'uri' && $version == 'latest') {
		$version = '1.3.0';
	}
	elseif($which == 'webfontloader' && $version == 'latest') {
		$version = '1.0.24';
	}
	elseif($which == 'yui' && $version == 'latest') {
		$version = '3.3.0';
	}
	$script = "<script src='".get_bloginfo('wpurl')."/wp-content/plugins/codelibs/$which/$version/$which.js'></script>";
	echo $script;
}