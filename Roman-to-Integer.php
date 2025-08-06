class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $roman = [
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000,
            "IV" => 4,
            "IX" => 9,
            "XL" => 40,
            "XC" => 90,
            "CD" => 400,
            "CM" => 900,
        ];


        $count = 0;

        $arr = str_split($s);

        $temp = [];

        for ($i = 0; $i < count($arr); $i++) {
            $merge = end($temp) . $arr[$i];
            if (array_key_exists($merge, $roman)) {
                array_pop($temp);
                array_push($temp, $merge);
            } else {
                array_push($temp, $arr[$i]);
            }
        }

        foreach ($temp as $i) {
            $count += $roman[$i];
        }

        return $count;
    }
}