angular
	.module('RomanNumeral', [])

	.controller('Conversion', ['Generator', function(Generator) {
		var self = this;

		// set default values
		self.action = 'generate';
		self.result = '';

		// on change of param - send service request
		self.paramChange = function() {
			if (self.param.length > 0) {
				Generator.request(self.action, self.param).then(function(response) {
					var apiData = response.data;
					self.result = apiData.result;
				});
			}
			else {
				self.result = '';
			}
		}
	}])

	.service('Generator', ['$http', function($http) {
		return {
			request: function(action, param) {
				return $http.get('api.php', {
					method: 'POST',
					params: {
						action: action,
						param: param
					}
				});
			}
		};
	}]);