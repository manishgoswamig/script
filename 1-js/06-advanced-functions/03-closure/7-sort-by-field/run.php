<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <script type="text/javascript">
    'use strict'

    let users = [
      { name: "John", age: 20, surname: "Johnson" },
      { name: "Pete", age: 18, surname: "Peterson" },
      { name: "Ann", age: 19, surname: "Hathaway" }
    ];

    console.log(users);

    // by name (Ann, John, Pete)
    users.sort((a, b) => a.name > b.name ? 1 : -1);

    // by age (Pete, Ann, John)
    users.sort((a, b) => a.age > b.age ? 1 : -1);

    /*users.sort(byField('name'));
    users.sort(byField('age'));*/

    console.log(users);

  </script>
</body>
</html>
