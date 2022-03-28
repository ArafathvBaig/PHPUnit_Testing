<?php

use PHPUnit\Framework\TestCase;
//use LinearSearch;

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Linear Search Test Problem
 */
class LinearSearchTest extends TestCase
{
    protected static $linearSearchArray;
    protected static $linearSearch;
    public static function setUpBeforeClass(): void
    {
        self::$linearSearch = new LinearSearch();
        self::$linearSearchArray = array(10, 33, 7, 25, 14, 2, 88, 66, 9, 1);
    }
    public function testGivenDataIfFoundShouldReturnIndex()
    {
        $result = self::$linearSearch->search(self::$linearSearchArray, 2);
        $this->assertEquals(5, $result);
    }

    public function testGivenDataIfNotFoundShouldReturnFalse()
    {
        $result = self::$linearSearch->search(self::$linearSearchArray, 5);
        $this->assertEquals(-1, $result);
    }

    public function testGivenParameterIfArrayReturnTrue()
    {
        $result = self::$linearSearch->isArrayType(self::$linearSearchArray);
        $this->assertEquals(true, $result);
    }

    public function testGivenParameterIfArrayReturnFalse()
    {
        $number =  24;
        $result = self::$linearSearch->isArrayType($number);
        $this->assertEquals(false, $result);
    }

    public function testGivenArrayIfSortedReturnTrue()
    {
        $linearSearchArray = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);
        $result = self::$linearSearch->isArraySorted($linearSearchArray);
        $this->assertEquals(true, $result);
    }

    public function testGivenArrayIfNotSortedReturnFalse()
    {
        $result = self::$linearSearch->isArraySorted(self::$linearSearchArray);
        $this->assertEquals(false, $result);
    }
}
