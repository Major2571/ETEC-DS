
package Temperatura;

import javax.swing.JOptionPane;

public class TemperaturaJOptionPane {
    
    public static void main(String[] args) {
        
        double C, F, K, Re, Ra;
        
        C = Double.parseDouble(JOptionPane.showInputDialog(" Conversão de Temepraturas \n Digite um valor em Graus °C: "));
        
        F = C * 1.8 + 32; 
        K = C + 273.15; 
        Re = C * 0.8; 
        Ra = C * 1.8 + 32 + 459.67;
        
        JOptionPane.showMessageDialog(null, " A temepratura de " + C + "°C corresponde à: \n" + 
                                            F + "°F (Fahrenheit)\n" +
                                            K + "°K (Kelvin) \n" + 
                                            Re + "°Re (Réaumur) \n" + 
                                            Ra + "°Ra (Rankine)" );

    }
}
