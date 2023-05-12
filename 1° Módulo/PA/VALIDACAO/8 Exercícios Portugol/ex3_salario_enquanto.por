programa
{
	
	funcao inicio()
	{
		inteiro registro
		real  horas, vlrH, filhos, bonus, salario
		
		escreva ("Digite seu registro de funcionário: ")
		leia (registro)

		escreva ("Digite seu tempo de trabalho, em horas, por dia: ")
		leia (horas)
		    enquanto ( horas <=0 ) {
    		    escreva ("Por Favor, digite um dado válido.\n Digite seu tempo de trabalho, em horas, por dia: ")
    		    leia (horas)
    		}

		escreva ("Quanto você recebe por horas? \n R$ ")
		leia (vlrH)
		    enquanto ( vlrH <= 0 ) {
    		    escreva ("Por Favor, digite um dado válido.\n Quanto você recebe por horas ? \n R$ ")
    		    leia (vlrH)
    		}

		escreva ("Quantos filhos, com idade inferior a 14 anos, você tem? ")
		leia (filhos)

    		se (filhos < 1) {
    			salario = (horas * vlrH) * 30
    			escreva (" Olá ", registro, " o seu sálario mensal é de R$ ", salario )
    		}
    
    		senao {
    			salario = (horas * vlrH) * 30
    			bonus = (0.10 * salario) + salario //10% de bonus pq tem filho
    			escreva (" Olá ", registro, " o seu salário mensal é de R$ ", bonus )
    			
		}
		
	}
}