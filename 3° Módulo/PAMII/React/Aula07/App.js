import React from 'react';
import styled from 'styled-components/native';
import { StyleSheet, Text, View, TextInput, Button } from "react-native";

const Container = styled.View`
  flex: 1;
  background-color: #1d3557;
  align-items: center;
  justify-content: center;
`;

const MeuBtn = styled.Button`
  background-color: #000;
  width: 300px;
`;

const LoginInput = styled.TextInput`
  height: 40px;
  width: 300px;
  padding: 10px;
  margin: 0.5em;
  border: solid 1px #0005;
  background-color: #f5f5f5;
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

    <MeuBtn
      title='Entrar'
    />

  </Container>
);
