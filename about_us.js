var app = angular.module('myApp', ['ngRoute']);
  
  // configure the routes
app.config(function ($routeProvider) {
  $routeProvider
    .when('/', {
        // route for the home page 
        templateUrl: 'pages/whoweare.html',
        controller: 'homeController'
    })
    .when('/about', {
        // route for the about page
        templateUrl: 'pages/weoffer.html',
        controller: 'aboutController'
    })
    .when('/contact/', {
        // route for the contact page 
        templateUrl: 'pages/contact.html',
        controller: 'contactController'
    })
    .otherwise({
        // none of the above
        templateUrl: 'pages/career.html',
        controller: 'careerController'
    });
});

app.controller('homeController', 
  function ($scope) {       
    $scope.message = 'Our team of technology enthusiasts is passionate about providing the most easy -to-use website. We love innovation, and we are committed to delivering the best user experience best of boston. Our group of 50-100 employees is divided in four offices across USA, Asia, and Europe.';
    $scope.message1=' Ms.Shruti, founded  bostontravelus.com in 2000. Before this she held various software development and management positions at wipro and goenka group. she was quite active in computer science research. Shruti  has a Ph.D. from Computer Science at Purdue University; as well as a Master and Bachelor Degree from IIT India.';
  });

app.controller('aboutController', 
  function ($scope) {
    $scope.message = 'Visit Boston and enjoy the many sightseeing tours and attractions we have to offer. Popular choices include duck tours that view the sights on land and water in amphibious vehicles, trolley tours that allow you to hop on and hop off, harbor cruises, that provide a unique perspective from the water, and so much more.';
    $scope.message1 = 'Take advantage of your time in Boston and enjoy excursions from Boston to Cape Cod, Newport, the New England Seacoast, Plymouth, or Salem. We offer a selection of hand-picked tour packages Our team is committed to bringing you the best price, quality, and value on tours and activities.';
    $scope.message2 ='We want to make vacation planning process as smooth as possible,check verified customer reviews and photos, view the travel distance on a map,and many other options.We also know how important it is for our customers to plan their vacation on-the-go, so we have developed an in-house, customized mobile website and mobile app to easily find a book tours anywhere and anytime.';
  });

app.controller('contactController', 
  function ($scope) {
    $scope.message = 'We are pleased to serve our customers with 24hr customer service via phone and email. You can reach us at:-';
    $scope.message1 ='808 CommonWealth Avenue, #2, Boston, Massachusetts USA 022015 (Headquarters)';
    $scope.message2 = 'Phone :- 12345678, 123-456-7890, Email:- bostontravelus@gmail.com';
  });

app.controller('careerController', 
  function ($scope, $location) {
    $scope.message = 'Looking to join our team?';

$scope.message1 ='If you love travel and technology, you are looking in the right direction to start your career!';

$scope.message2 ='Bostontravelus is rapidly growing and we are always on the lookout for talented people to join our team and helping them to develop their career. We are open to accept resumes for talented individuals interested in joining our company. We are currently hiring for the following positions:';

  });