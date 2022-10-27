
package Decisao;

import javax.swing.JOptionPane;
public class decisao_simples {
    
   public static void main(String[]args){
    
    int idade = Integer.parseInt(JOptionPane.showInputDialog("Digite sua idade: "));
   
        if (idade <= 18){
            System.out.println("Mucilon kk");
            }
        else{
            System.out.println("Você é velho!");
        }
           
}
           
}
