// EJERCICIO 1

// const calculaSuma = (num) => {
//     if (typeof(num) != "number"){
//        return "por favor introduzca un número"
//     }else{
//         let res=0;
//         for (i=0; i<num ; i++){
//             res += i;
//         }
//         return res 
//     }  
// }

// a = calculaSuma('x')
// console.log('a: ', a);



// function totalSuma(numero)  {
//     if (typeof(numero) != "number"){
//         console.log("por favor introduzca un número")
//     }else{
//         let res=0;
//         for (i=0; i<numero ; i++){
//             res += i;
//         }
//         return res 
//     } 
// }

// totalSuma('x')

// EJERCICIO 2

// const calculateSum = (nums) => {
//     if(Array.isArray(nums) == true){
//         let res = [];
//         let numPositivos = 0;
//         let sumNegativos = 0;
//         for (i=0; i<nums.length; i++){
//             if(nums[i]>=0 && typeof(nums[i]) == 'number'){
//                 numPositivos ++;
//             }else if (nums[i]<0 && typeof(nums[i]) == 'number'){
//                 sumNegativos += nums[i];
//             }else {
//                 return 'por favor introduzca un array de numeros'
//             }
//             res[0] = numPositivos;
//             res[1] = sumNegativos
//         }
//         return res;
//     } else {
//         return 'por favor introduzca un array de numeros'
//     }
// }

// console.log(calculateSum([2,-1,-2]))
// console.log(calculateSum('a'))
// console.log(calculateSum(['a']))

// EJERCICIO 3

// const removeSpace = (frase) => {
//     let res = ''
//     if(typeof(frase) == 'string'){
//         res = frase.split(' ').join('')
//         return res;
//     }
//     return 'por favor, introduce una frase de tipo string'
// }


// console.log(removeSpace('hola que pasa tio'))
// console.log(removeSpace('2 3 7'))
// let a = 'hola que tal'
// typeof(a)
// console.log('typeof(a): ', typeof(a));
// console.log(a.split(' ').join(''))