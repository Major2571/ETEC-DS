
package Funcao;

import javax.swing.JOptionPane;

public class Operacoes {
   
   // criar metodo no Java = void + algum_nome + ()
    
   void soma () {
       try {
       
            int a = Integer.parseInt(JOptionPane.showInputDialog ("Digite um número:"));
            int b = Integer.parseInt(JOptionPane.showInputDialog ("Digite outro número:"));

            int soma = a + b;

            JOptionPane.showMessageDialog(null, a + " + " + b + " = " + soma);
        
       } catch (Exception e ) {
           
           JOptionPane.showMessageDialog(null, "Caracter Inválido");
           
       }
    }
   
   void sub () {
       try {
       
            int a = Integer.parseInt(JOptionPane.showInputDialog ("Digite um número:"));
            int b = Integer.parseInt(JOptionPane.showInputDialog ("Digite outro número:"));

            int sub = a - b;

            JOptionPane.showMessageDialog(null, a + " - " + b + " = " + sub);
        
       } catch (Exception e ) {
           
           JOptionPane.showMessageDialog(null, "Caracter Inválido");
           
       }
   }
   
   void mult () {
       try {
       
            int a = Integer.parseInt(JOptionPane.showInputDialog ("Digite um número:"));
            int b = Integer.parseInt(JOptionPane.showInputDialog ("Digite outro número:"));

            int mult = a * b;

            JOptionPane.showMessageDialog(null, a + " * " + b + " = " + mult);
        
       } catch (Exception e ) {
           
           JOptionPane.showMessageDialog(null, "Caracter Inválido");
        }
   }
   
   void div () {
       try {
       
            int a = Integer.parseInt(JOptionPane.showInputDialog ("Digite um número:"));
            int b = Integer.parseInt(JOptionPane.showInputDialog ("Digite outro número:"));

            int div = a / b;

            JOptionPane.showMessageDialog(null, a + " / " + b + " = " + div);
        
       } catch (Exception e ) {
           
           JOptionPane.showMessageDialog(null, "Caracter Inválido");
           
       }
   }
   
}
