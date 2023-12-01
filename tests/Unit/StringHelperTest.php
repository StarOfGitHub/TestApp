<?php

  namespace Tests\Unit;

  use Tests\TestCase;
  use App\StringHelper;

  class StringHelperTest extends TestCase
  {
      public function test_isPalindrome_returns_true_for_palindrome()
      {
          $inputString = "A man, a plan, a canal, Panama!";
          $this->assertTrue(StringHelper::isPalindrome($inputString));
      }

      public function test_isPalindrome_returns_false_for_non_palindrome()
      {
          $inputString = "Hello, World!";
          $this->assertFalse(StringHelper::isPalindrome($inputString));
      }

      public function test_isPalindrome_handles_non_alphanumeric_characters()
      {
          $inputString = "A man, a plan, a canal, Panama!123";
          $this->assertFalse(StringHelper::isPalindrome($inputString));
      }

      public function test_isPalindrome_handles_mixed_casing()
      {
          $inputString = "Able was I ere I saw Elba";
          $this->assertTrue(StringHelper::isPalindrome($inputString));
      }
  }

?>