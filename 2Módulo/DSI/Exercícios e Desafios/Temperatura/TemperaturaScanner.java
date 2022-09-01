/*

Escreva um programa que, com base em uma temperatura em graus celsius, 
a converta e exiba em Kelvin (K), Réaumur (Re), Rankine (Ra) e Fahrenheit (F), 
seguindo as fórmulas: 
  F = C * 1.8 + 32; 
  K = C + 273.15; 
  Re = C * 0.8; 
  Ra = C * 1.8 + 32 + 459.67

 */

package Temperatura;

import java.util.Scanner;

public class TemperaturaScanner {
    
    public static void main(String[] args) {
        
        Scanner x = new Scanner(System.in);
        
        double C, F, K, Re, Ra;
        
        System.out.println( " Conversão de Temepraturas \n Digite um valor em Graus °C: ");
        C = Double.parseDouble(x.nextLine());
        
        F = C * 1.8 + 32; 
        K = C + 273.15; 
        Re = C * 0.8; 
        Ra = C * 1.8 + 32 + 459.67;
        
        System.out.println( " A temepratura de " + C + "°C corresponde à: ");
        System.out.println( " -> " + F + "°F (Fahrenheit)");
        System.out.println( " -> " + K + "°K (Kelvin)");
        System.out.println( " -> " + Re + "°Re (Réaumur)");
        System.out.println( " -> " + Ra + "°Ra (Rankine)");
        
        
    }
    
}
