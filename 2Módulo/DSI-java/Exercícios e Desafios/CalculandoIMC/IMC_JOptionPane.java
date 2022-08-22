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

import javax.swing.JOptionPane;

public class IMC_JOptionPane {
    
    public static void main(String[] args) {
       
        double peso, altura, imc;
        
        peso = Double.parseDouble(JOptionPane.showInputDialog(" Digite seu Peso (em Kg): "));
        altura = Double.parseDouble(JOptionPane.showInputDialog(" Didgite sua Altura ( por exemplo 1.60 )"));
        
        imc = peso / ( altura * altura );
        
            if ( imc < 16 ){
               JOptionPane.showMessageDialog(null, " Seu IMC é de: " + imc + " \n Sua Classificação é: Magreza Grave");
            }
            
            else if ( (imc >=16) && (imc < 17)) {
               JOptionPane.showMessageDialog(null, " Seu IMC é de: " + imc + " \n Sua Classificação é: Magreza Moderada");
            }
            
            else if ( (imc >=17) && (imc < 18.5)) {
               JOptionPane.showMessageDialog(null, " Seu IMC é de: " + imc + " \n Sua Classificação é: Magreza Leve");
            }
            
            else if ( (imc >=18.5) && (imc < 25)) {
               JOptionPane.showMessageDialog(null, " Seu IMC é de: " + imc + " \n Sua Classificação é: Saudável");
            }
            
            else if ( (imc >=25) && (imc < 30)) {
               JOptionPane.showMessageDialog(null, " Seu IMC é de: " + imc + " \n Sua Classificação é: Sobrepeso");
            }
            
            else if ( (imc >=30) && (imc < 35)) {
               JOptionPane.showMessageDialog(null, " Seu IMC é de: " + imc + " \n Sua Classificação é: Obesidade Grau I");
            }
            
            else if ( (imc >=35) && (imc < 40)) {
               JOptionPane.showMessageDialog(null, " Seu IMC é de: " + imc + " \n Sua Classificação é: Obesidade Grau II (severa)");
            }
            
            else {
               JOptionPane.showMessageDialog(null, " Seu IMC é de: " + imc + " \n Sua Classificação é: Obesidade Grau III (mórbida)");
            }
        
    }
    
}
