programa
{
	
	funcao inicio()
	{
		inteiro a, b

        escreva (" Organiza��o dos n�meros em Ordem Crescente \n")
        
		escreva (" Digite um n�mero: ")
		leia (a)

		escreva (" Digite outro n�mero: ")
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