<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/label.bundle.css',
	'js' => 'dist/label.bundle.js',
	'rel' => [
		'main.core',
		'ui.fonts.opensans',
		'ui.design-tokens',
	],
	'skip_core' => false,
];