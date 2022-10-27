
package EquacaoDeSegundoGrau;

import java.util.Scanner;

public class BaskaraScanner {
    
    public static void main(String[] args) {
        
        Scanner x = new Scanner(System.in);
        
        double a, b, c, delta, x1, x2;
        
        System.out.println(" Calculadora de Equação de 2° Grau \n ");
        
        System.out.println(" Digite o valor de A: ");
        a = Double.parseDouble(x.nextLine());
        
        System.out.println(" Digite o valor de B: ");
        b = Double.parseDouble(x.nextLine());
        
        System.out.println(" Digite o valor de C: ");
        c = Double.parseDouble(x.nextLine());

        delta = ( b * b ) - ( 4 * (a * c) ) ;
        
        // System.out.println("Delta = " + delta);
        
        if ( delta <1 ) {
            System.out.println(" Delta não tem raiz! ");
            System.exit(0); //para parar por aqui msm
        }
        
        else {
            x1 = ( -(b) - Math.sqrt(delta)) / ( 2 * a );
            x2 = ( -(b) + Math.sqrt(delta)) / ( 2 * a );
            
            System.out.println( "x' = " + x1 );
            System.out.println( "x'' = " + x2 );
        }
        
        
    }
    
}
