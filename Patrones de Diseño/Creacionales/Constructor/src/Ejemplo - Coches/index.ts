import Aplicacion from './Aplicacion.ts'

const aplicacion = new Aplicacion()
const [coche, manual] = aplicacion.hacerCoche()

console.log({ coche, manual })
