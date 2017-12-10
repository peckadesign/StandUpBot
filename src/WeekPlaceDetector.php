<?php declare(strict_types = 1);

namespace Pd\StandUpBot;

final class WeekPlaceDetector implements IPlaceDetector
{

	/**
	 * @var IDateTimeProvider
	 */
	private $dateTimeProvider;


	public function __construct(
		IDateTimeProvider $dateTimeProvider
	) {
		$this->dateTimeProvider = $dateTimeProvider;
	}


	public function getPlace(): string
	{
		$now = $this->dateTimeProvider->getDateTime();
		$weekNumber = (int) $now->format('W');

		return $weekNumber % 2 === 0 ? self::DOWN : self::UP;
	}

}
