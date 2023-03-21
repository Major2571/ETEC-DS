import * as React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import Contador from './components/Contador';

// { StyleSheet, Text, View } -> componetes do React Native ( RN -> focado em mobile) 

export default function App() {
  return (
    <View style={style.body}>
      <Contador />
    </View>
  );
}


const style = StyleSheet.create({
  body: {
    margin: 'auto',
    display: 'flex',
    flexDirection: 'row',
    alignSelf: 'center',
    justifyContent: 'space-evenly',
    width: 300,
    height: 300,
  }
})