class Solution {

    /**
     * @param Integer $n
     * @return Float
     */
    function soupServings($n) {
        if ($n > 5000) {
            return 1.0;
        }
        $unit = (int) ceil($n / 25);
        $temp = [];

        return $this->probability($unit, $unit, $temp);
    }

    function probability($soupA, $soupB, &$temp) {
        if ($soupA <= 0 && $soupB <= 0) return 0.5;
        if ($soupA <= 0) return 1.0;
        if ($soupB <= 0) return 0.0;

        if (isset($temp[$soupA][$soupB])) {
            return $temp[$soupA][$soupB];
        }

        $res = 0.25 * (
            $this->probability($soupA - 4, $soupB, $temp) +
            $this->probability($soupA - 3, $soupB - 1, $temp) +
            $this->probability($soupA - 2, $soupB - 2, $temp) +
            $this->probability($soupA - 1, $soupB - 3, $temp)
        );

        $temp[$soupA][$soupB] = $res;
        return $res;
    }
}