<?php

namespace Products {
	abstract class ProductA {
	}

	abstract class ProductB {
	}
}

namespace Products\Family1 {

	use Products\ProductA;
	use Products\ProductB;

	class ConcreteProductA1 extends ProductA {
	}

	class ConcreteProductB1 extends ProductB {
	}
}

namespace Products\Family2 {

	use Products\ProductA;
	use Products\ProductB;

	class ConcreteProductA2 extends ProductA {
	}

	class ConcreteProductB2 extends ProductB {
	}
}

namespace Factories {

	use Products\Family1\ConcreteProductA1;
	use Products\Family1\ConcreteProductB1;
	use Products\Family2\ConcreteProductA2;
	use Products\Family2\ConcreteProductB2;
	use Products\ProductA;
	use Products\ProductB;

	interface AbstractFactory {
		function createProductA(): ProductA;
		function createProductB(): ProductB;
	}

	class ConcreteFactory1 implements AbstractFactory {
		function createProductA(): ProductA {
			return new ConcreteProductA1;
		}

		function createProductB(): ProductB {
			return new ConcreteProductB1;
		}
	}

	class ConcreteFactory2 implements AbstractFactory {
		function createProductA(): ProductA {
			return new ConcreteProductA2;
		}

		function createProductB(): ProductB {
			return new ConcreteProductB2;
		}
	}
}

namespace App {

	use Factories\AbstractFactory;
	use Factories\ConcreteFactory1;
	use Factories\ConcreteFactory2;

	class Client {
		function __construct(private AbstractFactory $factory) {
		}

		function someOperation() {
			$pa = $this->factory->createProductA();

			print_r($pa);
		}
	}

	(new Client(new ConcreteFactory1))->someOperation();
	(new Client(new ConcreteFactory2))->someOperation();
}
