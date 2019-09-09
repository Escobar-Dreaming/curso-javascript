


// CLASE JS
class Persona{

	constructor($nombre, $edad, $profesion){
		this.nombre = $nombre;
		this.edad = $edad;
		this.profesion = $profesion;
	}

	getNombre(){
		return this.nombre;
	}

	setNombre($nombre){
		this.nombre = $nombre;
	}

}

class Hombre extends Persona{
	constructor($altura){
		super();
		this.altura = $altura;
	}

	getAltura(){
		return this.altura;
	}

	setAltura($altura){
		this.altura = $altura;
	}
}

var $person1 = new Persona("Jhordan");
$person1.setNombre("Wardiola"); 
document.write($person1.getNombre());


var $hombre1 = new Hombre(1.75);
$hombre1.setNombre("Escobar")
document.write("<br />"+$hombre1.getNombre());


// OBJETO JS
var user = {
	user: "yagamy",
	pass: "123",
	email: "jhordan_escobar@hotmail.com"
}

document.write("<br />"+typeof(user));


console.log("user.json");