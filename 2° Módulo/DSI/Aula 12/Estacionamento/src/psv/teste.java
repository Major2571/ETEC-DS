/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package psv;

import java.sql.*;
import java.util.*;

public class teste {

    public static void main(String[] args) {

        Connection con = Conexao.abrirConexao();

        CarroBean cb = new CarroBean();
        CarroDAO cd = new CarroDAO(con);

        // para inserir, alterar e excluir dados:
        // cb.setPlaca("DER7124");;;
        // cb.setCor("Amarelo");
        // cb.setDescricao("Carro 3");

        // para alterar ( a placa funciona como nosso where )
        // System.out.println(cd.alterar(cb));
        // para inserir: 
        // System.out.println(cd.inserir(cb));
        // cb.setPlaca("DER7123"); 
        // System.out.println(cd.excluir(cb));
        
        
        // para listar nossos dados
        List<CarroBean> lista = cd.listarTodos();
        if (lista != null) {
            for (CarroBean carro : lista) {
                System.out.println("Placa: " + carro.getPlaca());
                System.out.println("Cor: " + carro.getCor());
                System.out.println("Descrição:" + carro.getDescricao());
            }
        }

    }

}
