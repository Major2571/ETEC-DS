package com.example.projetoagenda;

import android.content.ContentValues;
import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

import androidx.annotation.Nullable;

public class BancoDeDados extends SQLiteOpenHelper {


    public static final int VERSAO_BANCO = 1;
    public static final String BANCO_AGENDA = "bd_agenda";

    public BancoDeDados(Context context) {
        super(context, BANCO_AGENDA, null, VERSAO_BANCO);
    }


    public static final String TABELA_AGENDA = "tab_agenda";
    public static final String COLUNA_CODIGO = "codigo";
    public static final String COLUNA_NOME = "nome";
    public static final String COLUNA_TELEFONE = "telefone";
    public static final String COLUNA_EMAIL = "email";
    public static final String COLUNA_ENDERECO = "endereco";

    // sobrecargas de métodos
    @Override
    public void onCreate(SQLiteDatabase db) {

        String CRIAR_TABELA = "CREATE TABLE " + TABELA_AGENDA + "(" + COLUNA_CODIGO + " INTEGER PRIMARY KEY AUTOINCREMENT, " +
                COLUNA_NOME + " TEXT," +
                COLUNA_TELEFONE + " TEXT," +
                COLUNA_EMAIL + " TEXT," +
                COLUNA_ENDERECO + " TEXT)";

        db.execSQL(CRIAR_TABELA);

    }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {
    }

    void addPessoa(Pessoa pessoa){
        SQLiteDatabase db = this.getWritableDatabase();

        ContentValues valor = new ContentValues();

        valor.put(COLUNA_NOME, pessoa.getNome());
        valor.put(COLUNA_TELEFONE, pessoa.getTelefone());
        valor.put(COLUNA_EMAIL, pessoa.getEmail());
        valor.put(COLUNA_ENDERECO, pessoa.getEndereco());

        db.insert(TABELA_AGENDA, null, valor);
        db.close();

    }

    void apagarPessoa(Pessoa pessoa){

        SQLiteDatabase db = this.getWritableDatabase();

        db.delete(TABELA_AGENDA, COLUNA_CODIGO + " = ?", new String[] {
                String.valueOf(pessoa.getCodigo());
        });
    }
}












