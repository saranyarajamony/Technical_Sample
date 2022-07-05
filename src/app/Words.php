<?php

declare(strict_types=1);

namespace  App;


class Words
{
   /**
    * Checks if the passed argument is a heterogram
    * If argument is invalid , throw exception
    *
    */

   public function isHeterogram(String $word): bool
   {

      //if empty or not a string type argument, throw exception
      if (empty($word) || preg_match('/[^A-Za-z-]/', $word)) {
         throw new \InvalidArgumentException();
      }

      $word = preg_replace('/[^A-Za-z]/u','', strip_tags($word));
      foreach (count_chars(strtolower($word), 1) as $i => $val) {

         if ($val > 1) {
            return false;
         }
      }
      return true;
   }
}
