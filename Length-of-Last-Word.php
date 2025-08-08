class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $strArr = explode(" ", trim($s));
        return strlen(end($strArr));
    }
}