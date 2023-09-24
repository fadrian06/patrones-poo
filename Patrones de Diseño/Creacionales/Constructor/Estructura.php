<?php

namespace Builders {

	use Products\Product1;
	use Products\Product2;

	interface Builder {
		function reset();
		function buildStepA();
		function buildStepB();
		function buildStepZ();
	}

	class ConcreteBuilder1 implements Builder {
		private Product1 $result;

		function reset() {
			$this->result = new Product1;
		}

		function buildStepA() {
			$this->result->setFeatureA();
		}

		function buildStepB() {
			$this->result->setFeatureB();
		}

		function buildStepZ() {
			$this->result->setFeatureZ();
		}

		function getResult(): Product1 {
			return $this->result;
		}
	}

	class ConcreteBuilder2 implements Builder {
		private Product2 $result;

		function reset() {
			$this->result = new Product2;
		}

		function buildStepA() {
			$this->result->setFeatureA();
		}

		function buildStepB() {
			$this->result->setFeatureB();
		}

		function buildStepZ() {
			$this->result->setFeatureZ();
		}

		function getResult(): Product2 {
			return $this->result;
		}
	}
}

namespace Products {
	class Product1 {
		function setFeatureA() {
		}

		function setFeatureB() {
		}

		function setFeatureZ() {
		}
	}

	class Product2 {
		function setFeatureA() {
		}

		function setFeatureB() {
		}

		function setFeatureZ() {
		}
	}
}

namespace App {

	use Builders\Builder;
	use Builders\ConcreteBuilder1;

	class Director {
		function __construct(private Builder $builder) {
		}

		function changeBuilder(Builder $builder) {
			$this->builder = $builder;
		}

		function make($type = 'simple') {
			$this->builder->reset();

			if ($type === 'simple') {
				$this->builder->buildStepA();
			} else {
				$this->builder->buildStepB();
				$this->builder->buildStepZ();
			}
		}
	}

	function client() {
		$b = new ConcreteBuilder1;
		$d = new Director($b);
		$d->make();
		$p = $b->getResult();

		print_r($p);
	}

	client();
}
