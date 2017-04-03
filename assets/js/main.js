/* ============================================================
 * File: main.js
 * Main Controller to set global scope variables. 
 * ============================================================ */

angular.module('app')
    .controller('AppCtrl', ['$scope', '$rootScope', '$state', '$http', function($scope, $rootScope, $state, $http) {

        $scope.BUILD = "abuja"

        // App globals
        $scope.app = {
            layout: {
                menuPin: false,
                menuBehind: false,
                theme: 'pages/css/pages.css'
            },
            about: 'NIIT is committed to providing world class IT training.',
            description: 'We provide IT training that meet the highest standards'
        }

        $scope.company = {
            name: 'Campus Technologies Ltd',
            slogan: 'We provide IT training that meet the highest standards',
            website: 'http://campustechng.com'
        }

        var calendarUrl = "assets/json/calendar.json";//"http://public.niitabuja.com/calendar.php"
        var coursesUrl = "assets/json/courses.json";
        var newsUrl = "assets/json/news.json";
        var alumniUrl = "assets/json/alumni.json";

        if ($scope.BUILD == "abuja") {
            $scope.app.name = "NIIT Abuja";
            $scope.logo = "assets/img/logo-abuja.png";
            $scope.logo2 = "assets/img/logo-abuja2.png";

            $scope.app.facebook = "https://www.facebook.com/niitabujacenter";
            $scope.app.facebook_name = "/NIIT-ABUJA-1765588413728305";
            $scope.app.linkedin = "https://www.linkedin.com/groups/8581144";
            $scope.app.linkedin_name = "/groups/8581144";
            $scope.app.medium = "https://www.medium.com/niit-abuja";
            $scope.app.medium_name = "/niit-abuja";
            $scope.app.twitter = "https://twitter.com/niitabuja";
            $scope.app.twitter_name = "@niitabuja";

            $scope.phone = "+234-905-509-6016 · +234-905-509-6019";

            alumniUrl = "assets/json/alumni-abuja.json";
            calendarUrl = "assets/json/calendar-abuja.json";
            coursesUrl = "assets/json/courses-abuja.json";
            newsUrl = "assets/json/news-abuja.json";
        }
        else {
            $scope.app.name = "NIIT Kaduna";
            $scope.logo = "assets/img/logo-kaduna.png";
            $scope.logo2 = "assets/img/logo-kaduna2.png";

            $scope.app.facebook = "https://facebook.com/niitkadunacenter";
            $scope.app.facebook_name = "/niitkadunacenter";
            $scope.app.linkedin = "https://linkedin.com/niitkaduna";
            $scope.app.linkedin_name = "/niitkaduna";
            $scope.app.medium = "https://www.medium.com/niit-kaduna";
            $scope.app.medium_name = "/niit-kaduna";
            $scope.app.twitter = "https://twitter.com/niitkaduna";
            $scope.app.twitter_name = "@niitkaduna";

            $scope.phone = "+234-807-509-0381 · +234-807-509-0382 · +234-807-509-0383 · +234-807-509-0384";

            alumniUrl = "assets/json/alumni-kaduna.json";
            calendarUrl = "assets/json/calendar-kaduna.json";
            coursesUrl = "assets/json/courses-kaduna.json";
            newsUrl = "assets/json/news-kaduna.json";
        }

        $http.get(alumniUrl).then(function(success){
            var alumni = success.data;
            $scope.alumni = alumni;
            $scope.featuredAlumnus = {};

            if(alumni.length > 0)
                $scope.featuredAlumnus = alumni[Math.floor(Math.random() * alumni.length)]; //alumnus to appear on home screen
        }, function(error){
            console.log("error", error);
        });

        $http.get(calendarUrl).then(function(success){
            success.data.forEach(function(event){
                //event.other.formattedStart = moment(event.start).format('h:mm A');
                //event.other.formattedEnd = moment(event.end).format('h:mm A');

                if(!event.other.img) event.other.img = {src: "assets/img/events/default.png"};
                else if(!event.other.img.src) event.other.img.src = "assets/img/events/default.png";
            });
            $scope.events = success.data;

            $scope.featuredEvents = [];
            var index = 0;
            for (var i = 0; i < $scope.events.length; i++) {
                $scope.featuredEvents.push($scope.events[i])
                index++;
                if (index > 2) break;
            }
        }, function(error){
            console.log("error", error);
        });

        $http.get(coursesUrl).then(function(success){
            var courses = success.data;
            $scope.courses = courses;

            $scope.featuredCourses = []; //courses to appear on home screen
            var totalNum = courses.length;
            var thirdPart = Math.floor(totalNum / 3);
            var index1 = Math.floor(Math.random() * thirdPart);
            $scope.featuredCourses.push(courses[index1]);
            var index2 = thirdPart + index1;
            $scope.featuredCourses.push(courses[index2]);
            var index3 = thirdPart + index2;
            $scope.featuredCourses.push(courses[index3]);

            $scope.leftCourses = [];
            $scope.rightCourses = [];
            courses.forEach(function(course, index){
                if (index % 2 == 0) {
                    $scope.leftCourses.push(course);
                }
                else {
                    $scope.rightCourses.push(course);
                }
            });
        }, function(error){
            console.log("error", error);
        });

        $http.get(newsUrl).then(function(success){
            $scope.news = success.data;

            $scope.featuredNews = [];
            var index = 0;
            for (var i = 0; i < $scope.news.length; i++) {
                $scope.featuredNews.push($scope.news[i])
                index++;
                if (index > 3) break;
            }
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