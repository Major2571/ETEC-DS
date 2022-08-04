package soma;

import java.util.Scanner;

public class SomaScanner {
    
    public static void main (String[] args) {
        Scanner x = new Scanner(System.in);
        
        int a, b;
        
        System.out.println("Soma de dois números \nDigite um número: ");
        a = x.nextInt(); 
        
        System.out.println("Digite outro número: ");
        b = x.nextInt();
        
        int soma = a + b;
        
        System.out.println( a + " + " + b + " = " + soma );
        
    }
}
