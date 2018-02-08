function People(name) {
  this.name = name;
  this.age = 0;
}


People.prototype.setAge = function(age) {
  this.age = age;
};


function Poul(name) {
  this.name = name;
  this.age = 0;
}

var poul = new Poul('Poule');
var people = new People('Alex');

poul.__proto__ = people;

Poul.prototype.setAge = function(age){
	this.age = age;
};

poul.setAge(20);

//console.log(poul);


