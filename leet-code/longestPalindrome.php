<?php

class Solution {    
    /**
     * Returns the highest length of a palindrome built from $s.
     * @param string $s
     * @return int
     */
    public static function longestPalindrome($s) {
        $n = strlen($s);
        if ($n < 1) return 0;

        $hashMap = [];

        for ($i = 0; $i <= $n - 1; $i++) {
            if (isset($hashMap[$s[$i]])) {
                $hashMap[$s[$i]]++;
            } else {
                $hashMap[$s[$i]] = 1;
            }
        }

        $result = 0;
        $oddFound = false;

        foreach ($hashMap as $key => $value) {
            if ($value % 2 === 0) {
                $result += $value;
            } else {
                $result += $value - 1;
                $oddFound = true;
            }
        }

        if ($oddFound) {
            $result += 1;
        }

        return $result;
    }
}

echo Solution::longestPalindrome("");
echo "\n";
