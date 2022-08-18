
package CalculadoraJOptionPane;

import javax.swing.JOptionPane;
//import java.util.Scanner;

public class Operacoes {
    
    void soma () {
        
        try {
            
            int x = Integer.parseInt(JOptionPane.showInputDialog("Digite um Número"));
            int y = Integer.parseInt(JOptionPane.showInputDialog("Digite um Número"));
            
            int soma = x + y;
            
            JOptionPane.showMessageDialog(null, x + " + " + y + " = " + soma);
        } 
        
        catch (Exception e ) {
           
           JOptionPane.showMessageDialog(null, "Caracter Inválido");
           
       }
        
        // Com o Scanner
        
        /* try {
            Scanner x = new Scanner(System.in);

            System.out.println("Digite um Número: ");
            int a = x.nextInt();

            System.out.println("Digite um Número: ");
            int b = x.nextInt();

            int soma = a + b;

            System.out.println( a + " + " + b + " = " + soma);
        }
        
        catch (Exception e ) {
           System.out.println("Caracter Inválido");
           
        }*/
        
    }
    
    void sub () {
        
        try {
            
            int x = Integer.parseInt(JOptionPane.showInputDialog("Digite um Número"));
            int y = Integer.parseInt(JOptionPane.showInputDialog("Digite um Número"));
            
            int sub = x - y;
            
            JOptionPane.showMessageDialog(null, x + " - " + y + " = " +  sub);
        } 
        
        catch (Exception e ) {
           
           JOptionPane.showMessageDialog(null, "Caracter Inválido");
           
       }
        
    }
    
    void mult () {
        
        try {
            
            int x = Integer.parseInt(JOptionPane.showInputDialog("Digite um Número"));
            int y = Integer.parseInt(JOptionPane.showInputDialog("Digite um Número"));
            
            int mult = x * y;
            
            JOptionPane.showMessageDialog(null,  x + " * " + y + " = " + mult);
        } 
        
        catch (Exception e ) {
           
           JOptionPane.showMessageDialog(null, "Caracter Inválido");
           
       }
        
    }
    
    void div () {
        
        try {
            
            int x = Integer.parseInt(JOptionPane.showInputDialog("Digite um Número"));
            int y = Integer.parseInt(JOptionPane.showInputDialog("Digite um Número"));
            
            int div = x / y;
            
            JOptionPane.showMessageDialog(null, x + " / " + y + " = " + div);
        } 
        
        catch (Exception e ) {
           
           JOptionPane.showMessageDialog(null, "Caracter Inválido");
           
       }
        
    }
    
}
