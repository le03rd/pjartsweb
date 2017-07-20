app.factory('fctry', function($http, $resource) {
	return {
		// orbit: function() {
		// 	return {
		// 		equipments: {
		// 	     	pause_on_hover: true,
		// 	      	resume_on_mouseout: false,
		// 	      	next_on_click: true,
		// 	      	animation_speed: 500,
		// 	      	stack_on_small: false,
		// 	      	navigation_arrows: true,
		// 	      	slide_number: true,
		// 	      	slide_number_text: 'of',
		// 	      	container_class: 'orbit-container',
		// 	      	stack_on_small_class: 'orbit-stack-on-small',
		// 	      	next_class: 'orbit-next',
		// 	      	prev_class: 'orbit-prev',
		// 	      	preloader_class: 'preloader', 
		// 	      	slide_selector: 'li', 
		// 	      	active_slide_class: 'active', 
		// 	      	orbit_transition_class: 'orbit-transitioning',
		// 	      	bullets: false, 
		// 	      	circular: true,
		// 	      	timer: true, 
		// 	      	swipe: true
		// 	  	}
		// 	}
		// },
		equipments: function() {
			return [
				{
					"equipment" : "Mimaki IJF-3042 Series Tabletop Flatbed UV Printer",
					"image" : "public/assets/equipment-mimaki.png",
					"description" : "Mimaki IJF-3042 Series Tabletop Printers can print on a variety of substances including plastics, metal, wood, leather and glass onto materials up to 12\" x 16\"." 
				},

				{
					"equipment" : "Mimaki IJF-3042 Series Tabletop Flatbed UV Printer",
					"image" : "public/assets/Peter-John-Brochure-Trifold-01.jpg",
					"description" : "Mimaki IJF-3042 Series Tabletop Printers can print on a variety of substances including plastics, metal, wood, leather and glass onto materials up to 12\" x 16\"." 
				},

				{
					"equipment" : "Mimaki IJF-3042 Series Tabletop Flatbed UV Printer",
					"image" : "public/assets/Peter-John-Brochure-Trifold-02.jpg",
					"description" : "Mimaki IJF-3042 Series Tabletop Printers can print on a variety of substances including plastics, metal, wood, leather and glass onto materials up to 12\" x 16\"." 
				}
			];
		}
	}
});