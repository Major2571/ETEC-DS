programa
{
	funcao inicio()
	{
		real custo_fabr, custo_final
        
        faca {
    		escreva (" Digite o valor de fábrica do carro: R$ ")
    		leia (custo_fabr)
        } enquanto ( custo_fabr <= 0 )

		custo_final = ((custo_fabr*0.28) + (custo_fabr*0.45)) + custo_fabr

		escreva (" O custo final do carro é de : R$  ", custo_final)
		
	}
}