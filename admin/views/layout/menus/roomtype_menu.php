<?php
	echo Menu::item([
		"name"=>"Roomtype",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"roomtype/create","text"=>"Create Roomtype","icon"=>"far fa-circle nav-icon"],
			["route"=>"roomtype","text"=>"Manage Roomtype","icon"=>"far fa-circle nav-icon"],
		]
	]);
