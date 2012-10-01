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
	 * A tutorial room
	 *
	 * @var PhpNw12\Workshop\Room
	 */
	private $_room;

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
		$this->_room = new Room();
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
	 * Returns a room
	 *
	 * @return PhpNw12\Workshop\Room
	 */
	public function getRoom()
	{
		return $this->_room;
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
		return ($this->getNumberOfAttendees() < self::MAX_CAPACITY);
	}

	/**
	 * Adds an attendee to the list of attendees
	 *
	 * @param string $name Attendee name
	 *
	 * @return PhpNw12\Workshop\Tutorial
	 * @throws \Exception
	 */
	public function addAttendee($name)
	{
		if (!$this->arePlacesLeft()) {

			throw new \Exception("This tutorial is full. You can't add any more people to it.");
		}

		$this->_attendees[] = $name;
		return $this;
	}

	/**
	 * Displays greetings message on the screen
	 *
	 * @return void
	 */
	public function displaySummary()
	{
	}
}
