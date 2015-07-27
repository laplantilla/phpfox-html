<?php

$override = function($text) {
	$text = str_replace(['&gt;', '&lt;', '&quot;', '&#039;'], ['>', '<', '"', "'"], $text);

	return Vieber_HTML_Parse($text);
};
