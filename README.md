Test your code like a pro – PHPUnit in practice
================================================

Usage guide
-----------

### Step by step guide

To follow the tutorial step by step just clone the repository from the master branch (which is empty) and then start merging in each exercise, ie:

```
$ git clone git://github.com/proofek/phpnw12-tutorial.git
$ cd phpnw12-tutorial.git
$ git pull origin exercise-1
$ git pull origin exercise-2
$ git pull origin exercise-3
```

See the commit messages that provide a walkthough guide for every step.

### Checking out specific exercise

To quickly jump to a specific scenario, clone the repository from the master branch (which is empty) and then create a local branch for the specific exercise:

```
$ git clone git://github.com/proofek/phpnw12-tutorial.git
$ cd phpnw12-tutorial.git
$ git checkout -b exercise-1 origin/exercise-1
$ git checkout -b exercise-2 origin/exercise-2
$ git checkout -b exercise-3 origin/exercise-3
```

### Explore on github

You can easily follow every step by just looking at the commit history on github by simply switching between branches from github's UI

Exercise 1: Simple test case
----------------------------

### First test case

We will start with a very simple thing, a function that returns a string. Following the TDD principles we will start with implementing the test first and then implementing the functionality afterwards. Our class will be called Tutorial, it will be in *PhpNw12\Workshop* namespace and our method called *greetings()* will return string “Hello everybody at 'Test your code like a pro – PHPUnit in practice' tutorial”.

So we know now what the code is supposed to do, so let’s write our test first. The test file will be called *TutorialTest.php* and will be in *tests/Workshop* subdirectory:

```php
// tests/Workshop/TutorialTest.php
<?php
/**
 * PHPNW12 Workshop Basic unit test
 *
 * @author Sebastian Marek <proofek@gmail.com>
 */
namespace PhpNw12\Tests\Workshop;


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
}
```

Now. let's run phpunit:

```
$ phpunit tests/Workshop/TutorialTest.php
PHPUnit 3.7.1 by Sebastian Bergmann.


Fatal error: Class 'PhpNw12\Workshop\Tutorial' not found in /Users/smarek/Google Drive/phpnw12-workshop/tests/Workshop/TutorialTest.php on line 24

Call Stack:
    0.0003     639072   1. {main}() /usr/local/bin/phpunit:0
    0.0047    1263248   2. PHPUnit_TextUI_Command::main() /usr/local/bin/phpunit:46
    0.0048    1264264   3. PHPUnit_TextUI_Command->run() /usr/local/share/pear/PHPUnit/TextUI/Command.php:130
    0.0307    4108560   4. PHPUnit_TextUI_TestRunner->doRun() /usr/local/share/pear/PHPUnit/TextUI/Command.php:177
    0.0361    4683816   5. PHPUnit_Framework_TestSuite->run() /usr/local/share/pear/PHPUnit/TextUI/TestRunner.php:325
    0.0363    4684648   6. PHPUnit_Framework_TestSuite->runTest() /usr/local/share/pear/PHPUnit/Framework/TestSuite.php:746
    0.0363    4684648   7. PHPUnit_Framework_TestCase->run() /usr/local/share/pear/PHPUnit/Framework/TestSuite.php:776
    0.0363    4684648   8. PHPUnit_Framework_TestResult->run() /usr/local/share/pear/PHPUnit/Framework/TestCase.php:770
    0.0376    4784808   9. PHPUnit_Framework_TestCase->runBare() /usr/local/share/pear/PHPUnit/Framework/TestResult.php:649
    0.0392    5027072  10. PHPUnit_Framework_TestCase->runTest() /usr/local/share/pear/PHPUnit/Framework/TestCase.php:825
    0.0392    5029200  11. ReflectionMethod->invokeArgs() /usr/local/share/pear/PHPUnit/Framework/TestCase.php:967
    0.0392    5029256  12. PhpNw12\Tests\Workshop\TutorialTest->testGreetingsReturnWelcomeMessage() /usr/local/share/pear/PHPUnit/Framework/TestCase.php:967
```

That’s obviously an expected behavior. We have not implement the class yet. Let’s do this then now.
