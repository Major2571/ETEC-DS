programa
{
	
	funcao inicio()
	{
		caracter nota

		escreva ("Digite sua nota ( A, B, C, D ou E ): ")
		leia (nota)
			enquanto ( nota != 'A' e nota != 'a' e nota != 'B' e nota != 'b' e nota != 'C' e nota != 'c' e nota != 'D' e nota != 'd' e nota != 'E' e nota != 'e' ) {
				escreva ( "Avaliação inválida! \n Digite sua nota ( A, B, C, D ou E ): ")
				leia (nota)
			}

				se ( nota == 'A' ou nota == 'a' ou nota == 'B' ou nota == 'b' ou nota == 'C' ou nota == 'c'){
					escreva ("Promovido!")
				}
	
				senao {
					escreva ("Retido!")
				}
			
	
	}
}