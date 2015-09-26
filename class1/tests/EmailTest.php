<?php
use PlatziPHP\Email;

class EmailTest  extends PHPUnit_Framework_TestCase
{
	/** @test */
	function it_assert_if_addres_is_correct()
	{
		$email = new Email('jesus@ham.com');

		$this->assertInstanceOf(Email::class, $email);
	}

	/** @test */
	function it_fail_if_addres_is_incorrect()
	{
		$this->setExpectedException(\InvalidArgumentException::class);

		$email = new Email('jesusham.com');

	}
}