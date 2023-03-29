// Um função que receba 2 ou mais parametros e realize  uma operação matemática qualquer 

// function print(text) {
//     console.log(text)
// }

function soma(num1, num2){
    let result = num1 + num2;
    return console.log( num1, ' + ', num2, ' = ', result );
    //return print( num1 + ' + ' + num2 + ' = ' + result );
}

function subtracao(num1, num2){
    let result = num1 - num2;
    return console.log( num1, ' - ', num2, ' = ', result );
}

function multiplicacao(num1, num2){
    let result = num1 * num2;
    return console.log( num1, ' x ', num2, ' = ', result );
}

function divisao(num1, num2){
    let result = num1 / num2;
    return console.log( num1, ' / ', num2, ' = ', result );
}

soma(5, 5);
subtracao(5, 5);
multiplicacao(5, 5);
divisao(5, 5);
