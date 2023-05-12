programa {
	funcao inicio() {
	    
		inteiro mencao

        escreva ("Menções: \n")
        
		escreva ("1. I \n")
		escreva ("2. R \n")
		escreva ("3. B \n")
		escreva ("4. MB \n")

        faca {
    		escreva("Escolha uma opção para saber seu valor: ")
    		leia (mencao)
        } enquanto ( mencao !=1 e mencao !=2 e mencao !=3 e mencao !=4 )

		escolha (mencao) {
 			caso 1: 
 				escreva ("Irregular")
 				pare
 				
 			caso 2: 
 				escreva ("Regular")
 				pare
 				
 			caso 3: 
 				escreva ("Bom")
 				pare
 				
 			caso 4: 
 				escreva ("Muito Bom")
 				pare
 		}
	}
}