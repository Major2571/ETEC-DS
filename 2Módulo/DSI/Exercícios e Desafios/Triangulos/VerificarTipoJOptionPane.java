/*

Exercício
Verificar qual é o tipo de triângulo a partir dos angulos informados;
Triângulo Equilátero = 3 lados iguais
Triângulo Isósceles = 2 lados iguais
Triângulo Escaleno = nenhum lado igual

 */

package Triangulos;

import javax.swing.JOptionPane;

public class VerificarTipoJOptionPane {
    
    public static void main(String[] args) {
        
        double a, b, c;
        
        a = Double.parseDouble(JOptionPane.showInputDialog("Digite o valor do lado A: "));
        b = Double.parseDouble(JOptionPane.showInputDialog("Digite o valor do lado B: "));
        c = Double.parseDouble(JOptionPane.showInputDialog("Digite o valor do lado C: "));
        
        if ( ( a == b ) && ( b == c )){
            JOptionPane.showMessageDialog(null," Trinângulo Equilátero! ");
        } else if (( a == b ) || ( b == c ) || ( c == a)){
            JOptionPane.showMessageDialog(null," Trinângulo Isóceles! ");
        } else {
            JOptionPane.showMessageDialog(null," Trinângulo Escaleno! ");
        }
    }
    
}
