programa
{
	
	funcao inicio()
	{
		inteiro registro
		real  horas, vlrH, filhos, bonus, salario
		
		escreva ("Digite seu registro de funcion�rio: ")
		leia (registro)

		escreva ("Digite seu tempo de trabalho, em horas, por dia: ")
		leia (horas)
		    enquanto ( horas <=0 ) {
    		    escreva ("Por Favor, digite um dado v�lido.\n Digite seu tempo de trabalho, em horas, por dia: ")
    		    leia (horas)
    		}

		escreva ("Quanto voc� recebe por horas? \n R$ ")
		leia (vlrH)
		    enquanto ( vlrH <= 0 ) {
    		    escreva ("Por Favor, digite um dado v�lido.\n Quanto voc� recebe por horas ? \n R$ ")
    		    leia (vlrH)
    		}

		escreva ("Quantos filhos, com idade inferior a 14 anos, voc� tem? ")
		leia (filhos)

    		se (filhos < 1) {
    			salario = (horas * vlrH) * 30
    			escreva (" Ol� ", registro, " o seu s�lario mensal � de R$ ", salario )
    		}
    
    		senao {
    			salario = (horas * vlrH) * 30
    			bonus = (0.10 * salario) + salario //10% de bonus pq tem filho
    			escreva (" Ol� ", registro, " o seu sal�rio mensal � de R$ ", bonus )
    			
		}
		
	}
}