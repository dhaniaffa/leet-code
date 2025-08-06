class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $string = (string) $x;
        $length = strlen($string);
        $tmp = "";
        for($i = $length; $i >= 0; $i--)
        {
            $tmp .= $string[$i];
        }

        if((int)$tmp === $x)
        {
            return TRUE;
        }else {
            return FALSE;
        }
    }
}