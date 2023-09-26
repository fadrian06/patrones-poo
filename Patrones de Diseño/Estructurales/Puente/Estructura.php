<?php

namespace Abstractions {

	use Implementations\Implementation;

	class Abstraction {
		function __construct(protected Implementation $implementation) {
		}

		function feature1() {
			$this->implementation->method1();
		}

		function feature2() {
			$this->implementation->method2();
			$this->implementation->method3();
		}
	}

	class RefinedAbstraction extends Abstraction {
		function featureN() {
			$this->implementation->methodN();
			$this->implementation->methodM();
		}
	}
}

namespace Implementations {
	interface Implementation {
		function method1();
		function method2();
		function method3();
		function methodN();
		function methodM();
	}

	class ConcreteImplementation1 implements Implementation {
		function method1() {
		}
		function method2() {
		}
		function method3() {
		}
		function methodN() {
		}
		function methodM() {
		}
	}

	class ConcreteImplementation2 implements Implementation {
		function method1() {
		}
		function method2() {
		}
		function method3() {
		}
		function methodN() {
		}
		function methodM() {
		}
	}
}

namespace Client {

	use Abstractions\Abstraction;
	use Implementations\ConcreteImplementation1;

	$abstraction = new Abstraction(new ConcreteImplementation1);
	$abstraction->feature1();
}
