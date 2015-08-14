<?php

    class RepeatCounter {

        function countRepeats($input) {
          $word = str_word_count($input, 1);
          $count = array_count_values($word);
          return $count;
        }
    }



?>