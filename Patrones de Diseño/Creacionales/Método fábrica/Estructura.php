<?php

namespace Products {
	interface Product {
		function doStuff();
	}

	class ConcreteProductA implements Product {
		function doStuff() {
			echo __CLASS__ . " doing stuff\n";
		}
	}

	class ConcreteProductB implements Product {
		function doStuff() {
			echo __CLASS__ . " doing stuff\n";
		}
	}
}

namespace Creators {

	use Products\ConcreteProductA;
	use Products\ConcreteProductB;
	use Products\Product;

	abstract class Creator {
		function someOperation() {
			$p = $this->createProduct();
			$p->doStuff();
		}

		abstract function createProduct(): Product;
	}

	class ConcreteCreatorA extends Creator {
		function createProduct(): Product {
			return new ConcreteProductA;
		}
	}

	class ConcreteCreatorB extends Creator {
		function createProduct(): Product {
			return new ConcreteProductB;
		}
	}
}

namespace App {

	use Creators\ConcreteCreatorA;
	use Creators\ConcreteCreatorB;
	use Creators\Creator;

	function client(Creator $creator) {
		$creator->someOperation();
	}

	client(new ConcreteCreatorA);
	client(new ConcreteCreatorB);
}
