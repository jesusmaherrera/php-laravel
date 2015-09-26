<?php

class AutorTest  extends PHPUnit_Framework_TestCase
{
	/** @test */
	function it_should_construct()
	{
		$autor = new \PlatziPHP\Author(
			'jesus@ham.com',
			'platzi',
			'AUTOR_DE_PLATZI'
		);

		$this->assertInstanceOf(\PlatziPHP\Author::class, $autor);
	}


	/** @tests */
	function it_should_fail_is_not_key_given()
	{
		$this->setExpectedException(\InvalidArgumentException::class);
		$autor = new \PlatziPHP\Author(
			'jesus@ham.com',
			'platzi',
			'jesus'
		);

	}
}