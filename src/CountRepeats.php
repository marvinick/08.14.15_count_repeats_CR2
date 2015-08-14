<?php

    class RepeatCounter {

        function countRepeats($input, $input2) {

          if ($input == null || $input2 == null) {
            return "Please enter a word or sentence(s)";
          }

          $holder = array();
          $words = explode(" ", $input2);
          foreach ($words as $word) {
            if ($input == $word) {
                array_push($holder, $word);
                $each_word = array_count_values($holder);
            }
          }
        return $each_word;
        }

    }
?>