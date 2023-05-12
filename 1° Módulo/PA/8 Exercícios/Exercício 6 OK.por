programa
{
	
	funcao inicio()
	{
		real altura, pesoF, pesoM
		caracter sexo, F, M
		
		escreva("Qual seu sexo ( F para Feminino e M para Masculino)?\n ")
		leia (sexo)

		escreva ("Qual sua altura (ex: 1.65)?\n")
		leia (altura)

		se ( sexo == 'F' ) {
			pesoF = (62.1 * altura) - 44.7
			escreva ("Seu peso ideal é de: ", pesoF, " kg")
		}

		senao {
			pesoM = (72.7 * altura) - 58
			escreva ("Seu peso ideal é de: ", pesoM, " kg")
		}
		
		
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 84; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */