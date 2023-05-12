programa
{
	
	funcao inicio()
	{
		inteiro num, a, b
		
		escreva("Digite o número de bananas:")
		leia (num)

		se (num >=12){
			a = num / 12 //div inteira das bananas
			b = num % 12 //resto da div das bananas

			escreva ("Você tem ", a , " dúzias e ", b , " bananas. ")
		}

		senao {
			escreva ("Você tem ", num, " bananas.")
		}
		
		
	}
}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 289; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */