<?php

class PostTest  extends PHPUnit_Framework_TestCase
{
	/** @test */
	function it_give_user_the_author_name()
	{
		$autor = new \PlatziPHP\Author(
			'jesus@ham.com',
			'platzi',
			'AUTOR_DE_PLATZI'
		);

		$autor->setName('jesus', 'HERRERA');

		$post = new \PlatziPHP\Post($autor, 'titulo', 'body');
		$this->assertEquals('by jesus', $post->getAuthor());

	}
}