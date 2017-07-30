app.controller('MainController', function($scope, fctry) {
	$scope.init = function() {
		$scope.equipments = fctry.equipments;
		$scope.menu.selected = '#home';
	};

	$scope.menu = {
		list: [
			{ title: 'Home', target: '#home', position: 'left' },
			{ title: 'About', target: '#about', position: 'left' },
			{ title: 'Services', target: '#services', position: 'left' },
			{ title: 'Equipments', target: '#equipments', position: 'right' },
			{ title: 'Products', target: '#products', position: 'right' },
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
	}

	return $scope.init();
});