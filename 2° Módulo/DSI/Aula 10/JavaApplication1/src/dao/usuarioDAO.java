package dao;

import Factory.ConnectionFactory;
import Modelo.Usuario;
import java.sql.*;
import java.sql.PreparedStatement;

public class usuarioDAO {

    private Connection connection;
    Long id;
    String nome;
    String cpf;
    String email;
    String telefone;

    public usuarioDAO() {
        this.connection = new ConnectionFactory().getConnection();
    }

    public void adiciona(Usuario usuario) {
        String sql = "INSERT INTO usuario VALUES(null, ?,?,?,?)";

        try {

            PreparedStatement stmt = connection.prepareStatement(sql);
            stmt.setString(1, usuario.getNome());
            stmt.setString(2, usuario.getCpf());
            stmt.setString(3, usuario.getEmail());
            stmt.setString(4, usuario.getTelefone());
            stmt.execute();
            stmt.close();

        } catch (SQLException u) {
            throw new RuntimeException(u);
        }
    }

}
