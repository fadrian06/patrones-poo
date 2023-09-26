<?php

namespace Prototipos {
	interface Prototipo {
		function clonar(): self;
	}

	class PrototipoConcreto implements Prototipo {
		function __construct(private mixed $campo1) {
		}

		function clonar(): Prototipo {
			return new self($this->campo1);
		}

		function campo1() {
			return $this->campo1;
		}
	}

	class PrototipoSubclase extends PrototipoConcreto {
		function __construct($campo1, private $campo2) {
			parent::__construct($campo1);
		}

		function clonar(): Prototipo {
			return new self($this->campo1(), $this->campo2);
		}
	}
}

namespace Cliente {

	use Prototipos\Prototipo;
	use Prototipos\PrototipoConcreto;
	use Prototipos\PrototipoSubclase;

	function esUnPrototipo(Prototipo $prototipo): bool {
		return $prototipo == $prototipo->clonar();
	}

	$prototipoConcreto = new PrototipoConcreto('campo1');
	$prototipoSubclase = new PrototipoSubclase('campo1', 'campo2');

	// COMPROBAR QUE SON CLONES EN ESTADO PERO NO EN REFERENCIA
	var_dump(esUnPrototipo($prototipoConcreto));
	var_dump(esUnPrototipo($prototipoSubclase));

	echo "\n";
	// COMPROBAR QUE SON REFERENCIAS DISTINTAS, CLONES
	var_dump($prototipoSubclase);
	var_dump($prototipoSubclase->clonar());
}
