package com.example.projetoagenda;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {
    // classe do tipo botão
    Button btCadastro;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // atribui o valor do frontEnd;
        btCadastro = findViewById(R.id.cadastro);

        // esse cara é responsavel por saber que o botão sera clicado;
        btCadastro.setOnClickListener(new View.OnClickListener() {
            @Override       // View é nosso front
            public void onClick(View view) {

                // Orientação e obejto - chamar um método;
                segundaTela();

            }
        });
    }

    // nosso método, void;
    private void segundaTela() {

        Intent it = new Intent(this, Cadastro.class);
        startActivityForResult(it, 1);
    }

}




















