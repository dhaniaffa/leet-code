class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $unique = [];

        foreach ($nums as $num) {
            if (!in_array($num, $unique)) {
                array_push($unique, $num);
            }
        }

        $nums = $unique;

        return count($unique);
    }
}