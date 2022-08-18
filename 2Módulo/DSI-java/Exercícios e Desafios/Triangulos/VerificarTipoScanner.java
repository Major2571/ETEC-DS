/*

Exercício
Verificar qual é o tipo de triângulo a partir dos angulos informados;
Triângulo Equilátero = 3 lados iguais
Triângulo Isósceles = 2 lados iguais
Triângulo Escaleno = nenhum lado igual

 */
package Triangulos;

import java.util.Scanner;

public class VerificarTipoScanner {

    public static void main(String[] args) {

        Scanner x = new Scanner(System.in);

        double a = 0.0, b = 0.0, c = 0.0;

        System.out.println(" Tipos de Triangulos ");
        System.out.println(" Digite o valor do lado A: ");
        a = Double.parseDouble(x.nextLine());

        System.out.println(" Digite o valor do lado B: ");
        b = Double.parseDouble(x.nextLine());

        System.out.println(" Digite o valor do lado C: ");
        c = Double.parseDouble(x.nextLine());

        if ((a == b) && (b == c)) {
            System.out.println(" O Triângulo é Equilátero! ");
        } else if ((a == b) || (b == c) || (a == c)) {
            System.out.println(" O Triângulo é Isósceles! ");
        } else {
            System.out.println(" O Triângulo é Escaleno! ");
        }

    }

}
