var app = angular.module("myapp", []);
app.controller("dormsetController", function ($scope, $http) {
  $scope.dormbo = '';
  $scope.zonebo = '';
  $scope.buttonSet = [];
  $scope.pagenum = [];
  $scope.dorm ='';
  $scope.dormbo1 = function (z) {
    $http({
      method: "post",
      url: "selectdormintro.php",
      data: { "recno": $scope.pagenum[z] },
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    }).then(
      function mySuccess(response) {
        $scope.dormSet = response.data;
      }
      , function myError(response) {
      }
    );
    
  }
  $scope.dorm = function () {
    $http({
      method: "post",
      url: "selectdormpop.php",
      data: null,
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    }).then(
      function mySuccess(response) {
        $scope.dormSet = response.data;
      }
      , function myError(response) {
      }
    );
    $http({
      method: "post",
      url: "selectzone.php",
      // data: {"zoneID": $scope.zonebo},
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    }).then(
      function mySuccess(response) {
        $scope.zoneSet = response.data;
      }
      , function myError(response) {
      }
    );
    $http({
      method: "post",
      url: "selectbody3.php",
      data: {"dormid": $scope.dormid},
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    }).then(
      function mySuccess(response) {
        $scope.body3set = response.data;
      }
      , function myError(response) {
      }
    );
  }
  $scope.Buttonbo1 = function () {
    $http({
      method: "post",
      url: "loopbutton.php",
      data: null,
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    }).then(
      function mySuccess(response) {
        for (var i=0; i<response.data; i++) {
          $scope.pagenum.push(i*12);
          $scope.buttonSet.push(i);
        }
        console.log($scope.buttonSet);
        console.log($scope.pagenum);
        // $scope.buttonset = response.data;
      }
      , function myError(response) {
      }
    );
  }
});