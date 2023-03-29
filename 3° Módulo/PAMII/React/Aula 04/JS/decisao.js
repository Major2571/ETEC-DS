let pivo = true;

if (pivo) {
	console.log('Hello Pessoal');
} else {
	console.log('Bye Bye Bye');
}

let nome = 'Carol Tacats';

if (nome) {
	console.log('Carol Tacats chegou');
} else {
	console.log('Carol Tacats saiu');
}

function teste(entrada) {
	if (entrada) {
		return console.log('Sua entrada foi:', entrada);
	}

	console.log('Nada entrou');
}

teste(true);
teste(false);

function testeDois(entrada) {
	if (entrada === 'Carol') {
		return console.log('Seu nome está correto, ele é:', entrada);
	}

	if (entrada === 'Karol') {
		return console.log('Seu nome está incorreto');
	}
	console.log('Nada entrou');
}

testeDois('Carol');
testeDois('Karol');
testeDois('carol');

let num = 2;

let msg;

num === 1 ? (msg = 'O número é 1') : (msg = 'O número não é 1');

console.log(msg);

num = 1;

switch (num) {
	case 1:
		msg = 'Um';
		break;

	case 2:
		msg = 'Dois';
		break;

	case 3:
		msg = 'Três';
		break;

	case 4:
		msg = 'Quatro';
		break;

	case 5:
		msg = 'Cinco';
		break;

	default:
		msg = 'Sem número';
}

console.log(msg);
