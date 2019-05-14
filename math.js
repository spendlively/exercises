//five(add(one())) //6
//seven(subtract(two())) //5

let calculate = (leftOperand, operation) => {

    switch (operation.name) {
        case 'add':
            return leftOperand + operation.rightOperand

        case 'subtract':
            return leftOperand - operation.rightOperand

        default:
            throw new Error('Nothing to do')
    }
}

let one = (operation) => {

    const value = 1

    if (operation === undefined) return value

    return calculate(value, operation)
}

let two = (operation) => {

    const value = 2

    if (operation === undefined) return value

    return calculate(value, operation)
}

let five = (operation) => {

    const value = 5

    if (operation === undefined) return value

    return calculate(value, operation)
}

let seven = (operation) => {

    const value = 7

    if (operation === undefined) return value

    return calculate(value, operation)
}

let add = (argument) => {

    return {
        name: 'add',
        rightOperand: argument
    }
}

let subtract = (argument) => {

    return {
        name: 'subtract',
        rightOperand: argument
    }
}

console.log(five(add(one()))) //6
console.log(seven(subtract(two()))) //5

