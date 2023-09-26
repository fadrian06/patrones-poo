<?php

namespace Components {
	interface Component {
		function execute();
	}

	class Leaf implements Component {
		function execute() {
			printf("Executing from %s\n", __CLASS__);
		}
	}

	class Composite implements Component {
		/** @var Component[] */
		private array $children = [];

		function add(Component $c) {
			$this->children[] = $c;
		}

		function remove(Component $c) {
			$filter = fn (Component $child) => $child != $c;

			$this->children = array_filter($this->children, $filter);
		}

		function getChildren() {
			return $this->children;
		}

		function execute() {
			foreach ($this->children as $child) {
				$child->execute();
			}
		}
	}
}

namespace Application {

	use Components\Component;
	use Components\Composite;
	use Components\Leaf;

	class Client {
		function __construct(private Component $component) {
		}

		function execute() {
			$this->component->execute();
		}
	}

	$composite = new Composite;
	$leaf1 = new Leaf;

	$subComposite = new Composite;
	$subComposite->add(new Leaf);
	$subComposite->add(new Leaf);

	$composite->add($subComposite);
	$composite->add($leaf1);

	(new Client($composite))->execute();
}
