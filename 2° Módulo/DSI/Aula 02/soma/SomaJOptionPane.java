
package soma;

import javax.swing.JOptionPane;

public class SomaJOptionPane {
    
     public static void main ( String [] args) {
        
        int a = Integer.parseInt(JOptionPane.showInputDialog(" Soma de dois número \nDigite um número: ")); 
             // Integer.parseInt para converter string em inteiro
        
        int b = Integer.parseInt(JOptionPane.showInputDialog(" Digite outro número: "));
        
        int soma = a + b;

        JOptionPane.showMessageDialog( null, a + " + " + b + " = " + soma );
        
    }
    
}
