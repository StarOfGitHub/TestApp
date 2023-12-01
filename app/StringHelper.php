<?php

  namespace App;

  class StringHelper
  {
      public static function isPalindrome(string $str): bool
      {
          $cleanedStr = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($str));

          return $cleanedStr === strrev($cleanedStr);
      }
  }

?>