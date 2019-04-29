importance: 5

---

# Are counters independent?

Here we make two counters: `counter` and `counter2` using the same `makeCounter` function.

Are they independent? What is the second counter going to show? `0,1` or `2,3` or something else?

```js
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

*!*
alert( counter2() ); // ?
alert( counter2() ); // ?
*/!*
```

## Solution ##
## Note :- You can not access any variable or function which are created in their block (local scop) only the thing is they are not created in window object. ##

  if(true){
    //console.log(a);
    //console.log(sum(5));
    let a = 10;
    function sum(a){
        return function(b){ return a+b;}
    }

    var add = function(a){
        return function(b){ return a+b;}
    }
}

console.log(add(5)(10));
