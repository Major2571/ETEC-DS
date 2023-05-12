programa
{
	
	funcao inicio()
	{
		real idade
		
		faca {
			escreva (" Digite sua idade: ")
			leia (idade)
		} enquanto ( idade <= 0 ou idade >= 100 )
			
			se ( idade >= 18 ) {
				escreva ( " Permitido!" )
			}
	
			senao {
				escreva ( " Não permitido!" )
			}
	
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 15; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */