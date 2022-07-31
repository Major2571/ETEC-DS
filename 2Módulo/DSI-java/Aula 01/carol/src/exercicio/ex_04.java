package exercicio;

public class ex_04 {
    
    public static void main (String []args) {
        
        int x = 100;
        double porcento = x * 0.17;
        double desc = x - porcento;
        double lucro = x + porcento;
        
        System.out.println( " 17% de " + x + " é igual a: " + porcento + 
                            " \n Desconto de 17%: " + desc +
                            " \n Lucro de 17%: " + lucro);
        
    }
    
}
