<?php declare(strict_types = 1);

include __DIR__ . '/../vendor/autoload.php';

$containerLoader = new \Nette\DI\ContainerLoader(__DIR__ . '/../temp');
$containerClass = $containerLoader->load(function (\Nette\DI\Compiler $container) {
	$container->loadConfig(__DIR__ . '/../config/config.neon');
	$container->loadConfig(__DIR__ . '/../config/config.local.neon');
	$container->addExtension('holidays', new \Pd\Holidays\DI\Extension());
});

/** @var \Nette\DI\Container $container */
$container = new $containerClass();

/** @var \Pd\StandUpBot\Command $command */
$command = $container->getByType(\Pd\StandUpBot\Command::class);

$command->execute();
