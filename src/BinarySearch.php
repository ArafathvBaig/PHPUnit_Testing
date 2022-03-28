<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Binary Search Problem
 */
class BinarySearch
{
    /**
     * Function for Searching the Element in the array
     * Passing array, lower index, higher index and element to search as parameter
     * returns the index of element, if present
     * else returns -1 
     */
    function search($searchArray, $lower, $higher, $searchElement)
    {
        // $lower = 0;
        // $higher = count($searchArray) - 1;
        if ($higher >= $lower) {
            $mid = ceil($lower + ($higher - $lower) / 2);

            if ($searchArray[$mid] == $searchElement) {
                return $mid;
            } elseif ($searchArray[$mid] > $searchElement) {
                return $this->search($searchArray, $lower, $mid - 1, $searchElement);
            } else {
                return $this->search($searchArray, $mid + 1, $higher, $searchElement);
            }
        } else {
            return -1;
        }
    }

    /**
     * Function to check whether the given parameter is 
     * of type array or not
     * Returns True if array, else return False
     */
    function isArrayType($binarySearchArray)
    {
        $type = gettype($binarySearchArray);
        if ($type == "array") {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Function to check the given array is sorted or not
     * Passing the array as parameter
     * Return True if sorted, else return False
     */
    function isArraySorted($binarySearchArray)
    {
        $array = $binarySearchArray;
        sort($array);
        if ($array == $binarySearchArray) {
            return true;
        } else {
            return false;
        }
        // foreach ($binarySearchArray as $values) {
        //     echo $values . " ";
        // }
        // echo "\n";
        // foreach ($array as $values) {
        //     echo $values . " ";
        // }
    }
}
// $obj = new BinarySearch();
// $array = array(11, 44, 6, 18, 10);
// echo $obj->isArraySorted($array);
