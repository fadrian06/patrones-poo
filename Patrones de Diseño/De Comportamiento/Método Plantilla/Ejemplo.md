```java
// La clase abstracta define un método plantilla que contiene un
// esqueleto de algún algoritmo compuesto por llamadas,
// normalmente a operaciones primitivas abstractas. Las
// subclases concretas implementan estas operaciones, pero dejan
// el propio método plantilla intacto.
class GameAI is
    // El método plantilla define el esqueleto de un algoritmo.
    method turn() is
        collectResources()
        buildStructures()
        buildUnits()
        attack()

    // Algunos de los pasos se pueden implementar directamente
    // en una clase base.
    method collectResources() is
        foreach (s in this.builtStructures) do
            s.collect()

    // Y algunos de ellos pueden definirse como abstractos.
    abstract method buildStructures()
    abstract method buildUnits()

    // Una clase puede tener varios métodos plantilla.
    method attack() is
        enemy = closestEnemy()
        if (enemy == null)
            sendScouts(map.center)
        else
            sendWarriors(enemy.position)

    abstract method sendScouts(position)
    abstract method sendWarriors(position)

// Las clases concretas tienen que implementar todas las
// operaciones abstractas de la clase base, pero no deben
// sobrescribir el propio método plantilla.
class OrcsAI extends GameAI is
    method buildStructures() is
        if (there are some resources) then
            // Construye granjas, después cuarteles y después
            // fortaleza.

    method buildUnits() is
        if (there are plenty of resources) then
            if (there are no scouts)
                // Crea peón y añádelo al grupo de exploradores.
            else
                // Crea soldado, añádelo al grupo de guerreros.

    // ...

    method sendScouts(position) is
        if (scouts.length > 0) then
            // Envía exploradores a posición.

    method sendWarriors(position) is
        if (warriors.length > 5) then
            // Envía guerreros a posición.

// Las subclases también pueden sobrescribir algunas operaciones
// con una implementación por defecto.
class MonstersAI extends GameAI is
    method collectResources() is
        // Los monstruos no recopilan recursos.

    method buildStructures() is
        // Los monstruos no construyen estructuras.

    method buildUnits() is
        // Los monstruos no construyen unidades.
```
