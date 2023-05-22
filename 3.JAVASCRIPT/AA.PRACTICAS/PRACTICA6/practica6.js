var names = ["Danniel" , "Roxana" , "Ivan"];

function hello (nombres){
    for (let name of nombres){
        console.log(`hello ${name}`)
    }
}
hello(names)


const helloArrow = (nombres) => {
    for (let name of nombres){
        console.log(`hello ${name}`)
    }
}

helloArrow(names)

const sum = (a,b) => a+b;
console.log(sum(1,2))

const difference = (a,b) => a-b;
console.log(difference(1,2));

const calculate = (operation,a,b) => {
    switch (operation){
        case "plus":
            console.log("sum is " + sum(a,b))
            break
        case "minus":
            console.log("difference is " + difference(a,b))
            break
        default:
            console.log("no idea what to do")
    }
}

calculate("plus",1,2)
calculate("minus",1,2)
calculate("lala",1,2)