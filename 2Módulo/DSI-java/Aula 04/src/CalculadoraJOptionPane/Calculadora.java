
package CalculadoraJOptionPane;

import javax.swing.JOptionPane;

public class Calculadora {
    
    public static void main (String []args) {
        
        int x = 0;
        
        do {
        
            x = Integer.parseInt(JOptionPane.showInputDialog("Escolha sua Operação: \n 1. +  \n 2. - \n 3. * \n 4. / \n"));

            if ( x == 1 ){
                Operacoes a = new Operacoes ();
                a.soma();
            }
            
            else if ( x == 2 ) {
                Operacoes b = new Operacoes ();
                b.sub();
            }

            else if ( x == 3 ) {
                Operacoes c = new Operacoes ();
                c.mult();
            }

            else if ( x == 4 ) {
                Operacoes d = new Operacoes ();
                d.div();
            }

        } while ((x <= 0) || (x >= 5));
        
        
    }
}
