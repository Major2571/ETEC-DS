programa
{
	
	funcao inicio()
	{
		caracter nome
		
		real nota1, nota2, nota3, nota4, media
		

		escreva ("Digite seu nome:")
		leia (nome)

		escreva ("Digite sua nota do 1°Bimestre (0 à 10) : ")
		leia (nota1)

		escreva ("Digite sua nota do 2°Bimestre (0 à 10) : ")
		leia (nota2)

		escreva ("Digite sua nota do 3°Bimestre (0 à 10) : ")
		leia (nota3)

		escreva ("Digite sua nota do 4°Bimestre (0 à 10) : ")
		leia (nota4)

		media = (nota1 + nota2 + nota3 + nota4) / 4

		se (media <= 4) {
			escreva ("Sua média foi ", media, " portanto, você está reprovado")
		}

		senao se (media <=7) {
			escreva ("Sua média foi ", media, " portanto, você está de recuperação")
		}

		senao se (media <=10) {
			escreva ("Sua média foi ", media, " portanto, você está aprovado")
		}

	}
}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 705; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */