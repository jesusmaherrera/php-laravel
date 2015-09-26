<?php
namespace PlatziPHP;

class User 
{
	/**
	* @type string
	*/
	protected $email;

	/**
	 * @type string
	 */
	protected $password;
	
	/**
	 * @type string
	 */
	protected $firstname;

	/**
	 * @type string
	 */
	protected $lastname;

	public function __construct($email, $password)
	{
		$this->email = $email;
		$this->password = password_hash($password, PASSWORD_DEFAULT);

	}

	/**
	 * @return string	 
	 */
	public function setName($firstname, $lastname)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;

	}

	/**
	 * @return string	 
	 */
	public function getFirstName(){
		return $this->firstname;
	}
}
?>