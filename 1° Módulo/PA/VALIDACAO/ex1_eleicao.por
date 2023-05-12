programa
{
	
	funcao inicio()
	{

		inteiro voto, c1 = 0, c2 = 0, c3 = 0, c4 = 0, b = 0, n = 0
		
		escreva ( " \n Eleições \n ______________________________________________________ \n\n" )
		escreva ( " Ao final da Eleição, digite 0 para que os votos sejam computados \n " )
		
    		faca {
        		escreva ( " \n Canditado A: 1 \n Canditado B: 2 \n Canditado C: 3 \n Canditado D: 4 \n Voto Branco: 5 \n\n Obs: Outros números serão considerados nulos! \n\n")
        		escreva ( " Digite o número do seu candidato : " )
        		leia ( voto )
        		limpa()
    
        			se ( voto == 1 ) {
        				c1 = c1 + 1
        			}
        	
        			senao se ( voto == 2 ) {
        				c2 = c2 + 1
        			}
        	
        			senao se ( voto == 3 ) {
        				c3 = c3 + 1
        			}
        	
        			senao se ( voto == 4 ) {
        				c4 = c4 + 1
        			}
        	
        			senao se ( voto == 5 ) {
        				b = b + 1
        			}
        	
        			senao se ( voto >= 6 ) {
        				n = n + 1
        			}
    		
    		} enquanto ( voto != 0 ) 
		
		
		escreva ( " \n Fim das Eleições! \n ______________________________________________________ \n\n" )
		escreva ( " Total de votos para o Candidato 1 : ", c1, "\n")
		escreva ( " Total de votos para o Candidato 2 : ", c2, "\n")
		escreva ( " Total de votos para o Candidato 3 : ", c3, "\n")
		escreva ( " Total de votos para o Candidato 4 : ", c4, "\n")
		escreva ( " Total de votos Branco  : ", b, "\n")
		escreva ( " Total de votos Nulo  : ", n, "\n")

	
	}
}