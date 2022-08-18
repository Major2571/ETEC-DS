
package CalculadoraScanner;

import java.util.Scanner;

public class Operacoes {
    
    void soma () {
    
        Scanner x = new Scanner(System.in); //  criar um objeto do tipo Scanner que passa como argumento o objeto System.in
        
        double a, b, soma;
        
        System.out.println("Digite um Número: ");
        a = Double.parseDouble(x.nextLine());
        
        System.out.println("Digite outro Número: ");
        b = Double.parseDouble(x.nextLine());
        
        soma = a + b;
        
        System.out.println( a + " + " + b + " = " + soma);

    }
    
    void sub () {
        
        Scanner x = new Scanner(System.in);
        
        double a, b, sub;
        
        System.out.println("Digite um Número: ");
        a = Double.parseDouble(x.nextLine());
        
        System.out.println("Digite outro Número: ");
        b = Double.parseDouble(x.nextLine());
        
        sub = a - b;
        
        System.out.println(a + " - " + b + " = " + sub);
         
    }
    
    void mult () {
        
        Scanner x = new Scanner(System.in);
        
        double a, b, mult;
        
        System.out.println("Digite um Núemero: ");
        a = Double.parseDouble(x.nextLine());
        
        System.out.println("Digite outro Número: ");
        b = Double.parseDouble(x.nextLine());
        
        mult = a * b;
        
        System.out.println( a + " * " + b + " = " + mult);
                
    }
    
    void div () {
        
        Scanner x = new Scanner(System.in);
        
        double a, b, div;
        
        System.out.println("Digite um Número: ");
        a = Double.parseDouble(x.nextLine());
        
        System.out.println("Digite outro Número: ");
        b = Double.parseDouble(x.nextLine());
        
        div = a / b;
        
        System.out.println( a + " / " + b + " = " + div);
        
    }
    
    
}
