programa
{
	
	funcao inicio()
	{
		real seg, min, hor
		escreva("Digite o tempo em segundos:")
		leia (seg)

		min = seg/60
		hor = min/60

		se ( seg <= 59 ){
			escreva ("O tempo corresponde a: ", seg, " segundos\n")
		}

		senao se( hor >=1){
		escreva ( "O tempo corresponde a: ", hor, " horas\n")
		}
		
		senao{
			escreva ("O tempo corresponde a: ", min, " minutos\n")
		}
		
	}
}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 206; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */