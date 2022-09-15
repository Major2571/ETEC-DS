
package RepeticoesII;

public class Tabuada {
    
    public static void main(String[] args) {
        
        int i, j, res;
        
        // for é para valores determinados, tem q ter um "dominio", uma quantia exata;
        
        for(i = 1; i <=10; i++) {
            
            for( j = 1; j <=10; j++){   
                res = i * j;
                System.out.println( i + " * " + j + " = " + res );
  
            }
            System.out.println( " " );
        }
            
            
    }
    
}
