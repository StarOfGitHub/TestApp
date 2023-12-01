<?php

  namespace App;

  class ArrayHelper {
    public static function getUniqueNumbers(array $numbers): array {
      return array_values(array_unique($numbers));
    }
  }

?>