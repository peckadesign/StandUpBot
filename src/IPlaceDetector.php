<?php declare(strict_types = 1);

namespace Pd\StandUpBot;

interface IPlaceDetector
{

	public const UP = 'nahoře';
	public const DOWN = 'dole';


	public function getPlace(): string;

}
