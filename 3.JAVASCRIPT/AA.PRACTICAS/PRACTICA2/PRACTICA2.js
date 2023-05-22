var myFullName = 'Ramiro de Santos';
console.log('myFullName: ', myFullName);
console.log(typeof myFullName);

var myAge = 30;
console.log('myAge: ', myAge);
console.log(typeof myAge);

var hasMotorbike = true;
console.log('hasMotorbike: ', hasMotorbike);
console.log(typeof hasMotorbike);

console.log(myFullName.length);

var myLastName = '';
var chekLastName = myFullName.indexOf(' ');
console.log('chekLastName: ', chekLastName);
myLastName = myFullName.slice(7,16)
console.log('myLastName: ', myLastName);
console.log('myFullName: ', myFullName);

var isFiniteNumber = Number.isFinite(myAge);
console.log('isFiniteNumber: ', isFiniteNumber);
console.log('myAge: ', myAge);

var boolToSting = hasMotorbike.toString();
console.log('boolToSting: ', boolToSting);
console.log('hasMotorbike: ', hasMotorbike);

