/*

O índice de massa corporal (IMC) é uma medida internacional usada para calcular se uma pessoa está no peso ideal.

A fórmula é a seguinte:  IMC = peso / ( altura^2 )

A classificação é feita de acordo com as seguintes regras:

a) < 16 - Magreza grave
b) 16 a < 17 - Magreza moderada
c) 17 a < 18,5 - Magreza leve
d) 18,5 a < 25 - Saudável
e) 25 a < 30 - Sobrepeso
f) 30 a < 35 - Obesidade Grau I
g) 35 a < 40 - Obesidade Grau II (severa)
h) >= 40 - Obesidade Grau III (mórbida)

*/

package CalculandoIMC;

import java.util.Scanner;

public class IMC_Scanner {
    
    public static void main(String[] args) {
        
        Scanner x = new Scanner(System.in);
        
        double peso, altura, imc;
        
        System.out.println( " Cálculo de IMC \n ------------------------------- ");
        
        System.out.println( " Qual o seu peso ( Kg )?" );
        peso = Double.parseDouble(x.nextLine());
        
        System.out.println( " Qual sua altura (por exemplo: 1.60)?" ); 
        altura = Double.parseDouble(x.nextLine());
        
        imc = peso / ( altura * altura );
        
            if ( imc < 16 ){
                System.out.println( " Seu IMC é de: " + imc + " \n Sua Classificação é: Magreza Grave");
            }
            
            else if ( (imc >=16) && (imc < 17)) {
                System.out.println( " Seu IMC é de: " + imc + " \n Sua Classificação é: Magreza Moderada");
            }
            
            else if ( (imc >=17) && (imc < 18.5)) {
                System.out.println( " Seu IMC é de: " + imc + " \n Sua Classificação é: Magreza Leve");
            }
            
            else if ( (imc >=18.5) && (imc < 25)) {
                System.out.println( " Seu IMC é de: " + imc + " \n Sua Classificação é: Saudável");
            }
            
            else if ( (imc >=25) && (imc < 30)) {
                System.out.println( " Seu IMC é de: " + imc + " \n Sua Classificação é: Sobrepeso");
            }
            
            else if ( (imc >=30) && (imc < 35)) {
                System.out.println( " Seu IMC é de: " + imc + " \n Sua Classificação é: Obesidade Grau I");
            }
            
            else if ( (imc >=35) && (imc < 40)) {
                System.out.println( " Seu IMC é de: " + imc + " \n Sua Classificação é: Obesidade Grau II (severa)");
            }
            
            else {
                System.out.println( " Seu IMC é de: " + imc + " \n Sua Classificação é: Obesidade Grau III (mórbida)");
            }
        
        
        
    }
    
}
