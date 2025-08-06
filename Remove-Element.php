class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $nums = array_filter($nums, fn($num) => $num !== $val);
        return count($nums);
    }
}