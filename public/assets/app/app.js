var angular,
    app = angular.module('filmApp', ['angularUtils.directives.dirPagination']);

app.controller('festivalCtrl', function ($scope) {


    $scope.festivals = [
        {
            title: ' Duis epicurei pri an',
            country: 'Egypt',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['submission','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '02-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'Egypt',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['submission','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '02-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'Egypt',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['submission','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '02-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'Egypt',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['submission','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '02-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'USA',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['closed','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '01-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'USA',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['closed','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '01-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'USA',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['closed','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '01-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'USA',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['closed','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '01-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'USA',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['closed','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '01-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'USA',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['closed','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '01-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'Germany',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['submission','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '03-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'Brazil',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['deadline','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '20-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'Brazil',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['deadline','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '20-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'Brazil',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['deadline','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '20-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'Brazil',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['deadline','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '20-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'Brazil',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['deadline','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '20-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'Brazil',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['deadline','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '20-10-2016'
        },

        {
            title: ' Duis epicurei pri an',
            country: 'Brazil',
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            type: ['deadline','all'],
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '20-10-2016'
        },
    ];
    $scope.sortBy = 'date';
    $scope.reverse = true;
    $scope.pageSize = 10;
    $scope.doSort = function (propName) {
        $scope.sortBy = propName;
        $scope.reverse = !$scope.reverse;
    };
});

app.controller('filmsCtrl', function ($scope) {
    $scope.feedLimit = 5;
    $scope.films = [
        {

            title: ' Duis epicurei pri an',
            country: ['Egypt','all'],
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '2016-02-20',
            video: 'https://www.youtube.com/embed/LlpMsiQkL0M',
            description: "Lorem ipsum dolor sit amet, ignota democritum usu te, ex cum tale quas molestiae. An audire alterum eam. Ex usu aliquando adversarium, ne laoreet consequuntur pro, eum quis nostrum praesent ei. Offendit legendos philosophia qui ex, quo ei dicta exerci. Graece deseruisse eum ex, ne quo percipitur theophrastus. Nihil fierent quo ex."
        },

        {

            title: ' Duis epicurei pri an',
            country: ['united state','all'],
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '2016-02-09',
            video: 'https://www.youtube.com/embed/LlpMsiQkL0M'
        },

        {

            title: ' Duis epicurei pri an',
            country: ['German','all'],
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '2016-02-10',
            video: 'https://www.youtube.com/embed/LlpMsiQkL0M'
        },

        {

            title: ' Duis epicurei pri an',
            country: ['Egypt','all'],
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '2016-02-20',
            video: 'https://www.youtube.com/embed/LlpMsiQkL0M',
            description: "Lorem ipsum dolor sit amet, ignota democritum usu te, ex cum tale quas molestiae. An audire alterum eam. Ex usu aliquando adversarium, ne laoreet consequuntur pro, eum quis nostrum praesent ei. Offendit legendos philosophia qui ex, quo ei dicta exerci. Graece deseruisse eum ex, ne quo percipitur theophrastus. Nihil fierent quo ex."
        },

        {

            title: ' Duis epicurei pri an',
            country: ['united state','all'],
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '2016-02-09',
            video: 'https://www.youtube.com/embed/LlpMsiQkL0M'
        },

        {

            title: ' Duis epicurei pri an',
            country: ['German','all'],
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '2016-02-10',
            video: 'https://www.youtube.com/embed/LlpMsiQkL0M'
        },

        {

            title: ' Duis epicurei pri an',
            country: ['Egypt','all'],
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '2016-02-20',
            video: 'https://www.youtube.com/embed/LlpMsiQkL0M',
            description: "Lorem ipsum dolor sit amet, ignota democritum usu te, ex cum tale quas molestiae. An audire alterum eam. Ex usu aliquando adversarium, ne laoreet consequuntur pro, eum quis nostrum praesent ei. Offendit legendos philosophia qui ex, quo ei dicta exerci. Graece deseruisse eum ex, ne quo percipitur theophrastus. Nihil fierent quo ex."
        },

        {

            title: ' Duis epicurei pri an',
            country: ['united state','all'],
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '2016-02-09',
            video: 'https://www.youtube.com/embed/LlpMsiQkL0M'
        },

        {

            title: ' Duis epicurei pri an',
            country: ['German','all'],
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '2016-02-10',
            video: 'https://www.youtube.com/embed/LlpMsiQkL0M'
        },

        {

            title: ' Duis epicurei pri an',
            country: ['Egypt','all'],
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '2016-02-20',
            video: 'https://www.youtube.com/embed/LlpMsiQkL0M',
            description: "Lorem ipsum dolor sit amet, ignota democritum usu te, ex cum tale quas molestiae. An audire alterum eam. Ex usu aliquando adversarium, ne laoreet consequuntur pro, eum quis nostrum praesent ei. Offendit legendos philosophia qui ex, quo ei dicta exerci. Graece deseruisse eum ex, ne quo percipitur theophrastus. Nihil fierent quo ex."
        },

        {

            title: ' Duis epicurei pri an',
            country: ['united state','all'],
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '2016-02-09',
            video: 'https://www.youtube.com/embed/LlpMsiQkL0M'
        },

        {

            title: ' Duis epicurei pri an',
            country: ['German','all'],
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '2016-02-10',
            video: 'https://www.youtube.com/embed/LlpMsiQkL0M'
        },

        {

            title: ' Duis epicurei pri an',
            country: ['Brazil','all'],
            t_description: 'Duis epicurei pri an. Vix et duis debitis denique, ius an soleat vidisse. Has ei putent consequat.',
            thu: 'http://placehold.it/350x250/fdc91b/fff',
            date: '2016-02-08',
            video: 'https://www.youtube.com/embed/LlpMsiQkL0M'
        }
    ];
    $scope.type = ['Public', 'Private'];



    $scope.pageSize = 6;
    $scope.doSort = function (propName) {
        $scope.sortBy = propName;
        $scope.reverse = !$scope.reverse;
    };
});

app.filter('trustAsResourceUrl', ['$sce', function($sce) {
    return function(val) {
        return $sce.trustAsResourceUrl(val);
    };
}]);

app.controller('directorListCtrl', function($scope) {
    $scope.directorList = [
        {
            profilePic: 'assets/images/profile_pics/1.jpg',
            name: 'Mohamed Samir',
            country: 'Egypt',
            country_id:1
        },

        {
            profilePic: 'assets/images/profile_pics/2.jpg',
            name: 'Ahmed Magdy',
            country: 'Egypt',
            country_id:1
        },

        {
            profilePic: 'assets/images/profile_pics/3.jpg',
            name: 'John Doe',
            country: 'UK',
            country_id:2
        },

        {
            profilePic: 'assets/images/profile_pics/4.jpg',
            name: 'Elton Smith',
            country: 'UK',
            country_id:2
        },

        {
            profilePic: 'assets/images/profile_pics/5.jpg',
            name: 'Patrik Emanuel',
            country: 'France',
            country_id:3
        },

        {
            profilePic: 'assets/images/profile_pics/6.jpg',
            name: 'Thierry Lillian',
            country: 'France',
            country_id:3
        }
    ];
});
