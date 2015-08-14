<?php

    class RepeatCounter {

        function countRepeats($input) {
          $count = array_count_values($input);
          return $count;
        }
    }



?>