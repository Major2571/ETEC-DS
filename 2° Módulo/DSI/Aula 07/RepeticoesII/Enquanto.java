package RepeticoesII;

public class Enquanto {

    public static void main(String[] args) {

        int i = 0, par = 0, impar = 0;

        while (i < 100) {

            i++;

            if (i % 2 == 0) {
                par = par + i;
            } else {
                impar = impar + i;
            }

        }

        System.out.println(" Soma de N° Pares = " + par);
        System.out.println(" Soma de N° Impares = " + impar);
        System.out.println(" Soma total = " + (impar + par));

        if (par > impar) {
            System.out.println(" \n Soma de Pares é maior! ");
        } else {
            System.out.println(" \n Soma de Imares é maior! ");
        }

    }

}
