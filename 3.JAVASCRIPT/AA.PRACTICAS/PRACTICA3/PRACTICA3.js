var house = {
    color: 'white',
    numberOfWindows: 3 , 
    isVacationHome: true 
}

console.log('my House is ' + house.color + ' and has ' + house.numberOfWindows + ' windows.');

Object.freeze(house);

var fruits = ['banana', 'apple', 'melon'];
console.log(fruits[1])

fruits.push('tomato')
console.log('fruits: ', fruits);
console.log(fruits.length)