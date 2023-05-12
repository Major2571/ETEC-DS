programa
{
	
	funcao inicio()
	{
		inteiro a, b

        escreva (" Organização dos números em Ordem Crescente \n")
        
		escreva (" Digite um número: ")
		leia (a)

		escreva (" Digite outro número: ")
		leia (b)

		se ( a > b){
		escreva ( " Ordem correta: ", b, " , ", a )
		}

		senao se ( a < b){
		escreva ( " Ordem correta: ", a, " , ", b )
		}

		senao se ( a == b){
		escreva ( " Valores iguais! " )
		}
		
	}
}