import Coche from './Coches/Coche.ts'
import ConstructorDeCoches from './Coches/ConstructorDeCoches.ts'
import ConstructorDeManualesDeCoche from './Coches/ConstructorDeManualesDeCoche.ts'
import Manual from './Coches/Manual.ts'
import DirectorDeCoches from './DirectorDeCoches.ts'

export default class Aplicacion {
	hacerCoche(): [Coche, Manual] {
		const director = new DirectorDeCoches()

		const constructorCoches = new ConstructorDeCoches()
		director.construirCocheDeportivo(constructorCoches)
		const coche = constructorCoches.obtenerProducto()

		const constructorDeManualesDeCoche = new ConstructorDeManualesDeCoche()
		director.construirCocheDeportivo(constructorDeManualesDeCoche)
		const manual = constructorDeManualesDeCoche.obtenerProducto()

		return [coche, manual]
	}
}
