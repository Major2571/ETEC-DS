import React from 'react';
import styled from 'styled-components/native';
import { StyleSheet, Text, View, TextInput, TouchableOpacity } from "react-native";

const Container = styled.View`
  flex: 1;
  background-color: #1d3557;
  align-items: center;
  justify-content: center;
`;

const MeuBtn = styled.TouchableOpacity`
  background-color: #e63946;
  height: 40px;
  width: 300px;
  text-align: center;
  border-radius: 5px;
  color: #fff;
  padding: 10px;
  text-transform: uppercase;
`;

const LoginInput = styled.TextInput`
  height: 40px;
  width: 300px;
  padding: 10px;
  margin: 0.5em;
  border: solid 1px #0005;
  background-color: #a8dadc;
  border-radius: 5px;
`;

export default () => (
  <Container>

    <LoginInput
      placeholder='UserName'
    />
    <LoginInput
      placeholder='Password'
      secureTextEntry='true'
    />

    <MeuBtn>
      <Text>Login</Text>
    </MeuBtn>

  </Container>
);
