'use strict';

app.factory('Instagram', ['$http',
	function($http) {
		var base = "https://api.instagram.com/v1";
		var clientId = '3dd18abc692d484cb28f1aa53f04f27a';
		return {
			'get': function(count, hashtag) {
				var request = '/tags/' + hashtag + '/media/recent';
				var url = base + request;
				var config = {
					'params': {
						'client_id': clientId,
						'count': count,
						'callback': 'JSON_CALLBACK'
					}
				};
				return $http.jsonp(url, config);
			}
		};
	}
]);