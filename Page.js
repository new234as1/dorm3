var app = angular.module("myapp", []);
app.controller("detailContoller", function ($scope, $http) {
  $scope.dorm ='';
  $scope.listcompare ='';
  $scope.dorm = function () {
    $http({
      method: "post",
      url: "selectbody3.php",
      data: {"dormid": $scope.dormid},
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    }).then(
      function mySuccess(response) {
        $scope.x = response.data[0];
      }
      , function myError(response) {
      }
    );

    $http({
      method: "post",
      url: "conven.php",
      data: {"dormid": $scope.dormid},
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    }).then(
      function mySuccess(response) {
        $scope.icon = response.data;
      }
      , function myError(response) {
      }
    );
  }

  $scope.listcompare = function () {
    $http({
      method: "post",
      url: "listcompare.php",
      data: {"idzone": $scope.x.id_zone},
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    }).then(
      function mySuccess(response) {
        $scope.listcompare = response.data;
      }
      , function myError(response) {
      }
    );
  }
});
