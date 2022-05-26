const app = angular.module("myapp",["ngRoute","ngStorage"]);




app.controller('AppCntrl',['$scope','$http',function($scope,$http  ){

    $scope.Register=function(){
    

$http({

method:"POST",
url:'connect.php',
data: $scope.re
})

 .success(function(data){
     if(data.msg != '')
     {
      $scope.alertMsg = true;
      $scope.alertClass = 'alert-danger';
      $scope.alertMessage = data.message;
      if(data.msg =='Success')
      {
          $scope.alertMsg = true;
          $scope.alertClass = 'alert-success';
          $scope.alertMessage = data.message;
         
          $window.location.href=("http://localhost/mEdcom/frontend/#/");
      }
     }
     else
     {
       location.reload();
     }
    })

} 





$scope.Ulogin=function(){   

    $http({

        method:"POST",
        url:'Ulogin.php',
        data: $scope.log
        })
        
        .success(function(data){
            if(data.msg != '')
            {
             $scope.alertMsg = true;
             $scope.alertClass = 'alert-danger';
             $scope.alertMessage = data.message;
             if(data.msg =='Success')
             {
                 $scope.alertMsg = true;
                 $scope.alertClass = 'alert-success';
                 $scope.alertMessage = data.message;
                
                 $window.location.href=("http://localhost/mEdcom/frontend/#/");
             }
            }
            else
            {
              location.reload();
            }
           })
       
       } 
       






}





 ] );







