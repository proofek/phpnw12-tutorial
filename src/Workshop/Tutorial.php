<?php
/**
 * PHPNW12 Workshop
 *
 * @author Sebastian Marek <proofek@gmail.com>
 */
namespace PhpNw12\Workshop;

/**
 * Tutorial class
 *
 * @author Sebastian Marek <proofek@gmail.com>
 */

class Tutorial
{

	/**
	 * List of people attending the tutorial
	 *
	 * @var array
	 */
	private $_attendees;

	/**
	 * Constructor initiates the list of attendees
	 *
	 * @return void
	 */
	public function __construct(array $attendees)
	{
		$this->_attendees = $attendees;
	}

	/**
	 * Returns a greetings message
	 *
	 * @return string
	 */
	public function greetings()
	{
		return "Hello everybody at 'Test your code like a pro – PHPUnit in practice' tutorial";
	}

	/**
	 * Returns a list of tutorial attendees
	 *
	 * @return array
	 */
	public function getAttendees()
	{
		return $this->_attendees;
	}
}
