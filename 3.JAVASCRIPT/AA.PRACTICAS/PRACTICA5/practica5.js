// for(let i = 100; i < 501; i++){
//     if(i%2 != 0){
//         console.log(i)
//     }
// }

var fruit = "Apple";

switch (fruit){
    case "Orange","Banana":
        console.log("Hmmmm...delicious")
        break;
    case "Melon":
        console.log("this is my favourite fruit");
        break;
    case "Apple":
        console.log("not a fan");
        break;
    default:
        console.log("Not sure what fruit is this")
        break;
}

var hasBeachHouse = false;

if (hasBeachHouse){
    console.log("Beach here i come!")
} else{
    console.log("i guess ill just die of heat in Madrid")
}