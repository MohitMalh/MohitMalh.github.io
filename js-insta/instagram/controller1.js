
app.controller('InstagramCtrl', ['$scope', 'Instagram',
	function($scope, Instagram) {

		$scope.example1 = {
			hash: 'bostonducktours'
		};
		
		var instagramSuccess = function(scope, res) {
			if (res.meta.code !== 200) {
				scope.error = res.meta.error_type + ' | ' + res.meta.error_message;
				return;
			}
			if (res.data.length > 0) {
				scope.items = res.data;
			} else {
				scope.error = "This hashtag has returned no results";
			}
		};

		Instagram.get(25,$scope.example1.hash).success(function(response) {
			instagramSuccess($scope.example1, response);
		});

		

		

	}
]);