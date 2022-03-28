<?php

use PHPUnit\Framework\TestCase;
//use BinarySearch;

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Binary Search Test Problem
 */
class BinarySearchTest extends TestCase
{
    protected static $binarySearchArray;
    protected static $binarySearch;
    public static function setUpBeforeClass(): void
    {
        self::$binarySearch = new BinarySearch();
        self::$binarySearchArray = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);
    }

    public function testGivenDataIfFoundShouldReturnIndex()
    {
        $lower = 0;
        $higher = count(self::$binarySearchArray)-1;
        $result = self::$binarySearch->search(self::$binarySearchArray, $lower, $higher, 12);
        $this->assertEquals(5, $result);
    }

    public function testGivenDataIfNotFoundShouldReturnFalse()
    {
        $lower = 0;
        $higher = count(self::$binarySearchArray) - 1;
        $result = self::$binarySearch->search(self::$binarySearchArray,$lower, $higher, 5);
        $this->assertEquals(-1, $result);
    }

    public function testGivenParameterIfArrayReturnTrue()
    {
        $result = self::$binarySearch->isArrayType(self::$binarySearchArray);
        $this->assertEquals(true, $result);
    }

    public function testGivenParameterIfArrayReturnFalse()
    {
        $number =  24;
        $result = self::$binarySearch->isArrayType($number);
        $this->assertEquals(false, $result);
    }

    public function testGivenArrayIfSortedReturnTrue()
    {
        $result = self::$binarySearch->isArraySorted(self::$binarySearchArray);
        $this->assertEquals(true, $result);
    }

    public function testGivenArrayIfNotSortedReturnFalse()
    {
        $binarySearchArray = array(10, 33, 7, 25, 14, 2, 88, 66, 9, 1);
        $result = self::$binarySearch->isArraySorted($binarySearchArray);
        $this->assertEquals(false, $result);
    }
}
