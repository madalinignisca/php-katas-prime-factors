<?php

class PrimeFactors
{

  /**
   * Given a number will return all it's prime factors
   *
   * @param mixed $number
   *
   * @return array
   */
  public function generate($number) {
    $primes = [];

    for($candidate = 2; $number > 1; $candidate++) {

      for (; $number % $candidate == 0; $number /= $candidate) {
        $primes[] = $candidate;
      }

    }

    if ($number > 1) {
      $primes[] = $number;
    }

    return $primes;
  }
}
