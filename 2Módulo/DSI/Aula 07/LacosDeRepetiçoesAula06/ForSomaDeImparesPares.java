package LacosDeRepetiçoesAula06;

public class ForSomaDeImparesPares {

    public static void main(String[] args) {

        int i, totalImpar = 0, totalPar = 0;

        for (i = 0; i <= 100; i++) {

            if (i % 2 == 0) {
                totalPar = totalPar + i;
            } else {
                totalImpar = totalImpar + i;
            }

        }
        
        // era só tirar do laço de repetição!
        System.out.println("Soma de N° Pares = " + totalPar);
        System.out.println("Soma de N° Impares = " + totalImpar);

    }
}
