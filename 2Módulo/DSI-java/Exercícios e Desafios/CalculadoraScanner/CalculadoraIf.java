// Calculadora usando o Scanner e com o Condicional If
package CalculadoraScanner;

import java.util.Scanner;

public class CalculadoraIf {

    public static void main(String[] args) {

        Scanner x = new Scanner(System.in);

        int op;

        do {

            System.out.println(" Calculadora \n Escolha uma operação: \n 1. Soma ( + ) \n 2. Subtração ( - ) \n 3. Multiplicação ( * ) \n 4. Divisão ( / ) ");
            op = x.nextInt();

        } while ((op < 1) || (op >= 5));

        if (op == 1) {
            // criar instancia ( seria o nosso a, logo, um objeto que vai ser manipulado) para "chamar" o void (método) que criamos no arquivo Operacoes:
            Operacoes a = new Operacoes();
            a.soma(); // aqui ta chamando o nosso método soma 
        } else if (op == 2) {
            Operacoes b = new Operacoes();
            b.sub();
        } else if (op == 3) {
            Operacoes c = new Operacoes();
            c.mult();
        } else if (op == 4) {
            Operacoes d = new Operacoes();
            d.div();
        }

    }

}
