<?php

return [

	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'main' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'athlete' => [
		'controller' => 'athlete',
		'action' => 'getAthlete',
	],

	'athlete/{id:\d+}' => [
		'controller' => 'athlete',
		'action' => 'dellAthlete',
	],

	'country' => [
		'controller' => 'country',
		'action' => 'getCountry',
	],

	'country/{id:\d+}' => [
		'controller' => 'country',
		'action' => 'dellCountry',
	],

	'medal' => [
		'controller' => 'medal',
		'action' => 'getMedalStats',
	],

	'medal/{id:\d+}' => [
		'controller' => 'medal',
		'action' => 'dellMedalStats',
	],

	'sport' => [
		'controller' => 'sport',
		'action' => 'getSport',
	],

	'sport/{id:\d+}' => [
		'controller' => 'sport',
		'action' => 'delSport',
	],

	'MedalStats/{im:\d+}/{ic:\d+}' => [
		'controller' => 'medalStats',
		'action' => 'getMedalStats',
	],
];