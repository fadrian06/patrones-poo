<?php

namespace Adapters {

	use Application\ClientInterface;
	use Services\Service;

	class Adapter implements ClientInterface {
		private Service $adaptee;

		function __construct() {
			$this->adaptee = new Service;
		}

		function method($data) {
			$specialData = $this->convertToServiceFormat($data);
			return $this->adaptee->serviceMethod($specialData);
		}

		private function convertToServiceFormat($data) {
			return "{$data} TRANSFORMED";
		}
	}
}

namespace Services {
	class Service {
		function serviceMethod($specialData) {
			return "{$specialData} PROCESSED";
		}
	}
}

namespace Application {

	use Adapters\Adapter;

	class Client {
		function __construct(private ClientInterface $service) {
		}

		function processData($data) {
			return $this->service->method($data);
		}
	}

	interface ClientInterface {
		function method($data);
	}

	echo (new Client(new Adapter))->processData('Original data');
}
