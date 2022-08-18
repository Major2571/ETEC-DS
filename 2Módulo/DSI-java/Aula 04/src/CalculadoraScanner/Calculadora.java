
package CalculadoraScanner;

import java.util.Scanner;

public class Calculadora {
    
    public static void main (String []args) {
        
        Scanner x = new Scanner(System.in);
        
        System.out.println("Escolha sua Operação: \n 1. +  \n 2. - \n 3. * \n 4. / \n");
        int operacao = x.nextInt();
        
        if ( operacao == 1 ){
            Operacoes a = new Operacoes ();
            a.soma();
        }
        
        if ( operacao == 2 ) {
            Operacoes b = new Operacoes ();
            b.sub();
        }
        
        if ( operacao == 3 ) {
            Operacoes c = new Operacoes ();
            c.mult();
        }
        
        if ( operacao == 4 ) {
            Operacoes d = new Operacoes ();
            d.div();
        }
        
        if (operacao >= 5) {
            System.out.println("Inválido");
        }
        
        
    }
}
