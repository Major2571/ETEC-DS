
package CalculadoraJOptionPane;

import javax.swing.JOptionPane;

public class Operacoes {
    
    void soma () {
        
        double a, b, soma;
        
        a = Double.parseDouble(JOptionPane.showInputDialog("Digite um Número:"));
        b = Double.parseDouble(JOptionPane.showInputDialog("Digite outro Número:"));
        
        soma = a + b;
        
        JOptionPane.showMessageDialog(null, a + " + " + b + " = " + soma);
        
    }
    
    void sub () {
        
        double a, b, sub;
        
        a = Double.parseDouble(JOptionPane.showInputDialog("Digite um Número:"));
        b = Double.parseDouble(JOptionPane.showInputDialog("Digite outro Número:"));
        
        sub = a - b;
        
        JOptionPane.showMessageDialog(null, a + " - " + b + " = " + sub);
        
    }
    
    void mult () {
        
        double a, b, mult;
        
        a = Double.parseDouble(JOptionPane.showInputDialog("Digite um Número:"));
        b = Double.parseDouble(JOptionPane.showInputDialog("Digite outro Número:"));
        
        mult = a * b;
        
        JOptionPane.showMessageDialog(null, a + " * " + b + " = " + mult);
        
    }
    
    void div () {
        
        double a, b, div;
        
        a = Double.parseDouble(JOptionPane.showInputDialog("Digite um Número:"));
        b = Double.parseDouble(JOptionPane.showInputDialog("Digite outro Número:"));
        
        div = a / b;
        
        JOptionPane.showMessageDialog(null, a + " / " + b + " = " + div);
        
    }
    
}
