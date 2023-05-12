programa {
	funcao inicio() {
		
		real empr, armo, total
		
		escreva (" Qual o valor do Emprestimo? \n R$ ")
		leia (empr)
		
		armo = ( empr + empr * 0.32 ) / 12
		
		total = armo * 12
		
		escreva ( " O valor da armotização é de R$ ", armo, "\n Totalizando : R$ ", total )
	}
}