
package Aula03;

import java.util.Scanner;

import javax.swing.JOptionPane;

public class soma_JOptionPane {
  
    public static void main (String [] args) {
        
        try { //tratamento de erro
        
            int a = Integer.parseInt(JOptionPane.showInputDialog ( "Digite um número: "));
            int b = Integer.parseInt(JOptionPane.showInputDialog ( "Digite um número: "));

            int soma = a + b;

            JOptionPane.showMessageDialog(null, a + " + " + b + " = " + soma);
            
        } catch (Exception e) { // se não digitar n° inteiro ele dá essa mensagem 
            JOptionPane.showMessageDialog(null, "Caracter Inválido");
        }
                
        
        
    }
}
