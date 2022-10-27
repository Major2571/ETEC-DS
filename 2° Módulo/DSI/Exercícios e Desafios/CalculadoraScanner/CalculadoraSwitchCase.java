
// Calculadora usando o Scanner e com o Condicional Switch Case 

package CalculadoraScanner;

import java.util.Scanner;

public class CalculadoraSwitchCase {
    public static void main ( String [] args) {
        
        Scanner x = new Scanner(System.in);
        
        int op;
        
        do {
            
            System.out.println(" Calculadora \n Escolha uma operação: \n 1. Soma ( + ) \n 2. Subtração ( - ) \n 3. Multiplicação ( * ) \n 4. Divisão ( / ) ");
            op = x.nextInt();
            
        } while ((op <1) || (op>=5)); 
        
        switch (op) {
            
            case 1: 
                Operacoes a = new Operacoes();
                a.soma();
                break;
                
            case 2:
                Operacoes b = new Operacoes();
                b.sub();
                break;
            
            case 3: 
                Operacoes c = new Operacoes();
                c.mult();
                break;
            
            case 4: 
                Operacoes d = new Operacoes();
                d.div();
                break;
            
            default:
                break;      
        }
        
        

    }
    
}