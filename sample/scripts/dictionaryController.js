angular.module('DictionaryApp.controllers', []).
controller('dictionaryController', function($scope) {
    $scope.word =  {
      name: "hello",
      definition: "hello is a word"
    };

    $scope.apply();
});