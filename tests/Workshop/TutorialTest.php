<?php
/**
 * PHPNW12 Workshop Basic unit test
 *
 * @author Sebastian Marek <proofek@gmail.com>
 */
namespace PhpNw12\Tests\Workshop;

require_once __DIR__ . '/../../src/Workshop/Tutorial.php';
require_once __DIR__ . '/../../src/Workshop/Room.php';

use PhpNw12\Workshop\Tutorial;

/**
 * Tutorial class test case
 *
 * @author Sebastian Marek <proofek@gmail.com>
 */
class TutorialTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Very simple test verifying the welcome message text
	 */
	public function testGreetingsReturnWelcomeMessage()
	{
		$tutorial = new Tutorial();
		$result = $tutorial->greetings();

		$expectedMessage = "Hello everybody at 'Test your code like a pro – PHPUnit in practice' tutorial";
		$this->assertEquals($expectedMessage, $result);
	}

	/**
	 * @test
	 *
	 * A test making sure getAttendees returns an array
	 */
	public function GetAttendeesReturnsListOfNames()
	{
		$tutorial = new Tutorial();
		$result = $tutorial->getAttendees();
		$this->assertInternalType('array', $result);
	}

	/**
	 * Checks that if there are more then 3 attendees there are no places left
	 */
	public function testTutorialHasNoPlacesLeftWhenMoreThen3Attendees()
	{
		$attendees = array(
			"Sebastian Marek",
			"Tom",
			"Martha",
			"John"
		);

		$tutorial = new Tutorial($attendees);
		$this->assertFalse($tutorial->arePlacesLeft());
	}

	/**
	 * Checks that if there are less then 3 attendees there are still some places left
	 */
	public function testTutorialHasPlacesLeftWhenLessThen3Attendees()
	{
		$attendees = array(
			"Sebastian Marek"
		);

		$tutorial = new Tutorial($attendees);
		$this->assertTrue($tutorial->arePlacesLeft());
	}

	/**
	 * Checks whether we have not exceeded maximum number of attendees
	 */
	public function testTutorialIsNotFullWhenItNotExceedsMaximumCapacity()
	{
		$attendees = array(
			"Sebastian Marek"
		);
		$tutorial = new Tutorial($attendees);

		$this->assertGreaterThan(0, $tutorial->getNumberOfAttendees());
		$this->assertLessThan(Tutorial::MAX_CAPACITY, $tutorial->getNumberOfAttendees());
		$this->assertNotNull($tutorial->getNumberOfAttendees());
	}

	/**
	 * Checks whether a room has been prepared
	 */
	public function testRoomIsAvailable()
	{
		$tutorial = new Tutorial();
		$this->assertInstanceOf('PhpNw12\Workshop\Room',
		$tutorial->getRoom());
	}

	/**
	 * Checks whether an attendee got added to the tutorial
	 */
	public function testAttendeeGotAddedToTheList()
	{
		$me = "Sebastian Marek";
		$attendees = array(
			$me
		);
		$tutorial = new Tutorial($attendees);
		$this->assertContains($me, $tutorial->getAttendees());
	}

	/**
	 * Checks whether the number of attendees is correct
	 */
	public function testGetAttendeesReturnCorrectNumberOfAttendees()
	{
		$me = "Sebastian Marek";
		$anotherPerson = "John Smith";
		$attendees = array(
			$me, $anotherPerson
		);
		$tutorial = new Tutorial($attendees);
		$this->assertCount(count($attendees), $tutorial->getAttendees());
	}

	/**
	 * Makes sure you can't add more attendees to oversubscribed tutorial
	 */
	public function testAddAttendeeThrowsExceptionWhenAddingNewPersonToFullTutorial()
	{
		$me = "Sebastian Marek";
		$anotherPerson = "John Smith";
		$yetAnotherPerson = "Peter Baker";
		$attendees = array(
			$me, $anotherPerson, $yetAnotherPerson
		);

		$tutorial = new Tutorial($attendees);

		try {

			$newPerson = "Adam Late";
			$tutorial->addAttendee($newPerson);

		} catch (\Exception $e) {

			$this->assertEquals(
				"This tutorial is full. You can't add any more people to it.",
				$e->getMessage()
			);
			return;
		}

		$this->fail("'\Exception' was expected to be thrown, but wasn't");
	}
}
