package LacosDeRepetiçoesAula06;

public class ForNumerosImparesPares {

    public static void main(String[] args) {

        int i;

        for (i = 0; i <= 100; i++) {

            if (i % 2 == 0) {
                System.out.println(i + " (  número par  )");
            } else {
                System.out.println(i + " ( número impar )");
            }

        }

    }
}
