<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <script type="text/javascript">
    'use strict'

    /* .. your code for inBetween and inArray */

    let arr = [1, 2, 3, 4, 5, 6, 7];

        //alert( arr.filter(inBetween(3, 6)) ); // 3,4,5,6

        //alert( arr.filter(inArray([1, 2, 10])) ); // 1,2

        function inArray(param,arr) {
          let value = [];
          for(let key2 in param){
            for(let key in arr){
              if(arr[key] == param[key2]){
                value.push(arr[key]);
                console.log(arr[key]);
              }
            }
          }
          return value;
        }

        console.log(inArray([1,2,5],arr));


        function inBetween(s,t,arr){
          let value = [];

          for(let key in arr){
              //console.log(arr[key]);
              if(arr[key] >= 3 && arr[key] <= 6){
                 //value[] = arr[key];
                 value.push(arr[key]);
               }

             }

             return value;
        }

          console.log(inBetween(3, 6, arr)); // 3,4,5,6

        </script>
      </body>
      </html>
