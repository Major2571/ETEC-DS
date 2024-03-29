import * as React from 'react';
import { Text, View, StyleSheet, Image } from 'react-native';

export default function Cards() {
  return (
    <View style={styles.container}>
      <Text style={styles.paragraph}>
        Eu sou um card!
      </Text>
      <Image style={styles.logo} source={require('../assets/img/pikachu-hi.gif')} />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    alignItems: 'center',
    justifyContent: 'center',
    padding: 24,
  },
  paragraph: {
    margin: 24,
    marginTop: 0,
    fontSize: 14,
    fontWeight: 'bold',
    textAlign: 'center',
  },
  logo: {
    height: 128,
    width: 128,
  }
});
