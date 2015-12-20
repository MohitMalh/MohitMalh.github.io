var app = angular.module('myApp', ['ngRoute']);
  
  // configure the routes
app.config(function ($routeProvider) {
  $routeProvider
    .when('/', {
        // route for the home page 
        templateUrl: 'pages/museum.html',
        controller: 'homeController'
    })
    .when('/mfa', {
        // route for the home page 
        templateUrl: 'pages/mfa.html',
        controller: 'mfaController'
    })
    .when('/isgm', {
        // route for the about page
        templateUrl: 'pages/ISBM.html',
        controller: 'isgmController'
    })
    .when('/mos/', {
        // route for the contact page 
        templateUrl: 'pages/mos.html',
        controller: 'mosController'
    })
    .when('/bcm', {
        // route for the about page
        templateUrl: 'pages/bcm.html',
        controller: 'bcmController'
    })
    .when('/wwm/', {
        // route for the contact page 
        templateUrl: 'pages/wwm.html',
        controller: 'wwmController'
    })
    .when('/har_art', {
        // route for the about page
        templateUrl: 'pages/har_art.html',
        controller: 'har_artController'
    })
    .when('/old/', {
        // route for the contact page 
        templateUrl: 'pages/old.html',
        controller: 'oldController'
    })
    .when('/harvard', {
        // route for the about page
        templateUrl: 'pages/harvard.html',
        controller: 'harvardController'
    })
    .when('/bosfire/', {
        // route for the contact page 
        templateUrl: 'pages/bosfire.html',
        controller: 'bosfireController'
    }).when('/bostontea', {
        // route for the about page
        templateUrl: 'pages/bostontea.html',
        controller: 'bostonteaController'
    })
    .when('/mit/', {
        // route for the contact page 
        templateUrl: 'pages/mit.html',
        controller: 'mitController'
    })
    .otherwise({
        // none of the above
        templateUrl: 'pages/sports.html',
        controller: 'sportsController'
    });
});
app.controller('homeController', 
  function ($scope) {       
  });
app.controller('mfaController', 
  function ($scope) {       
    $scope.message = 'The original MFA opened its doors to the public on July 4, 1876, the nation’s centennial. Built in Copley Square, the MFA was then home to 5,600 works of art. Over the next several years, the collection and number of visitors grew exponentially, and in 1909 the Museum moved to its current home on Huntington Avenue';
    $scope.message1=' Today the MFA is one of the most comprehensive art museums in the world; the collection encompasses nearly 500,000 works of art. We welcome more than one million visitors each year to experience art from ancient Egyptian to contemporary, special exhibitions, and innovative educational programs.';
  });

app.controller('isgmController', 
  function ($scope) {
    $scope.message = 'Visitors to the Isabella Stewart Gardner Museum are greeted by the visual splendor of the courtyard garden and surrounding galleries—a feast for the senses. The Museum was designed as a work of art in totality.';
    $scope.message1 = 'The Isabella Stewart Gardner Museum is at once an intimate collection of fine and decorative art and a vibrant, innovative venue for contemporary artists, musicians and scholars. Housed in a stunning 15th-century Venetian-style palace with three stories of galleries surrounding a sun- and flower-filled courtyard, the Museum provides an unusual backdrop for the viewing of art. The Isabella Stewart Gardner Museums preeminent collection contains more than 2,500 paintings, sculptures, tapestries, furniture, manuscripts, rare books and decorative arts. The galleries house works by some of the most recognized artists in the world, including Titian, Rembrandt, Michelangelo, Raphael, Botticelli, Manet, Degas, Whistler and Sargent. The spirit of the architecture, the personal character of the arrangements and the artistic display of the enchanting courtyard in full bloom all create an atmosphere that distinguishes the Isabella Stewart Gardner Museum as an intimate and culturally-rich treasure.';
   
  });

app.controller('mosController', 
  function ($scope) {
    $scope.message = "In 1830, six men interested in natural history established the Boston Society of Natural History, an organization through which they could pursue their common scientific interests. Devoted to collecting and studying natural history specimens, the society displayed its collections in numerous temporary facilities until 1864, when it opened the New England Museum of Natural History at the corner of Berkeley and Boylston Streets in Boston's Back Bay. That museum is now known worldwide as the Museum of Science, Boston. One of the world's largest science centers and Boston's most attended cultural institution, the Museum attracts approximately 1.5 million visitors a year through its vibrant programs and 700 interactive exhibits";
  });

app.controller('bcmController', 
  function ($scope, $location) {
    $scope.message = "Boston Children’s Museum is the second oldest, and one of the most influential children’s museums in the world. It was founded in 1913 by the Science Teachers' Bureau, a group of visionary educators dedicated to providing new resources for both teachers and students, as a center for the exchange of materials and ideas to advance the teaching of science.  For over 100 years it has been engaging children in joyful discovery experiences that instill an appreciation of our world, develop foundational skills, and spark a lifelong love of learning.";

$scope.message1 ="The Museum’s exhibits and programs emphasize hands-on engagement and learning through experience, employing play as a tool to spark the inherent creativity, curiosity, and imagination of children.  Designed for children and families, Museum exhibits focus on science, culture, environmental awareness, health & fitness, and the arts. In addition to extensive child-centered exhibits, Museum educators develop numerous programs and activities that address literacy, performing arts, science and math, visual arts, cultures, and health and wellness. The Museum is also one of the few children’s museums in the world to maintain a collection. The Museum’s collections of Americana, Natural History, Global Culture, Native American, Dolls and Dollhouses, and Japanese artifacts encompass more than 50,000 items. ";
  });

app.controller('wwmController', 
  function ($scope) {       
    $scope.message = "The Waterworks Museum is located on the site of the original Chestnut Hill Reservoir and pumping station. By the 1880’s, Boston’s water system couldn’t keep up with the rapid growth of the city and its water needs. Chestnut Hill was identified as the location for a new reservoir and main pumping station. The original station was built in 1887, but by the 1890’s, it was clear that demand had quickly outstripped the ability to transport sufficient water. The need for more water resulted in the installation of increasingly powerful (and enormous!) pumping engines, which operated every day until the 1970’s, when the site was taken offline, and Boston’s water supply shifted to the Quabbin Reservoir. The Chestnut Hill Reservoir, however, is still used as a back-up source of water in case of emergencies.";
  });
app.controller('har_artController', 
  function ($scope) {       
    $scope.message = 'The Harvard Art Museums are comprised of three separate museums—the Fogg Museum, Busch-Reisinger Museum, and Arthur M. Sackler Museum—each with a different history, collection, guiding philosophy, and identity.';
  });
app.controller('oldController', 
  function ($scope) {       
    $scope.message = "The Old State House is a historic building in Boston, Massachusetts, at the intersection of Washington and State Streets. Built in 1713, it was the seat of the Massachusetts General Court until 1798, and is one of the oldest public buildings in the United States.[3] One of the landmarks on Boston's Freedom Trail, it is the oldest surviving public building in Boston, and now serves as a history museum operated by the Bostonian Society. It was designated a National Historic Landmark in 1960.";
  });
app.controller('harvardController', 
  function ($scope) {       
    $scope.message = 'The Harvard Museum of Natural History was established in 1998 as the public face of three research museums: the Museum of Comparative Zoology, the Harvard University Herbaria, and the Mineralogical & Geological Museum. Presenting these incomparable collections and the research of scientists across the University, the Harvard Museum of Natural History’s mission is to enhance public understanding and appreciation of the natural world and the human place in it, sparking curiosity and a spirit of discovery in people of all ages.';
    $scope.message1=' Today’s museum reflects both the history of its affiliate museums and an evolution toward a twenty-first-century institution that presents cutting-edge research, addresses contemporary issues, and offers creative educational experience in a unique, intimate setting.';
  });
app.controller('bosfireController', 
  function ($scope) {       
    $scope.message = 'The Boston Fire Museum, owned and operated by the Boston Sparks Association, has occupied the old firehouse at 344 Congress St, Boston, since 1983. The goal of the Museum is to preserve and display fire fighting memorabilia from the Greater Boston area, educate and inform the general public on fire safety, restore and maintain the "Landmark" building we occupy, and to support the fire service in general.';
  });
app.controller('bostonteaController', 
  function ($scope) {       
    $scope.message = "We’re an entirely new kind of museum, where you’ll not only view artifacts of historical importance, you’ll also have an all-encompassing, multi-sensory experience. At the Boston Tea Party Ships and Museum, our museum experience will transport you on an incredible journey back in time as you take part in the famous event that forever changed the course of American History!";
    $scope.message1="Located on the Congress Street Bridge in Boston, Massachusetts, this floating Boston Museum is unlike anything you’ve ever experienced before. Live actors, high-tech, interactive exhibits, authentically restored tea ships and the stirring, multi-sensory documentary “Let it Begin Here,” are just a taste of what you’ll see, hear and feel.";
  });
app.controller('mitController', 
  function ($scope) {       
    $scope.message = 'The mission of the MIT Museum is to engage the wider community with MIT science, technology and other areas of scholarship in ways that will best serve the nation and the world in the 21st century.';
    $scope.message1=' The Museum is dedicated to collecting, preserving, and exhibiting materials that serve as a resource for the study and interpretation of the intellectual, educational, and social history of the Massachusetts Institute of Technology and its role in the development of modern science and technology. The Museum stands alone among university museums in its focus on the impact on society of the research, the teaching and the scientific innovations of its parent institution.';
  });
app.controller('sportsController', 
  function ($scope) {       
    $scope.message = "The museum was founded in 1977 in nearby Cambridge, Massachusetts before eventually moving to Boston to the Garden, which has been home to Celtics and Bruins for twenty years. The museum's exhibits focus on the history of various sports in the Boston area, including the Boston Bruins, Boston Celtics, Boston Red Sox, New England Patriots, Boston Marathon, Patriots, Revolution, boxing, college sports, and others. The museum features diverse sports memorabilia, curiosities, and life-size sculptures of Bobby Orr, Larry Bird, Carl Yastrzemski and Ted Williams by Rhode Island sculptor Armand LaMontagne. The museum is normally open daily between 10 AM and 4 PM, but may close when an event or game is scheduled in the Garden. It is located on a subway stop";
  });