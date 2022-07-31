
package exercicio;

import javax.swing.JOptionPane; // importar biblioteca

public class ex_05 {
    public static void main (String [] args) {
        
        // caixa para inserir um valor
        String nome = JOptionPane.showInputDialog("Digite seu nome: ");
        
        // caixa de diálogo
        JOptionPane.showMessageDialog(null, "Boa Noite!"); // se tirar o null da erro, padrão para mostrar mensagens
    }
}
