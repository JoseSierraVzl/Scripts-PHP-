class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {

        $lenght = count($nums);

        for ($i = 0; $i < $lenght-1; $i++) {
            for ($j = $i + 1; $j < $lenght; $j++) {
                if ($nums[$j] + $nums[$i] == $target) {
                    return [$i, $j];
                }
            }
        }
    }
}


$numsInteger = [7,13,22,5];
$target = 27;
$sum = new Solution();
$sum->twoSum($numsInteger, $target);
