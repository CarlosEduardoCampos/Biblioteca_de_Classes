from flask import Flask, jsonify, request
import json
import requests

app = Flask(__name__)


@app.route('/<int:id>')
def pessoa(id):
    return jsonify({'id': id, 'nome': 'Rafael', 'idade': '30', 'profissao': 'Desenvolvedor'})


'''
    @app.route('/soma/<int:val1>/<int:val2>')
    def soma(val1, val2):
        return jsonify({'soma': val1 + val2})
'''


@app.route('/soma', methods=['POST', 'GET'])
def soma():
    total = 0
    try:
        if request.method == 'Post':
            dados = json.loads(request.data)# transforma string de dados em json
            total = sum(dados['val'])

        elif request.method == 'GET':
            total = 10 + 10

    except Exception as error:
        print(error)

    finally:
        return jsonify({'soma': total})


if __name__ == '__main__':
    app.run(debug=True)



