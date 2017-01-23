/* ============================================================
 * File: main.js
 * Main Controller to set global scope variables. 
 * ============================================================ */

angular.module('app')
    .controller('AppCtrl', ['$scope', '$rootScope', '$state', '$http', function($scope, $rootScope, $state, $http) {

        $scope.BUILD = "abuja"; //"kaduna"

        // App globals
        $scope.app = {
            description: 'Admin Dashboard UI kit',
            layout: {
                menuPin: false,
                menuBehind: false,
                theme: 'pages/css/pages.css'
            },
            about: 'NIIT is committed to providing world class IT solutions.',
            description: 'We provide IT training that meet the highest standards',
            slogan: 'We provide IT solutions that meet global standards'
        }

        $scope.company = {
            name: 'Campus Technologies Ltd',
            slogan: 'We provide IT training that meet the highest standards',
            website: 'http://campustechng.com'
        }

        var calendarUrl = "assets/json/calendar.json";//"http://public.niitabuja.com/calendar.php"
        var newsUrl = "assets/json/news.json";

        if ($scope.BUILD == "abuja") {
            $scope.app.name = "NIIT Abuja";
            $scope.logo = "assets/img/logo-abuja.png";

            $scope.app.facebook = "https://facebook.com/niitabuja";
            $scope.app.facebook_name = "/niitabuja";
            $scope.app.linkedin = "https://linkedin.com/niitabuja";
            $scope.app.linkedin_name = "/niitabuja";
            $scope.app.twitter = "https://twitter.com/niitabuja";
            $scope.app.twitter_name = "@niitabuja";

            calendarUrl = "assets/json/calendar-abuja.json";
            newsUrl = "assets/json/news-abuja.json";
        }
        else {
            $scope.app.name = "NIIT Kaduna";
            $scope.logo = "assets/img/logo-kaduna.png";

            $scope.app.facebook = "https://facebook.com/niitkaduna";
            $scope.app.facebook_name = "/niitkaduna";
            $scope.app.linkedin = "https://linkedin.com/niitkaduna";
            $scope.app.linkedin_name = "/niitkaduna";
            $scope.app.twitter = "https://twitter.com/niitkaduna";
            $scope.app.twitter_name = "@niitkaduna";

            calendarUrl = "assets/json/calendar-kaduna.json";
            newsUrl = "assets/json/news-kaduna.json";
        }

        $http.get(calendarUrl).then(function(success){
            success.data.forEach(function(event){
                if(!event.other.img) event.other.img = {src: "assets/img/events/default.png"};
                else if(!event.other.img.src) event.other.img.src = "assets/img/events/default.png";
            });
            $scope.events = success.data;
        }, function(error){
            console.log("error", error);
        });

        $http.get(newsUrl).then(function(success){
            $scope.news = success.data;
        }, function(error){
            console.log("error", error);
        });

        $scope.email = "info@campustechng.com";
        $scope.year = new Date().getFullYear();
        // Checks if the given state is the current state
        $scope.is = function(name) {
            return $state.is(name);
        }

        // Checks if the given state/child states are present
        $scope.includes = function(name) {
            return $state.includes(name);
        }

        // Broadcasts a message to pgSearch directive to toggle search overlay
        $scope.showSearchOverlay = function() {
            $scope.$broadcast('toggleSearchOverlay', {
                show: true
            })
        }

    }]);


angular.module('app')
    /*
        Use this directive together with ng-include to include a 
        template file by replacing the placeholder element
    */
    
    .directive('includeReplace', function() {
        return {
            require: 'ngInclude',
            restrict: 'A',
            link: function(scope, el, attrs) {
                el.replaceWith(el.children());
            }
        };
    })