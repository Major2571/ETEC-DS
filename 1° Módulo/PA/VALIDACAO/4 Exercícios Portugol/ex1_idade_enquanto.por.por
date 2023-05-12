programa
{
	
	funcao inicio()
	{
		real idade
		
		escreva (" Digite sua idade: ")
		leia (idade)
			enquanto ( idade <= 0 ou idade >= 100 ){
				escreva(" Dado inválido! Digite um dado válido! \n Digite sua idade: ")
				leia (idade)
			}
			
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
 * @POSICAO-CURSOR = 48; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */