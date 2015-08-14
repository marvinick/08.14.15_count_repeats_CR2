<?php

    require_once "src/CountRepeats.php";

    class CountRepeatsTest extends PHPUnit_Framework_TestCase {


        function test_countRepeats_one_word() {

            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "word";

            //Act
            $result = $test_RepeatCounter->countRepeats($input);

            //Assert
            $this->assertEquals(array('word' => 1), $result);
        }


        function test_countRepeats_multiple_words() {

            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "word master manipulator master";

            //Act
            $result = $test_RepeatCounter->countRepeats($input);

            //Assert
            $this->assertEquals(array('word' => 1, 'master' => 2, 'manipulator' => 1 ), $result);
        }


    }

?>