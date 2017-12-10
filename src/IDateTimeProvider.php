<?php declare(strict_types = 1);

namespace Pd\StandUpBot;

interface IDateTimeProvider
{

	public function getDateTime(): \DateTimeImmutable;

}
