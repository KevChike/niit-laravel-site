'use strict';

/* Controllers */

angular.module('app')
    .controller('CoursesCtrl', ['$scope', '$timeout', '$http', function($scope, $timeout, $http) {

        $scope.refreshTest = function(portlet) {
            console.log("Refreshing...");
            // Timeout to simulate AJAX response delay
            $timeout(function() {
                $(portlet).portlet({
                    refresh: false
                });
            }, 2000);

        }

        $scope.refreshWithErrorTest = function(portlet) {
            console.log("Refreshing...");
            // Timeout to simulate AJAX response delay
            $timeout(function() {
                $(portlet).portlet({
                    error: "Something went terribly wrong!"
                });
            }, 2000);

        }

        var URL = "assets/json/courses.json";//"http://public.niitabuja.com/course-list.php"
        if ($scope.BUILD == "abuja") {
             URL = "assets/json/courses-abuja.json"
        }
        else if ($scope.BUILD == "kaduna") {
             URL = "assets/json/courses-kaduna.json"
        }

        $http.get(URL).then(function(success){
            var courses = success.data;
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


    }]);
