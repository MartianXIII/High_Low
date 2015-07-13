<?php
//$firstName = trim(fgets(STDIN));
//fwrite(STDOUT, "Hello $firstName\n");
function HighLow () {
    fwrite(STDOUT, "wanna play?" . PHP_EOL);
    $gamePicks = rand( 1, 100);
    fwrite(STDOUT, "Guess a Digit, One to a Hundred" . PHP_EOL);
    $usersGuess = fgets(STDIN);
      do {
        if ($usersGuess > $gamePicks) {
          fwrite(STDOUT, "2High" . PHP_EOL);
          $usersGuess = fgets(STDIN);
        } elseif ($usersGuess < $gamePicks) {
           fwrite(STDOUT, "2Low" . PHP_EOL);
           $usersGuess  = fgets(STDIN);
         }
      } while ($usersGuess != $gamePicks);

      if ($usersGuess == $gamePicks) {
           fwrite(STDOUT, 'Whoa Nice one' . PHP_EOL);
           GameOn();
      }
}
function GameOn () {
  fwrite(STDOUT, 'Play Again? y/n');
  $usersGuess = trim(fgets(STDIN));
  if ($usersGuess == 'y') {
  HighLow();

  }
}
HighLow();
