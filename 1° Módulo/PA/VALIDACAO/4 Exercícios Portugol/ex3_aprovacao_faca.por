programa
{
	
	funcao inicio()
	{

		real idade, peso, altura
		caracter sexo
		
		// la�o de repeti��o at� entrar com um dado v�lido
		faca {
			escreva (" Informe seu sexo ( M para Masculino e F para Feminino) : ")
			leia(sexo)
		} enquanto (sexo != 'M' e sexo != 'm' e sexo != 'F' e sexo != 'f' )
		
		    // ir� executar as seguintes etapas (altura e peso) apenas se a entrada foi igual a M/m
		    se ( sexo =='M' ou sexo == 'm') {

        		faca {
        			escreva (" Digite sua idade: ")
        			leia(idade)
        		} enquanto ( idade < 0.0 )
        
        		faca {
            		escreva (" Digite sua altura ( ex: 1.65 ): ")
            		leia(altura)
        		} enquanto ( altura <= 0.5 ou altura >= 2.7 )
        
        		faca {
        			escreva (" Digite seu peso (kg)  : ")
        			leia(peso)
        		} enquanto ( peso <= 0.5 ou peso >= 550 )
        		
                    // validac�o para saber se a pessoa vai ser aceita ou n�o
            		se ( altura >= 1.8 e peso >= 75) {
            			escreva (" Aceito!")
            		}
            		
            		senao {
            			escreva (" Reprovado! ")
            		}

		    }

            // se a pessoa entrar com F/f o programa n�o ir� pedir nem altura nem peso, 
            // j� que, de acordo com o enunciado, apenas pessoas que for do sexo masculino ser� aceita, 
            // finalizando assim o programa, sem necessidade de executar os demais comandos
    		senao {
    			escreva (" Reprovado! ")
    		}
		
	}
}