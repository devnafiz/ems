<?php

  use Illuminate\Support\Facades\Auth;



  if (!function_exists('generate_number')) {
    function generate_number($id, $length, $user)
    {
        $unique_number = $user . str_pad($id, $length, '0', STR_PAD_LEFT);
        return $unique_number;
    }
 }
 if (!function_exists('bangla_number')) {
    function bangla_number($int)
    {
        $engNumber = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
        $bangNumber = ['১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০'];
        $converted = str_replace($engNumber, $bangNumber, $int);
        return $converted;
    }
}

?>
