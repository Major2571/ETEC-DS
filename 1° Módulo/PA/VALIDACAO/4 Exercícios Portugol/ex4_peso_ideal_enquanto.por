
programa {
	
	funcao inicio()
	{
		real altura, pesoF, pesoM, pesoFN = 0.0, pesoMN = 0.0
		caracter sexo, F, M
		
		//versão com laço de repetição ENQUANTO
		
		escreva("Qual seu sexo ( F para Feminino e M para Masculino)?\n ")
		leia (sexo)
		    enquanto ( sexo != 'F' e sexo != 'M' e sexo != 'f' e sexo != 'm') {
		        escreva(" Dado Inválido! Por favor, digite um dado válido! \n Qual seu sexo ( F para Feminino e M para Masculino)?\n ")
		        leia (sexo)
		    }

		escreva (" Qual sua altura (ex: 1.65)?\n")
		leia (altura) 
		    enquanto ( altura < 0.5 ou altura >= 2.7 ) {
		        escreva(" Dado Inválido! Por favor, digite um dado válido! \n Qual sua altura (ex: 1.65)?\n ")
		        leia (altura)
		    }

		se ( sexo == 'F' ou sexo == 'f') {
			pesoF = (62.1 * altura) - 44.7
			
			se ( pesoF < 0 ){
    			pesoFN = pesoF * (-1)
    			escreva (" Seu peso ideal é de: ", pesoFN, " kg")}
			
			senao {
    			escreva (" Seu peso ideal é de: ", pesoF, " kg")}
		}

		senao {
			pesoM = (72.7 * altura) - 58
			
			se ( pesoM < 0 ){
    			pesoMN = pesoM * (-1)
    			escreva (" Seu peso ideal é de: ", pesoMN, " kg")
    		}
			
			senao {
    			escreva (" Seu peso ideal é de: ", pesoM, " kg")
			}
		}
		
	}
}
