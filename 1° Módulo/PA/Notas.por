programa
{
	funcao inicio()
	{
		real nota   //para por núm quebrado, usar . não , 
		
		escreva("Coloque sua nota:")
		leia(nota)
		
				
		se (nota <= 4) {			
			escreva("Reprovado")
		}
		
		
		senao se (nota <= 6){
			escreva ("Recuperação")
		}

		
	 	senao se (nota <= 10){
			escreva("Aprovado")
		}

		senao se (nota >10){
			escreva ("Nota Inválida")
		}
		
	}
}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 223; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */