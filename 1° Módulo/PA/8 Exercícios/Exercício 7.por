programa
{
	
	funcao inicio()
	{
		real altura, peso, imc
		
		escreva("Digite sua altura (ex: 1.62): ")
		leia (altura)
		
		escreva ("Digite seu peso (ex: 62.3): ")
		leia (peso)
		
		imc = peso / (altura*altura)

		se (imc >= 24.9){
			escreva ("Seu IMC corresponde a: ", imc, ", logo, você está acima do peso")
		}

		senao {
			escreva ("Seu IMC corresponde a: ", imc, ", logo, você está no índice ideal")
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 167; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */