<?php

    require_once "src/CountRepeats.php";

    class CountRepeatsTest extends PHPUnit_Framework_TestCase {


        function test_countRepeats_one_word() {

            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "word";
            $input2 = "word";

            //Act
            $result = $test_RepeatCounter->countRepeats($input, $input2);

            //Assert
            $this->assertEquals(array('word' => 1), $result);
        }


        function test_countRepeats_multiple_words() {

            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "master";
            $input2 = "word master manipulator master";

            //Act
            $result = $test_RepeatCounter->countRepeats($input, $input2);

            //Assert
            $this->assertEquals(array('master' => 2), $result);
        }

        function test_countRepeats_none() {

            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = null;

            //Act
            $result = $test_RepeatCounter->countRepeats($input, $input2);

            //Assert
            $this->assertEquals("Please enter a word or sentence(s)", $result);
        }

    }

?>