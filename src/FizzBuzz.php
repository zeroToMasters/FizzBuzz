<?php

namespace App;

class FizzBuzz
{
	private function isBuzz(int $number)
	{
		return $number % 5 == 0;
	}

	private function isFizz(int $number)
	{
		return $number % 3 == 0;
	}

	public function generate(int $number)
	{
		if ($this->isFizz($number) && $this->isBuzz($number)) {
			return 'FizzBuzz';
		}

		if ($this->isFizz($number)) {
			return 'Fizz';
		}

		if ($this->isBuzz($number)) {
			return 'Buzz';
		}

		return $number;
	}
}