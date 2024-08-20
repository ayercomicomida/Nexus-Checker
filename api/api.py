import os
import time
import json
import random
import requests
import datetime
from flask import Flask, request, jsonify

# Importando as gates
from gates import braintree

app = Flask(__name__)
port = int(os.environ.get('PORT', 5511))


@app.route('/api/gates', methods=['GET'])
def fredhutch():
    gateway = request.args.get('gateway')
    cc = request.args.get('card')

    if not cc:
        return jsonify({'error': 'Missing required parameters'}), 400

    number, month, year, cvv = cc.split('|')
    validMonth = '09'
    validYear  = '2024'

    if int(year) < int(validYear) or int(year) == int(validYear) and int(month) < int(validMonth):
        return jsonify({'error': 'Invalid Card', 'Card': cc, 'reason': 'Dead'}), 400

    try:
        
        if gateway == 'Braintree beta':
            response = braintree.graacc(number, month, year, cvv)

            response_map = {
                'Declined': 'Declined Card',
                'amero do cart': 'Invalid Card Number',
                'Gateway Rejected: risk_threshold': 'Gateway Rejected: risk_threshold',
                'Gateway Rejected: fraud': 'Gateway Rejected: Anti Fraud',
                'Inconsistent Data': 'Inconsistent Data',
                'Transaction Not Allowed': 'Transaction Not Allowed',
                'Não foi possível processar seu pedido, tente novamente': 'Não foi possível processar seu pedido',
            }
            reason = next((reason for key, reason in response_map.items() if key in response.text), 'Live')
        
        elif gateway == 'Braintree':
            response = braintree.fredhutch(number, month, year, cvv)

            response_map = {
                'CARD_DECLINED': 'Declined',
                'FIELD_VALIDATION': 'Validation',
            }
            reason = next((reason for key, reason in response_map.items() if key in response.text), 'Live')
            
        return jsonify({
            'card': cc,
            'reason': reason
        }), 200
    
    except requests.RequestException as e:
        print('Error:', str(e))
        return jsonify({
            'status': 500,
            'data': 'internal server error',
            'error': e
        })


# Banco de dados KKKJASKASKASK
DATABASE = './database/database.json'

def load_users():
    try:
        with open(DATABASE, 'r') as f:
            data = json.load(f)
            #print("Usuários carregados:", data)
            return data
    except FileNotFoundError:
        return {}

def save_users(users):
    with open(DATABASE, 'w') as f:
        json.dump(users, f, indent=4)

def generate_user_id(users):
    sequential_part = str(len(users) + 1).zfill(1)  # Preenche com zeros à esquerda, ex: "000001"
    random_part = str(random.randint(1000, 9999))  # Gera um número aleatório de 3 dígitos
    return sequential_part + random_part  # Exemplo de saída: "000001123"

def remove_expired_users(users):
    current_date = datetime.date.today()
    expired_users = [username for username, details in users.items()
                     if 'expiration_date' in details and datetime.date.fromisoformat(details['expiration_date']) < current_date]

    for username in expired_users:
        del users[username]

    if expired_users:  # Salva as mudanças apenas se alguma conta foi removida
        save_users(users)
    

@app.route('/register', methods=['POST'])
def register():
    data = request.get_json()
    users = load_users()

    remove_expired_users(users)

    if data['username'] in users:
        return jsonify({'message': 'Usuário já existe!'}), 400


    user_id = generate_user_id(users)  # Gerando o ID formatado
    expiration_date = (datetime.date.today() + datetime.timedelta(days=30)).isoformat()  # Expiração em 30 dias

    users[data['username']] = {
        'id': user_id,
        'plan': data['plan'],
        'username': data['username'],
        'password': data['password'],
        'expiration_date': data['expiration_date']
    }

    save_users(users)
    return jsonify({'message': 'Usuário registrado com sucesso!', 'id': user_id, 'expiration_date': expiration_date})

@app.route('/login', methods=['POST'])
def login():
    data = request.get_json()
    users = load_users()

    remove_expired_users(users)

    username = data.get('username')
    password = data.get('password')

    if not username or not password:
        return jsonify({'message': 'Nome de usuário e senha são obrigatórios!'}), 400

    user = next((user for user in users.values() if user['username'] == username), None)

    if not user or user['password'] != password:
        return jsonify({'message': 'Login ou senha incorretos! (Ou sua conta Expirou)'}), 401

    return jsonify({'message': 'Login realizado com sucesso!', 'username': user['username'], 'user_id': user['id'], 'plan': user['plan'], 'expiration_date':user['expiration_date']})



if __name__ == '__main__':
    app.run(host='0.0.0.0', port=port, debug=True)