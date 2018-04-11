<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase
{
	public function input_data_provider()
	{
		return [
			'Number 1 should returns 1' => [1, 1],
			'Number 4 should returns 4' => [4, 4],
			'Number 3 is divisible by 3 so it should return Fizz'
				 => [3, 'Fizz'],
			'Number 6 is divisible by 3 so it should return Fizz'
				 => [6, 'Fizz'],
			'Number 5 is divisible by 5 so it should return Buzz'
				 => [5, 'Buzz'],
			'Number 10 is divisible by 5 so it should return Buzz'
				 => [10, 'Buzz'],
			'Number 15 is divisible by 3 and 5 so it should return FizzBuzz'
				 => [15, 'FizzBuzz'],
			'Number 30 is divisible by 3 and 5 so it should return FizzBuzz'
				 => [30, 'FizzBuzz']

		];
	}

	/**
	* @dataProvider input_data_provider
	*/
	public function test_fizzbuzz($input, $expected)
	{
		$fizzbuzz = new FizzBuzz();
		$result = $fizzbuzz->generate($input);

		$this->assertEquals($expected, $result);
	}
}
