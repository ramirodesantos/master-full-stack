myPerson = {
    name: "ramiro",
    age: 30,
    sayHello: () => console.log("Hello there!") 
    // sayHello: function(){
    //     console.log("hello there")
    // }
}

console.log(myPerson.sayHello())

myPerson.location = "sevilla"

console.log(myPerson)

var myLocation = myPerson.location
console.log(myLocation)

var {location: myLocationES6} = myPerson

console.log (myLocationES6, myPerson)