<?php declare(strict_types = 1);

namespace PdTests\StandUpBot\Bot;

include __DIR__ . '/../../vendor/autoload.php';

final class SpeechTest extends \Tester\TestCase
{

	public function testSpeech(): void
	{
		$placeDetector = new class implements \Pd\StandUpBot\IPlaceDetector
		{

			public function getPlace(): string
			{
				return 'u programátorů NA MÍSTĚ';
			}
		};

		$bot = new \Pd\StandUpBot\Bot($placeDetector);
		$message = $bot->speech();

		\Tester\Assert::equal('Za 5 minut denní stand-up u programátorů NA MÍSTĚ', $message);
	}

}

(new SpeechTest())->run();
