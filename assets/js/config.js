/* ============================================================
 * File: config.js
 * Configure routing
 * ============================================================ */

angular.module('app')
    .config(['$stateProvider', '$urlRouterProvider', '$ocLazyLoadProvider',

        function($stateProvider, $urlRouterProvider, $ocLazyLoadProvider) {
            $urlRouterProvider
                .otherwise('/app/home');

            $stateProvider
                .state('app', {
                    abstract: true,
                    url: "/app",
                    templateUrl: "tpl/app.html"
                })
            .state('app.home', {
                url: '/home',
                templateUrl: 'tpl/apps/social/social.html',
                resolve: {
                    deps: ['$ocLazyLoad', function($ocLazyLoad) {
                        return $ocLazyLoad.load([
                                'isotope',
                                'stepsForm'
                            ], {
                                insertBefore: '#lazyload_placeholder'
                            })
                            .then(function() {
                                return $ocLazyLoad.load([
                                    'pages/js/pages.social.min.js',
                                    'assets/js/apps/social/social.js'
                                ])
                            });
                    }]
                }
            })

            .state('app.courses', {
                url: '/courses',
                templateUrl: 'tpl/courses.html',
                controller: 'CoursesCtrl',
                resolve: {
                    deps: ['$ocLazyLoad', function($ocLazyLoad) {
                        return $ocLazyLoad.load([
                            'assets/js/controllers/courses.js'
                        ]);
                    }]
                }
            })

            .state('app.calendar', {
                url: '/calendar',
                templateUrl: 'tpl/apps/calendar/calendar.html',
                resolve: {
                    deps: ['$ocLazyLoad', function($ocLazyLoad) {
                        return $ocLazyLoad.load([
                                'switchery',
                                'moment-locales',
                                'interact'
                            ], {
                                insertBefore: '#lazyload_placeholder'
                            })
                            .then(function() {
                                return $ocLazyLoad.load([
                                    'pages/js/pages.calendar.min.js',
                                    'assets/js/apps/calendar/calendar.js'
                                ])
                            });
                    }]
                }
            })

            .state('app.contact', {
                url: '/contact',
                templateUrl: 'tpl/contact.html'
            })

        }
    ]);