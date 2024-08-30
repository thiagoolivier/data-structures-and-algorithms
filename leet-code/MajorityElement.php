<?php

// Find the number that appears the most in the array.
class MajorityElement
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public static function execute($nums) {
        $counter = [];
        
        $bigest = [
            'key' => 0,
            'value' => 0
        ];

        foreach ($nums as $num) {
            if (isset($counter[$num])) {
                $counter[$num]++;
            } else {
                $counter[$num] = 1;
            }
        }

        foreach ($counter as $key => $value) {
            if ($value > $bigest['value']) {
                $bigest['key'] = $key;
                $bigest['value'] = $value;
            }
        }

        return $bigest['key'];
    }

    public static function runTests() {
        $testCases = [
            [
                'id' => 1,
                'input' => [3,2,3],
                'expectedReturn' => 3,
            ],
            [
                'id' => 2,
                'input' => [1,1,2],
                'expectedReturn' => 1,
            ],
            [
                'id' => 3,
                'input' => [1,1,2,2,2],
                'expectedReturn' => 2,
            ],
            [
                'id' => 4,
                'input' => [2,2,1,1,1,2,2],
                'expectedReturn' => 2,
            ],
            [
                'id' => 5,
                'input' => [3,4,5,5,5],
                'expectedReturn' => 5,
            ],
        ];

        foreach ($testCases as $testCase) {
            $id = $testCase['id'];
            $input = $testCase['input'];
            $expectedReturn = $testCase['expectedReturn'];

            $output = MajorityElement::execute($input);

            if ($output != $expectedReturn) {
                echo "--------------------------------------- \n";
                echo "Test case $id failed\n";
                echo "Output: $output \n";
                echo "Expected: $expectedReturn \n";
            } else {
                echo "--------------------------------------- \n";
                echo "Test case $id passed\n";
                echo "Output: $output \n";
                echo "Expected: $expectedReturn \n";
            }
        }
        echo "--------------------------------------- \n";
    }
}

MajorityElement::runTests();