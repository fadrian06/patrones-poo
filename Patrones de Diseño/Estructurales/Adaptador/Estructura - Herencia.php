<?php

namespace Services {
	trait Service {
		function serviceMethod($specialData) {
			return sprintf('%s PROCESSED BY %s', $specialData, __CLASS__);
		}
	}
}

namespace Adapters {

	use Application\ExistingClass;
	use Services\Service;

	class Adapter extends ExistingClass {
		use Service;

		function method($data) {
			$specialData = $this->convertToServiceFormat($data);
			return $this->serviceMethod($specialData);
		}

		private function convertToServiceFormat($data) {
			return "{$data} TRANSFORMED";
		}
	}
}

namespace Application {

	use Adapters\Adapter;

	class ExistingClass {
		function method($data) {
			return sprintf('%s PROCESSED BY %s', $data, __CLASS__);
		}
	}

	class Client {
		function __construct(private ExistingClass $existingClass) {
		}

		function processData($data) {
			return $this->existingClass->method($data);
		}
	}

	echo (new Client(new ExistingClass))->processData('Original data');
	echo "\n";
	echo (new Client(new Adapter))->processData('Original data');
}
