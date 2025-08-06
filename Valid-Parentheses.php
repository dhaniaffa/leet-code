class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $arr = str_split($s);

        $brackets = [
            "(" => ")",
            "[" => "]",
            "{" => "}",
        ];

        $openBracket = [];

        foreach ($arr as $str) {
            if (array_key_exists($str, $brackets)) {
                array_push($openBracket, $str);
            } else {
                $lastOpen = end($openBracket);
                $pairBracket = $brackets[$lastOpen];
                if ($str === $pairBracket) {
                    array_pop($openBracket);
                } else {
                    return false;
                }
            }
        }

        if (empty($openBracket)) {
            return true;
        }

        return false;


    }
}