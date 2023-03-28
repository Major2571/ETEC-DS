import * as React from 'react';
import { TouchableOpacity, Text } from 'react-native';

const BtnProps = ({ label, corFundo, onPress }) => {
    const btnStyle = {
        backgroundColor: corFundo,
        padding: 10,
        width: 100,
        height: 50,
        borderRadius: 5,
        margin: 30,
        justifyContent: 'center',
        alignItems: 'center',

        shadowColor: '#0E121A',
        shadowOffset: {
            width: 0,
            height: 5,
        },
        shadowOpacity: 0.4,
        shadowRadius: 10,
    };

    const btnText = {
        color: '#DDE2EC',
        fontSize: 15,
        fontWeight: 600,
    }

    return (
        <TouchableOpacity onPress={onPress} style={btnStyle}>
            <Text style={btnText}>{label}</Text>
        </TouchableOpacity>
    );
};

export default BtnProps;
