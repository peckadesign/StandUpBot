<?php declare(strict_types = 1);

namespace Pd\StandUpBot;

final class NowDateTimeProvider implements IDateTimeProvider
{

	public function getDateTime(): \DateTimeImmutable
	{
		return new \DateTimeImmutable();
	}

}
