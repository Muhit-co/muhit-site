<?php

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

 */

c::set('languages', array(
	array(
		'code' => 'tr',
		'name' => 'Türkçe',
		'default' => true,
		'locale' => 'tr_TR',
		'url' => '/',
	),
	array(
		'code' => 'en',
		'name' => 'English',
		'locale' => 'en_US',
		'url' => '/en',
	),
));
