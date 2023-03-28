import * as React from 'react';
import { Button, StyleSheet, Text, View } from 'react-native';

export default class Contador extends React.Component {
  constructor() {
    // iniciar classe
    super(); // classe mãe, tudo que for cliado aqui é global
    this.state = {
      contador: 0
    };
  }

  Incrementar() {
    this.setState({
      contador: this.state.contador + 1
    });
  }

  Decrementar() {
    this.setState({
      contador: this.state.contador - 1
    });
  }

  render() {
    return (
      <View style={styles.container}>

        <View style={styles.texto}>
          <Text>{this.state.contador}</Text>
        </View>

        <View style={styles.botoes}>
          <Button
            style={styles.botao1}
            title="Aumentar"
            onPress={this.Incrementar.bind(this)}
          />

          <Button
            style={styles.botao2}
            title="Diminuir"
            onPress={this.Decrementar.bind(this)}
          />
        </View>
        
      </View>
    );
  }
}

const styles = StyleSheet.create({
    container: {
        margin: 'auto'
    },
    botoes: {
        display: 'flex',
        flexDirection: 'row',
        justifyContent: 'space-around',
    },
    texto: {
        alignItems: 'center',
        margin: 50,
        fontSize: 30
    },
    botao1: {
        textAlign: 'center',
        color: '#f0f',
        
    }
})








