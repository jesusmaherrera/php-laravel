<?php
namespace PlatziPHP;

class Email
{
	private $address;

	public function __construct($address)
	{
		if (!filter_var($address, FILTER_VALIDATE_EMAIL)) {
			throw new \InvalidArgumentException('Invalid email addres: [$address]');
		}

		$this->address;
	}

	public function getAddress()
	{
		return $this->address;
	}
}