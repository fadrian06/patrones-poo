<?php

namespace Components {
	interface Component {
		function execute();
	}

	class ConcreteComponent implements Component {
		function execute() {
			printf("Executing from %s\n", __CLASS__);
		}
	}

	class BaseDecorator implements Component {
		function __construct(protected Component $wrapee) {
		}

		function execute() {
			$this->wrapee->execute();
			printf("Decorated by %s\n", __CLASS__);
		}
	}

	class ConcreteDecorator1 extends BaseDecorator {
		function execute() {
			/* BaseDecorator::execute se ejecuta 2 veces, la primera vez
			en la siguiente línea, y luego al llamar al
			$this->wrapee->execute() en la linea 19 ya que $this->wrapee
			es una referencia a BaseDecorator como lo dicta el cliente
			en la línea 52 */
			parent::execute();

			/* Evita la duplicación de ejecución de la línea 20 */
			// $this->wrapee->execute();
			$this->extra();
		}

		private function extra() {
			printf("With some extra behavior from %s\n", __CLASS__);
		}
	}
}

namespace Client {

	use Components\BaseDecorator;
	use Components\ConcreteComponent;
	use Components\ConcreteDecorator1;

	$concreteComponent = new ConcreteComponent;
	$baseDecorator = new BaseDecorator($concreteComponent);
	$concreteDecorator1 = new ConcreteDecorator1($baseDecorator);

	$concreteDecorator1->execute();
}
