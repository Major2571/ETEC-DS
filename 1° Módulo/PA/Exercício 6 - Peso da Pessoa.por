programa
{
	
	funcao inicio()
	{
		real peso, engordar, emagrecer

		escreva ("Digite seu peso (kg): ")
		leia (peso)

		engordar = (peso * 0.15) + peso
		emagrecer = peso - ( peso * 0.20) 

		escreva ("Se você engoradar 15% seu novo peso será: ", engordar, "kg\n")
		
		escreva ("Se você emagrecer 20% seu novo peso será: ", emagrecer, "kg")
	}
}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 260; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */