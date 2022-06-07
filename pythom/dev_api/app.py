from flask import Flask, jsonify, request
import json

app = Flask(__name__)
devs = [
    {
        'id': '0',
        'nome': 'Rafael',
        'habilidade':
        [
            'Python',
            'Flask'
        ]
    },
    {
        'id': '1',
        'nome': 'Galleani',
        'habilidade':
        [
            'Python',
            'Django'
        ]
    }
]


# Devolve um dev pelo id, altera e deleta um dev
@app.route('/dev/<int:id>', methods=['GET', 'PUT', 'DELETE'])
def desenvolvedor(dev_id):
    response = {}
    try:
        if request.method == 'GET':
            response = devs[dev_id]

        elif request.method == 'PUT':
            dados = json.loads(request.data)
            devs[dev_id] = dados

        elif request.method == 'DELETE':
            devs.pop(dev_id)
            response = {'status': 'sucesso', 'mensagem': 'Registro excluido'}

    except IndexError:
        response = {'status': 'erro', 'mensagem': f'Desenvolvedor ID{dev_id} não existe'}

    except Exception as error:
        response = {'status': 'erro', 'mensagem': 'Erro desconhecido. Procure o adm da API', 'info': error}

    finally:
        return jsonify(response)


@app.route('/dev', methods=['GET', 'POST'])
def list_dev():
    response = {}
    try:
        if request.method == 'GET':
            response = devs

        elif request.method == 'POST':
            dados = json.loads(request.data)
            posicao = len(devs)
            dados['id'] = posicao
            devs.append(dados)
            response = {'status': 'sucesso', 'mesagem': 'Registro inserido'}

    except Exception as error:
        response = {'status': 'erro', 'mensagem': 'Erro desconhecido. Procure o adm da API', 'info': error}

    finally:
        return jsonify(response)


if __name__ == '__main__':
    app.run(debug=True)
