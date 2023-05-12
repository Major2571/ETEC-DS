programa
{
	
	funcao inicio()
	{
		inteiro seg, s, min, hor, resto
		
		faca {
		    escreva("Digite o tempo em segundos: ")
		    leia (seg)
		} enquanto ( seg < 0 )

        hor = seg / 3600         
        resto = seg % 3600      
        min = resto / 60        
        s = resto % 60
        
		escreva ("\n O tempo corresponde a: ", hor, "h ", min, "min ", s, "seg \n")

	}
}