<?php

use PHPUnit\Framework\TestCase;
//use InterpolationSearch;

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute interpolation Search Test Problem
 */
class InterpolationSearchTest extends TestCase
{
    protected static $interpolationSearchArray;
    protected static $interpolationSearch;
    public static function setUpBeforeClass(): void
    {
        self::$interpolationSearch = new InterpolationSearch();
        self::$interpolationSearchArray = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);
    }
    public function testGivenDataIfFoundShouldReturnIndex()
    {
        $result = self::$interpolationSearch->search(self::$interpolationSearchArray, 12);
        $this->assertEquals(5, $result);
    }

    public function testGivenDataIfNotFoundShouldReturnFalse()
    {
        $result = self::$interpolationSearch->search(self::$interpolationSearchArray, 5);
        $this->assertEquals(-1, $result);
    }

    public function testGivenParameterIfArrayReturnTrue()
    {
        $result = self::$interpolationSearch->isArrayType(self::$interpolationSearchArray);
        $this->assertEquals(true, $result);
    }

    public function testGivenParameterIfArrayReturnFalse()
    {
        $number =  24;
        $result = self::$interpolationSearch->isArrayType($number);
        $this->assertEquals(false, $result);
    }

    public function testGivenArrayIfSortedReturnTrue()
    {
        $result = self::$interpolationSearch->isArraySorted(self::$interpolationSearchArray);
        $this->assertEquals(true, $result);
    }

    public function testGivenArrayIfNotSortedReturnFalse()
    {
        $interpolationSearchArray = array(10, 33, 7, 25, 14, 2, 88, 66, 9, 1);
        $result = self::$interpolationSearch->isArraySorted($interpolationSearchArray);
        $this->assertEquals(false, $result);
    }
}
