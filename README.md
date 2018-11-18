# Ejercicio Excepciones

El objetivo de esta práctica es intentar controlar un error en el caso de que una petición HTTP a un API
sea incorrecta y produzca un error.

Es mucho mejor controlar las excepciones nosotros y actuar en consecuencia, que dejar que la excepción finalice
nuestro programa.

Una vez controlado el error, cread un script que utilizando la misma API https://swapi.co, nos diga los nombres
de los planetas que salen en la película "La amenaza fantasma". Ojo que los nombres están en inglés.

 
**Bonus:** Cuando tengáis el código resuelto, hacer refactoring para que el código sea orientado a objetos.

La idea es que haya una clase encargada de realizar las peticiones HTTP al api y vosotros solamente le pregunteis
mediante una llamada a un método que os devuelva una lista de objetos planeta.
