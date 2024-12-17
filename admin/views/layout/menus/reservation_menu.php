<?php
	echo Menu::item([
		"name"=>"Reservation",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"reservation/create","text"=>"Create Reservation","icon"=>"far fa-circle nav-icon"],
			["route"=>"reservation","text"=>"Manage Reservation","icon"=>"far fa-circle nav-icon"],
		]
	]);
