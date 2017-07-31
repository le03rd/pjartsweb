app.factory('fctry', function($http, $resource) {
	return {
		equipments: [
			{
				"equipment" : "Mimaki IJF-3042 Series Tabletop Flatbed UV Printer",
				"image" : "public/assets/equipment-mimaki.jpg",
				"color": "blue",
				"description" : "Mimaki IJF-3042 Series Tabletop Printers can print on a variety of substances including plastics, metal, wood, leather and glass onto materials up to 12\" x 16\"." 
			},
			{
				"equipment" : "Challenger FY 3208-L 10 FT Large Format Printer",
				"image" : "public/assets/equipment-challenger.jpg",
				"color": "green",
				"description" : "Mostly used for printing billboards and generally have the capability of printing between 60 and 160 square meters per hour." 
			},
			{
				"equipment" : "Roland Soljet Pro III XC-540 Ink Jet Printer / Cutter",
				"image" : "public/assets/equipment-roland.jpg",
				"color": "red",
				"description" : "The XC-540 is based on Roland's innovative print/cut technology, which delivers a seamless workflow for the production of complex sign graphics." 
			}
		]
	}
});