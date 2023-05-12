programa
{
	
	inclua biblioteca Matematica --> mat
	
	funcao inicio()
	{
		real volume, altura, raio, potencia

		escreva ("Coloque o valor do raio da lata cm: ")
		leia (raio)

		escreva ("Coloque a altura da lata cm: ")
		leia (altura)

		potencia = mat.potencia(raio, 2.0)
	     volume = potencia * 3.14159 * altura

		escreva ("O volume da lata é igual a: ", volume, " metros cúbicos")
	}
}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 387; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */