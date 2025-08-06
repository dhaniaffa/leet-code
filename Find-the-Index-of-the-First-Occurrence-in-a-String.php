class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $searchStrIndex = strpos($haystack, $needle);

        if ($searchStrIndex === false) {
            return -1;
        }

        return $searchStrIndex;    }
}