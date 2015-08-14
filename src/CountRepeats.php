<?php

  class RepeatCounter
  {
    function countRepeats($input, $input2)
    {
      //lowercase inputs
      $word = strtolower($input);
      $sentence = strtolower($input2);

      //conditional
      if ($input == null || $input2 == null) {
        return "Give me something to work with";
      } else {
        //find $word in $bank in the $sentence and adds it into $match
        $match = substr_count($sentence, $word);
        return "'".$word."'" . " appeared " . $match . " time(s).";
      }
    }
  }
?>