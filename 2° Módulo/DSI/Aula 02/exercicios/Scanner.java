package exercicios;

import java.util.Scanner;

public class Scanner {
    public static void main (String[] args) {
        Scanner x = new Scanner(System.in);
        
        String nome;
        
        System.out.println("Digite seu nome: ");
        nome = x.next(); //pede para o usuario inserir seu nome
        
        System.out.println("Seu nome é: " + nome );
        
    }
}
