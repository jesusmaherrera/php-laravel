<?php
namespace PlatziPHP;

class Post
{
	/**
	* @type string
	*/
	protected $author;

	/**
	 * @type string
	 */
	protected $title;

	/**
	 * @type string
	 */
	protected $body;

	public function __construct(Author $author, $title, $body)
	{
		$this->author = $author;
		$this->title = $title;
		$this->body = $body;
	}

	public function getBody()
	{
		return $this->body;
	}

	public function getAuthor()
	{
		return 'by '.$this->author->getFirstName();
	}
}