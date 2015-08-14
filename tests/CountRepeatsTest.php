<?php

    require_once "src/CountRepeats.php";

    class CountRepeatsTest extends PHPUnit_Framework_TestCase {


        function test_countRepeats_one_word() {

            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = array("word");

            //Act
            $result = $test_RepeatCounter->countRepeats($input);

            //Assert
            $this->assertEquals(array('word' => 1), $result);
        }


    }

?>