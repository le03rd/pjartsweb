app.controller('MainController', function($scope, fctry) {
	$scope.init = function() {
		$scope.equipments = fctry.equipments;
		$scope.menu.selected = '#home';
	};

	$scope.menu = {
		list: [
			{ title: 'Home', target: '#home', position: 'left' },
			{ title: 'About', target: '#about', position: 'left' },
			{ title: 'Equipments', target: '#equipments', position: 'left' },
			{ title: 'Products', target: '#products', position: 'right' },
			{ title: 'Services', target: '#services', position: 'right' },
			{ title: 'Contact', target: '#contact', position: 'right' }
		],
		selected: null
	};
	$scope.equipments = [];
	$scope.branches = [
		{ location: '#726 Camanang Riverside, Urdaneta City' },
		{ location: 'Stall #148, Building A 168 Mall, Urdaneta City' },
		{ location: 'Ambrosio Street, Urdaneta City' },
		{ location: 'IT Zone, SM City Rosales, Pangasinan' },
		{ location: '#18 Brgy. Cut-Cut 1st. Romulo Boulevard, Tarlac City' },
	];
	$scope.contacts = [
		{ number: '(075) 600-2169' },
		{ number: '(075) 574-9715' },
		{ number: '(075) 696-2651 ~ 52' },
		{ number: '(+63) 918-917-5981' },
		{ number: '(+63) 916-790-8573' },
		{ number: '(+63) 925-511-1002' },
		{ number: '(+63) 933-856-1721' },
	];
	$scope.products = {
		featured: [
			{ caption: 'Standee Sintraboard', sub: 'A human-sized display for special occasions', src: 'public/assets/featured/product-standee.png' },
			{ caption: 'Customized Giveaways', sub: 'Create your own design for any special occasion', src: 'public/assets/featured/product-giveaway.jpg' },
			{ caption: 'Wood Etching', sub: 'Your photo/graphic is etched on to a wooden plaque to create a personalized gift', src: 'public/assets/featured/product-woodetching.jpg' },
			{ caption: 'PVC ID', sub: 'Easily cstomize plastic PVC cards with any style of plastic cards', src: 'public/assets/featured/product-pvcid.jpg' },
			{ caption: 'Phone Cases', sub: 'Express yourself with original phone cases and decal skin designs made by you', src: 'public/assets/featured/product-phonecases.jpg' },
		]
	};
	$scope.services = [
		{ service: 'Acrylic Medals', src: 'public/assets/services/acrylic-medal.png', anim: 'fade-left' },
		{ service: 'Acrylic Miniature', src: 'public/assets/services/acrylic-miniture.png', anim: 'fade' },
		{ service: 'Acrylic Souvenir', src: 'public/assets/services/acrylic-souvenir.png', anim: 'fade-right' },
		{ service: 'Acrylic Table Sign', src: 'public/assets/services/acrylic-table-sign.png', anim: 'fade-left' },
		{ service: 'Acrylic Trophy', src: 'public/assets/services/acrylic-trophy.png', anim: 'fade' },
		{ service: 'Keychain', src: 'public/assets/services/keychain.png', anim: 'fade-right' },
		{ service: 'UV Print Phonecase', src: 'public/assets/services/uv-print-phone-case.png', anim: 'fade-left' },
		{ service: 'PVC Signages', src: 'public/assets/services/pvc-signages.png', anim: 'fade' },
		{ service: 'PVC ID', src: 'public/assets/services/pvc-id.png', anim: 'fade-right' },
	];

	return $scope.init();
});