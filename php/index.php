<?php
       　　 //1から100までの数字を画面に表示してください
        for($i = 1; $i <= 100; $i++ ) {
       　　 //3かつ5の倍数のときは数字の代わりにFizzBuzzと表示して下さい
            if(($i % 3 === 0) && ($i % 5 === 0)) {
                echo 'FizzBuzz';
            //3の倍数のときは数字の代わりにFizzと表示して下さい
            }elseif($i % 3 === 0) {
                echo 'Fizz';
        　　//5の倍数のときは数字の代わりにBuzzと表示して下さい
            }elseif ($i % 5 === 0) {
                echo 'Buzz';
            //それ以外
            }else {
                echo $i;
            }
      }
?>
    