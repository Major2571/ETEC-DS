programa
{
	
	funcao inicio()
	{
		inteiro contador, idade = 0, idademaior = 0, idademenor = 0, media = 0

		para ( contador = 1; contador <=20; contador = contador + 1 ) {
			escreva ( " Digite sua idade: " )
			leia (idade)
			
			enquanto ( idade <= 0 ou idade >=100 ){
			    escreva ( "Dado inválido! \n Digite sua idade: " )
			    leia (idade)
			}
			
			media = media + idade

				se ( contador == 1 ) {
					idademenor = idade
					idademaior = idade
				}

				se ( idade > idademaior ) {
					idademaior = idade
				}

				se ( idade < idademenor ) {
					idademenor = idade
				}
		}

		media = media / 20
		
		escreva ( "\n Média das Idades : ", media, " anos \n")
		escreva ( " Idade menor : ", idademenor, " anos \n")
		escreva ( " Idade maior : ", idademaior, " anos \n")
		
	}
}