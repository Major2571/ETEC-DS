import * as React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import BtnProps from './components/btnProps';

const App = () => {

  return (
    <View style={style.container}>
        <Text style={style.text} > Btn TouchableOpacity: </Text>
      <View style={style.btn}>
        <BtnProps
          label='Hello'
          corFundo='#677EAB'
          msg={'Eu sou o btn 1'}
        />

        <BtnProps
          label='World'
          corFundo='#899ABE'
          msg={'Eu sou o btn 2'}
        />
      </View>
    </View>
  );
}

const style = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: '#33415c',
  },
  btn: {
    flexWrap: 'wrap',
    flexDirection: 'row'
  },
  text: {
    color: '#fff',
    fontSize: 32,
    fontWeight: 600,
    textAlign: 'center',
    textShadowColor: '#151d28',
    textShadowOffset: { width: -1, height: 1 },
    textShadowRadius: 10,
  }
});

export default App;