
programa {
    
    inclua biblioteca Matematica --> mat
	
	funcao inicio()
	{
		real altura, pesoF, pesoM, pesoFN = 0.0, pesoMN = 0.0, arredondamento
		caracter sexo
		// pesoF = peso ideal Feminino;
        // pesoM = peso ideal Masculino;
        // pesoFN e pesoMN = vari�vel que vai receber o valor da conta do peso ideal Feminino/Masculino, caso o peso seja negativo, j� que necessita ser multiplicado por -1;
		
		//vers�o com la�o de repeti��o ENQUANTO
		
		escreva(" Saiba seu Peso Ideal! \n Qual seu sexo ( F para Feminino e M para Masculino)?\n ")
		leia (sexo)
		    enquanto ( sexo != 'F' e sexo != 'M' e sexo != 'f' e sexo != 'm') {
		        escreva(" Dado Inv�lido! Por favor, digite um dado v�lido! \n Qual seu sexo ( F para Feminino e M para Masculino)?\n ")
		        leia (sexo)
		    }

		escreva (" Qual sua altura (ex: 1.65)?\n ")
		leia (altura) 
		    enquanto ( altura < 0.5 ou altura >= 2.7 ) {
		        escreva(" Dado Inv�lido! Por favor, digite um dado v�lido! \n Qual sua altura (ex: 1.65)?\n ")
		        leia (altura)
		    }

    		    se ( sexo == 'F' ou sexo == 'f') {
        			pesoF = (62.1 * altura) - 44.7
        			arredondamento = mat.arredondar( pesoF, 2 )
        			
        			//em caso de um peso negativo, ser� multiplicado por -1, para que seja um valor v�lido
        			se ( pesoF < 0 ){
            			pesoFN = pesoF * (-1)
            			arredondamento = mat.arredondar(pesoFN, 2)
            			escreva (" Seu peso ideal � de: ", arredondamento, " kg ")
        			}
        			
        			senao {
            			escreva (" Seu peso ideal � de: ", arredondamento, " kg ")
        			}
        			
        		}
    
    
        		senao {
        			pesoM = (72.7 * altura) - 58
        			arredondamento = mat.arredondar( pesoM, 2 )
        			
        			//em caso de um peso negativo, ser� multiplicado por -1, para que seja um valor v�lido
        			se ( pesoM < 0 ){
            			pesoMN = pesoM * (-1)
            			arredondamento = mat.arredondar( pesoMN, 2 )
            			escreva (" Seu peso ideal � de: ", arredondamento, " kg ")
            		}
        			
        			senao {
            			escreva (" Seu peso ideal � de: ", arredondamento, " kg ")
        			}
        			
        		}
		
	}
}