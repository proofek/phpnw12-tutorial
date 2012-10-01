<?php
/**
 * PHPNW12 Workshop
 *
 * @author Sebastian Marek <proofek@gmail.com>
 */

namespace PhpNw12\Tests\Workshop;

require_once __DIR__ . '/../../src/Workshop/Room.php';

use PhpNw12\Workshop\Room;

/**
 * Room class test case
 *
 * @author Sebastian Marek <proofek@gmail.com>
 */
class RoomTest extends \PHPUnit_Framework_TestCase
{
	public function testIncludeDependenciesThrowsWarningForMissingFiles()
	{
		$room = new Room();
		$room->includeDependencies();
	}
}