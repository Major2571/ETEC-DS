package CalculadoraJOptionPane;

import javax.swing.JOptionPane;

public class CalculadoraIf {

    public static void main(String[] args) {

        int op;

        do {

            op = Integer.parseInt(JOptionPane.showInputDialog(" Calculadora \n Escolha uma operação: \n 1. Soma ( + ) \n 2. Subtração ( - ) \n 3. Multiplicação ( * ) \n 4. Divisão ( / ) "));

        } while ((op < 1) || (op >= 5));

        if (op == 1) {
            Operacoes a = new Operacoes();
            a.soma();
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
