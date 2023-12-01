<?php

  namespace Tests\Unit;

  use Tests\TestCase;
  use App\ArrayHelper;

  class ArrayHelperTest extends TestCase {
    public function test_getUniqueNumbers_removes_duplicates_and_preserves_order()
    {
        $inputArray = [1, 2, 3, 4, 2, 1, 5];
        $expectedResult = [1, 2, 3, 4, 5];

        $result = ArrayHelper::getUniqueNumbers($inputArray);

        $this->assertEquals($expectedResult, $result);
    }

    public function test_getUniqueNumbers_handles_empty_array()
    {
        $inputArray = [];
        $expectedResult = [];

        $result = ArrayHelper::getUniqueNumbers($inputArray);

        $this->assertEquals($expectedResult, $result);
    }

    public function test_getUniqueNumbers_handles_arrays_with_duplicates()
    {
        $inputArray = [1, 1, 2, 2, 3, 3];
        $expectedResult = [1, 2, 3];

        $result = ArrayHelper::getUniqueNumbers($inputArray);

        $this->assertEquals($expectedResult, $result);
    }
  }

?>