programa
{
	
	funcao inicio()
	{
		inteiro registro
		real  horas, vlrH, filhos, bonus, salario
		
		escreva ("Digite seu registro de funcionário: ")
		leia (registro)

		escreva ("Digite seu tempo de trabalho, em horas, por dia: ")
		leia (horas)

		escreva ("Quanto você recebe por horas? ")
		leia (vlrH)

		escreva ("Quantos filhos, com idade inferior a 14 anos, você tem? ")
		leia (filhos)

		se (filhos < 1) {
			salario = (horas * vlrH) * 30
			escreva (" Funcionário ", registro, " o seu sálario é de R$ ", salario)
		}

		senao {
			salario = (horas * vlrH) * 30
			bonus = (0.10 * salario) + salario //10% de bonus pq tem filho
			escreva (" Funcionário ", registro, " o seu salário é de R$ ", bonus)
			
		}
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 100; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */