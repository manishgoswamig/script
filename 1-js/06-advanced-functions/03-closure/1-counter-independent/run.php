<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <script type="text/javascript">
        'use strict'

          /*function makeCounter() {
          let count = 0;

          return function() {
            return count++;
          };
        }

        console.log(makeCounter()());
        console.log(makeCounter()());
        console.log(makeCounter()());
        console.log(makeCounter()());*/

        function makeCounter() {
          let count = 0;

          return function() {
            return count++;
          };
        }

        let counter = makeCounter();
        let counter2 = makeCounter();

        alert( counter() ); // 0
        alert( counter() ); // 1


        alert( counter2() ); // ?
        alert( counter2() ); // ?



    </script>
</body>
</html>
