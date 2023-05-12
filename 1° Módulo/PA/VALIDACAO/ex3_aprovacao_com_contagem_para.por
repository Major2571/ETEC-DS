programa {
	funcao inicio() {
		
		inteiro contador, aceitos = 0, reprovados = 0
		caracter sexo, estadocivil, idade
		
		//contagem de 3 pessoas
		para ( contador = 1; contador <=3; contador++){
		    
		    faca {
        		escreva ( "\n Você pertence ao sexo Feminino? \n S - Sim \n N - Não \n\n Resposta: " )
        		leia (sexo) 
        		limpa()
		    } enquanto ( sexo != 'S' e sexo != 'N' )
		    
		    faca {
    		    escreva ( "\n Você tem menos de 21 anos? \n S - Sim \n N - Não \n\n Resposta: ")
        		leia (idade)
        		limpa ()
		    } enquanto ( idade != 'S' e idade != 'N' )
    		        
            faca {
    		    escreva ("\n Voçê é Solteiro? \n S - Sim \n N - Não \n\n Resposta: ")
    		    leia (estadocivil)
    		    limpa()
		    } enquanto ( estadocivil != 'S' e estadocivil != 'N' )
		    
	
        		se ( sexo == 'S' e idade == 'S' e estadocivil == 'S') {
        		    aceitos = aceitos + 1
        		}
        		
        		senao {
        		    reprovados = reprovados + 1
        		}
    		
		} 
		
		escreva ("\n ", reprovados, " pessoa(s) não se adequa(m) a determinados requisitos. \n " )
		escreva ( aceitos, " pessoa(s) se adequa(m) a determinados requisitos. \n " )
		
		
	}
}
