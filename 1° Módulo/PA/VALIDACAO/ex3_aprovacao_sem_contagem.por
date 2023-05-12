programa {
	funcao inicio() {
	    
	    inteiro idade
	    caracter sexo, estadocivil
		
		faca {
    		escreva ( "\n Você pertence ao sexo Feminino ( S / N )? \n " )
    		leia (sexo) 
    		limpa()
		} enquanto ( sexo != 'S' e sexo != 's' e sexo != 'N' e sexo != 'n')
		
		    se ( sexo == 'S' ou sexo == 's'){
		        
		        faca {
    		        escreva ( "\n Qual sua Idade? \n ")
    		        leia (idade)
    		        limpa ()
		        } enquanto ( idade <= 0 ou idade >= 100 )
		        
		        faca {
    		        escreva ("\n Qual seu estado civil ? \n\n S - Solteiro(a) \n C - Casado(a) \n N - Namorando \n\n Resposta : ")
    		        leia (estadocivil)
    		        limpa()
		        } enquanto ( estadocivil != 'S' e estadocivil != 's' e estadocivil != 'C' e estadocivil != 'c' e estadocivil != 'N' e estadocivil != 'n')
		        
		        
    		        se ( idade <= 21 e estadocivil == 'S' ou estadocivil == 's'){
    		            escreva ( "\n Aprovada! ")
    		        } 
    		        
    		        senao {
    		            escreva ( "\n Reprovado! ")
    		        }
		        
		    }
		    
		    senao {
		        escreva ( "\n Reprovado! ")
		    }
		
		
	}
}
