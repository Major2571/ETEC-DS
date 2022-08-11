
package Aula03;

import java.util.Scanner;

public class Soma_Scanner {
    
    public static void main ( String [] args ) {
        
        Scanner x = new Scanner(System.in);
        
        System.out.println( " Digite um número: ");
        int a = x.nextInt(); 
        
        System.out.println( " Digite outro número: ");
        int b = x.nextInt();
        
        int soma = a + b;
        
        System.out.println( a + " + " + b + " = " + soma) ;
        
        
    }
    
}
