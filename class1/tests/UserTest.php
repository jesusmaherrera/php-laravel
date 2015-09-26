<?php
class UserTest extends PHPUnit_Framework_TestCase
{
	/** @test */
	function is_should_be_able_to_contruct()
	{
		$user = new \PlatziPHP\User('jesus@hotmail.com', 'jesus');

		$this->assertInstanceOf(\PlatziPHP\User::class, $user);

	}

	/** @test */
	function it_should_have_a_fisrt_name()
	{
		$user = new \PlatziPHP\User('jesus@man.com','123');

		$user->setName('jesus', 'herrera');

		$name =  $user->getFirstName();
		$this->assertEquals('jesus', $name);
	}

}