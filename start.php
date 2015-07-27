<?php

function Vieber_HTML_Parse($text) {
	try {
		$config = HTMLPurifier_Config::createDefault();
		$config->set('HTML.Allowed', setting('vieber_html_allowed_tags'));
		$purifier = new HTMLPurifier($config);
		$cleaned = $purifier->purify($text);

	} catch (\Exception $e) {
		$cleaned = htmlspecialchars($text);
	}

	return $cleaned;
}