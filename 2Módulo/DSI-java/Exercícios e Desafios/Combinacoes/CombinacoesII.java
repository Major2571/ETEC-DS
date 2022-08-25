package Combinacoes;

public class CombinacoesII {

    public static void main(String[] args) {

        int a = 1,
            b = 2,
            c = 3;

        // Há 6 possibilidades de Permutação:
        // Começando com o 1: 123 e 132
        // Começando com o 2: 213 e 231
        // Começando com o 3: 312 e 321
        
        // Colocando na sequência das possibilidades 123 e 132
        if ((a < b) && (b < c) && (a < c)) {
            System.out.println(" A B C ");
        }
        else if ((a < b) && (b > c) && (a < c)) {
            System.out.println(" A C B ");
        }
        
        // Colocando na sequência das possibilidades 213 e 231
        else if ((a > b) && (b < c) && (a < c)) {
            System.out.println(" B A C ");
        }
        else if ((a < b) && (b > c) && (a > c)) {
            System.out.println(" B C A ");
        }
        
        // Colocando na sequência das possibilidades 312 e 321
        else if ((a > b) && (b < c) && (a > c)) {
            System.out.println(" C A B ");
        }
        else if ((a > b) && (b > c) && (a > c)) {
            System.out.println(" C B A ");
        }
    }
}
