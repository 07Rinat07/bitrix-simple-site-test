<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/node.bundle.css',
	'js' => 'dist/node.bundle.js',
	'rel' => [
		'main.polyfill.core',
	],
	'skip_core' => true,
];