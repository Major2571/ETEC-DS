/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package LacosDeRepetiçoes;

/**
 *
 * @author CAMARGO
 */
public class ForComparar {
    public static void main(String[] args) {
        
       int i, totalImpar = 0, totalPar = 0;

        for (i = 0; i <= 100; i++) {

            if (i % 2 == 0) {
                totalPar = totalPar + i;
            } else {
                totalImpar = totalImpar + i;
            }

        }
            
        if( totalPar > totalImpar ){
            System.out.println(totalPar + " é maior que " + totalImpar);
        }
        else {
            System.out.println(totalImpar + " é maior que " + totalPar);
        }
    }
    
    
}
