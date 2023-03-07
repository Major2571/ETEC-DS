import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View } from 'react-native';
import Constants from 'expo-constants';

import Cards from './assets/js/Card';

export default function App() {
  return (
    <View style={styles.container}>
      <Text>Hello World!</Text>
      <Cards />
      <StatusBar style="auto" />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#cdf',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
