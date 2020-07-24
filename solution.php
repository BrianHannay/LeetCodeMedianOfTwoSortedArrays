<?php

/**
 * Problem:
 * https:/leetcode.com/problems/median-of-two-sorted-arrays/
 * There are two sorted arrays nums1 and nums2 of size m and n respectively.
 * Find the median of the two sorted arrays. The overall run time complexity should be O(log (m+n)).
 * You may assume nums1 and nums2 cannot be both empty.
 *
 * Solution:
 * Concatenate the arrays, then sort them. Count the elements in the array. If there are an odd number
 * of elements in the array, return the element exactly halfway through. If there are an even number
 * of elements in the array, return the mean of the 2 middle terms.
 */

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $nums = array_merge($nums1, $nums2);
        sort($nums);
        $size = count($nums);
        if(count($nums) % 2) {
            return $nums[floor($size / 2)];
        } else {
            return ($nums[$size / 2 - 1] + $nums[$size / 2]) / 2;
        }
    }
}
