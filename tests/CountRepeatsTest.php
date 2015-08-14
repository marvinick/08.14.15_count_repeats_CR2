<?php

    require_once "src/CountRepeats.php";

    class CountRepeatsTest extends PHPUnit_Framework_TestCase {


        function test_noinputs_both() {

            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = null;
            $input2 = null;

            //Act
            $result = $test_RepeatCounter->countRepeats($input, $input2);

            //Assert
            $this->assertEquals("Give me something to work with", $result);
        }

        function test_noinputs_input1() {

            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = null;
            $input2 = "word";

            //Act
            $result = $test_RepeatCounter->countRepeats($input, $input2);

            //Assert
            $this->assertEquals("Give me something to work with", $result);
        }

        function test_noinputs_input2() {

            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "word";
            $input2 = null;

            //Act
            $result = $test_RepeatCounter->countRepeats($input, $input2);

            //Assert
            $this->assertEquals("Give me something to work with", $result);
        }

        function test_countRepeats_one_word() {

            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "word";
            $input2 = "word";

            //Act
            $result = $test_RepeatCounter->countRepeats($input, $input2);

            //Assert
            $this->assertEquals("'word' appeared 1 time(s).", $result);
        }

        function test_countRepeats_multiple_words() {

            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "master";
            $input2 = "word master manipulator master";

            //Act
            $result = $test_RepeatCounter->countRepeats($input, $input2);

            //Assert
            $this->assertEquals("'master' appeared 2 time(s).", $result);
        }

        function test_no_match() {

            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "word";
            $input2 = "dog";

            //Act
            $result = $test_RepeatCounter->countRepeats($input, $input2);

            //Assert
            $this->assertEquals("'word' appeared 0 time(s).", $result);
        }
    }
?>