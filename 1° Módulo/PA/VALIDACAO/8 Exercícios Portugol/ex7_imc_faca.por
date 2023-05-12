programa
{
	
	funcao inicio()
	{
		real altura, peso, imc
		
		faca {
    		escreva("Digite sua altura (ex: 1.62): ")
    		leia (altura)
		} enquanto ( altura < 0.5 ou altura >= 2.7 )
		
		faca {
    		escreva ("Digite seu peso (ex: 62.3): ")
    		leia (peso)
		} enquanto ( peso <= 0 ou peso >= 550 )
		
		imc = peso / ( altura * altura )

    		se (imc >= 24.9){
    			escreva ("Seu IMC corresponde a: ", imc, ", logo, você está acima do peso")
    		}
    
    		senao {
    			escreva ("Seu IMC corresponde a: ", imc, ", logo, você está no índice ideal")
    		}
	}
}