programa
{
	
	funcao inicio()
	{
		caracter nota

		faca {
			escreva ("Digite sua nota ( A, B, C, D ou E ): ")
			leia (nota)
		} enquanto ( nota != 'A' e nota != 'a' e nota != 'B' e nota != 'b' e nota != 'C' e nota != 'c' e nota != 'D' e nota != 'd' e nota != 'E' e nota != 'e' )

				se ( nota == 'A' ou nota == 'a' ou nota == 'B' ou nota == 'b' ou nota == 'C' ou nota == 'c'){
					escreva ("Promovido!")
				}
	
				senao {
					escreva ("Retido")
				}
			
	
	}
}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 48; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */