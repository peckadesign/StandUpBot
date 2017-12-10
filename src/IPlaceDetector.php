<?php declare(strict_types = 1);

namespace Pd\StandUpBot;

interface IPlaceDetector
{

	public function getPlace(): string;

}
