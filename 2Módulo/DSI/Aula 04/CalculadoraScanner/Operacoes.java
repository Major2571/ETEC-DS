
package CalculadoraScanner;

import java.util.Scanner;

public class Operacoes {
    
    void soma () {
        
        try {
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
           
        }
        
    }
    
    void sub () {
        
        try {
            Scanner x = new Scanner(System.in);

            System.out.println("Digite um Número: ");
            int a = x.nextInt();

            System.out.println("Digite um Número: ");
            int b = x.nextInt();

            int sub = a - b;

            System.out.println( a + " - " + b + " = " + sub);
        }
        
        catch (Exception e ) {
           System.out.println("Caracter Inválido");
           
        }
        
    }
    
    void mult () {
        
        try {
            Scanner x = new Scanner(System.in);

            System.out.println("Digite um Número: ");
            int a = x.nextInt();

            System.out.println("Digite um Número: ");
            int b = x.nextInt();

            int mult = a * b;

            System.out.println( a + " + " + b + " = " + mult);
        }
        
        catch (Exception e ) {
           System.out.println("Caracter Inválido");
           
        }
        
    }
    
    void div () {
        
        try {
            Scanner x = new Scanner(System.in);

            System.out.println("Digite um Número: ");
            int a = x.nextInt();

            System.out.println("Digite um Número: ");
            int b = x.nextInt();

            int soma = a / b;

            System.out.println( a + " / " + b + " = " + soma);
        }
        
        catch (Exception e ) {
           System.out.println("Caracter Inválido");
           
        }
        
    }
    
}
