<?php
function HighLow () {
    $gamePicks = rand( 1, 100);
    fwrite(STDOUT, "Guess a Digit, 1 ~ 100" . PHP_EOL);
    $usersGuess = fgets(STDIN);
    $usersGuessCount = 0;
      do {
        if ($usersGuess > $gamePicks) {
          fwrite(STDOUT, "2High" . PHP_EOL);
          $usersGuess = fgets(STDIN);
          $usersGuessCount +=1;
        } elseif ($usersGuess < $gamePicks) {
           fwrite(STDOUT, "2Low" . PHP_EOL);
           $usersGuess  = fgets(STDIN);
           $usersGuessCount +=1;
         }
      } while ($usersGuess != $gamePicks);

      if ($usersGuess == $gamePicks) {
          $usersGuessCount +=1;
          echo ("It took {$usersGuessCount} attempts" . PHP_EOL);
          $usersGuessCount = 0;
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
