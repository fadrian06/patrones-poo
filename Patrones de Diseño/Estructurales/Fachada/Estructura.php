<?php

namespace Subsystem {
	class SubsystemClass1 {
		function operation() {
			printf("Executing operation from %s\n", __CLASS__);
		}
	}

	class SubsystemClass2 {
		function operation() {
			printf("Executing operation from %s\n", __CLASS__);
		}
	}
}

namespace Facades {

	use Subsystem\SubsystemClass1;
	use Subsystem\SubsystemClass2;

	class Facade {
		private array $linksToSubsystemObjects;
		private AdditionalFacade $optionalAdditionalFacade;

		function __construct() {
			$this->linksToSubsystemObjects[SubsystemClass1::class] = new SubsystemClass1;
			$this->optionalAdditionalFacade = new AdditionalFacade;
		}

		function subsystemOperation() {
			$this->linksToSubsystemObjects[SubsystemClass1::class]->operation();
			$this->optionalAdditionalFacade->additionalOperation();
		}
	}

	class AdditionalFacade {
		private array $linksToSubsystemObjects;

		function __construct() {
			$this->linksToSubsystemObjects[SubsystemClass2::class] = new SubsystemClass2;
		}

		function additionalOperation() {
			$this->linksToSubsystemObjects[SubsystemClass2::class]->operation();
		}
	}
}

namespace Client {

	use Facades\Facade;

	$facade = new Facade;
	$facade->subsystemOperation();
}
