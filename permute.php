<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums) {
        $result = array();
        $this->backTracking($nums, count($nums), 0, array(), $result);
        return $result;
    }
    
    function backTracking($nums, $numsLength, $startIndex, $permutation, &$result) {
       
        if (count($permutation) == $numsLength) {
            array_push($result, $permutation);
            return;
        }
        
        for($i = $startIndex; $i < $numsLength; $i++) {
            if (!in_array($nums[$i], $permutation)) {
                array_push($permutation, $nums[$i]);
                $this->backTracking($nums, $numsLength, 0, $permutation, $result);
                array_pop($permutation);
            }
            
        }
    }
    
}

$solv = new Solution();
echo "<pre>";
print_r($solv->permute([1,2,3,4]);

