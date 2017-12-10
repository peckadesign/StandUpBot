<?php declare(strict_types = 1);

namespace PdTests\StandUpBot\WeekPlaceDetector;

include __DIR__ . '/../../vendor/autoload.php';

final class GetPlaceTest extends \Tester\TestCase
{

	public function getTestGetPlaceData(): array
	{
		return [
			['2017-12-06', 'u programátorů NAHOŘE'],
			['2017-12-13', 'u programátorů DOLE'],
		];
	}


	/**
	 * @dataProvider getTestGetPlaceData
	 */
	public function testGetPlace(string $date, string $expectedPlace): void
	{
		$dateTimeProvider = new class($date) implements \Pd\StandUpBot\IDateTimeProvider
		{

			/**
			 * @var string
			 */
			private $date;


			public function __construct(string $date)
			{

				$this->date = $date;
			}


			public function getDateTime(): \DateTimeImmutable
			{
				return new \DateTimeImmutable($this->date);
			}
		};

		$placeDetector = new \Pd\StandUpBot\WeekPlaceDetector($dateTimeProvider);
		$place = $placeDetector->getPlace();

		\Tester\Assert::equal($expectedPlace, $place);
	}

}

(new GetPlaceTest())->run();
