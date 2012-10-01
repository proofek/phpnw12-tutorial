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
	 * Maximum capacity of the tutorial
	 *
	 * @var integer
	 */
	const MAX_CAPACITY = 3;

	/**
	 * Constructor initiates the list of attendees
	 *
	 * @return void
	 */
	public function __construct(array $attendees = array())
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

	/**
	 * Returns the number of attendees
	 *
	 * @return int
	 */
	public function getNumberOfAttendees()
	{
		return count($this->getAttendees());
	}

	/**
	 * Are there any more places left for the tutorial
	 *
	 * @return Boolean
	 */
	public function arePlacesLeft()
	{
		return ($this->getNumberOfAttendees() <= self::MAX_CAPACITY);
	}
}
