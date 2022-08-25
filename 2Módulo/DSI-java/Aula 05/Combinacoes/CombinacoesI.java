
package Combinacoes;

public class CombinacoesI {

    public static void main(String[] args) {

        int 
            a = 2, 
            b = 1, 
            c = 3;
        
        // Há 6 possibilidades de Permutação:
        // Começando com o 1: 123 e 132
        // Começando com o 2: 213 e 231
        // Começando com o 3: 312 e 321

        // Colocando na sequência das possibilidades 123 e 132
        if ( a == 1 && b == 2 && c == 3) {
            System.out.println( a + " " + b + " " + c );
        }
        else if ( a == 1 && b == 3 && c == 2) {
            System.out.println( a + " " + c + " " + b );
        }
        
        // Colocando na sequência das possibilidades 213 e 231
        else if ( a == 2 && b == 1 && c == 3) {
            System.out.println( b + " " + a + " " + c );
        }
        else if ( a == 2 && b == 3 && c == 1) {
            System.out.println( c + " " + a + " " + b );
        }
        
        // Colocando na sequência das possibilidades 312 e 321
        else if ( a == 3 && b == 1 && c == 2) {
            System.out.println( b + " " + c + " " + a );
        }
        else {
            System.out.println( c + " " + b + " " + a );
        }

    }
}
