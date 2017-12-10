<?php declare(strict_types = 1);

namespace Pd\StandUpBot;

final class Bot
{

	/**
	 * @var IPlaceDetector
	 */
	private $placeDetector;


	public function __construct(
		IPlaceDetector $placeDetector
	)
	{
		$this->placeDetector = $placeDetector;
	}


	public function speech(): string
	{
		$place = $this->placeDetector->getPlace();
		return sprintf("Za 5 minut denní stand-up u programátorů %s", mb_strtoupper($place));
	}

}
