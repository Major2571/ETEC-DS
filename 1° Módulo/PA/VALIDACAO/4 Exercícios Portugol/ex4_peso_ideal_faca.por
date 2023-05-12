programa
{
	
	funcao inicio()
	{
		real altura, pesoF, pesoM, pesoFN = 0.0, pesoMN = 0.0
		caracter sexo
        // pesoF = peso ideal Feminino;
        // pesoM = peso ideal Masculino;
        // pesoFN e pesoMN = vari�vel que vai receber o valor da conta do peso ideal Feminino/Masculino, caso o peso seja negativo, j� que necessita ser multiplicado por -1;
		
		//vers�o com la�o de repeti��o FA�A
		
		escreva (" Saiba seu Peso Ideal!  \n")
		
		faca {
    		escreva(" Qual seu sexo ( F para Feminino e M para Masculino)?\n ")
    		leia (sexo)
		} enquanto ( sexo != 'F' e sexo != 'f' e sexo != 'M' e sexo != 'm')


		faca {
    		escreva (" Qual sua altura (ex: 1.65)?\n ")
    		leia (altura)
		} enquanto ( altura < 0.5 ou altura >= 2.7 ) 


    		se ( sexo == 'F' ou sexo == 'f') {
    			pesoF = (62.1 * altura) - 44.7
    			
    			//em caso de um peso negativo, ser� multiplicado por -1, para que seja um valor v�lido
    			se ( pesoF < 0 ){
        			pesoFN = pesoF * (-1)
        			escreva (" Seu peso ideal � de: ", pesoFN, " kg ")
    			}
    			
    			senao {
        			escreva (" Seu peso ideal � de: ", pesoF, " kg ")
    			}
    		}

    		senao {
    			pesoM = (72.7 * altura) - 58
    			
    			//em caso de um peso negativo, ser� multiplicado por -1, para que seja um valor v�lido
    			se ( pesoM < 0 ){
        			pesoMN = pesoM * (-1)
        			escreva (" Seu peso ideal � de: ", pesoMN, " kg ")
        		}
    			
    			senao {
        			escreva (" Seu peso ideal � de: ", pesoM, " kg ")
    			}
    		}
		
	}
}