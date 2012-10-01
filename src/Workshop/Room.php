<?php
/**
 * PHPNW12 Workshop
 *
 * @author Sebastian Marek proofek@gmail.com
 */

namespace PhpNw12\Workshop;

/**
 * Room class
 *
 * @author Sebastian Marek proofek@gmail.com
 */
class Room
{
	/**
	 * Completely ridiculous method only written to show how to catch PHP E_WARNINGS
	 *
	 * @obsolete
	 *
	 * @return void
	 */
	public function includeDependencies()
	{
		include_once 'file/that/not/exists';
	}
}