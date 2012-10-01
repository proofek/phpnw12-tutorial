<?php
/**
 * PHPNW12 Workshop Basic unit test
 *
 * @author Sebastian Marek <proofek@gmail.com>
 */
namespace PhpNw12\Tests\Workshop;

require_once __DIR__ . '/../../src/Workshop/Tutorial.php';

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
}
