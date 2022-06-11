from flask import Flask, jsonify, request
from flask_restful import Resource
import json

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
}]

class Desenvolvedor(Resource):
    response = {}
    
    # Devolve um dev pelo id
    def get(self, dev_id):
        try:
            response = devs[dev_id]

        except IndexError:
            response = {'status': 'erro', 'mensagem': f'Desenvolvedor ID {dev_id} não existe'}

        except Exception as error:
            response = {'status': 'erro', 'mensagem': 'Erro desconhecido. Procure o adm da API', 'info': error}

        finally:
            return (response)
    
    # Permite alterar um cadastro
    def put(self, dev_id):
        try:
            dados = json.loads(request.data)
            devs[dev_id] = dados
            response = dados

        except IndexError:
            response = {'status': 'erro', 'mensagem': f'Desenvolvedor ID {dev_id} não existe'}

        except Exception as error:
            response = {'status': 'erro', 'mensagem': 'Erro desconhecido. Procure o adm da API', 'info': error}

        finally:
            return (response)

    # Apaga um cadastro da lista
    def delete(self, dev_id):
        try:
            devs.pop(dev_id)
            response = {'status': 'sucesso', 'mensagem': 'Registro excluido'}

        except IndexError:
            response = {'status': 'erro', 'mensagem': f'Desenvolvedor ID {dev_id} não existe'}

        except Exception as error:
            response = {'status': 'erro', 'mensagem': 'Erro desconhecido. Procure o adm da API', 'info': error}

        finally:
            return (response)

    # Permitie registrar um novo desenvolvedor
    def post(self):
        dados = json.loads(request.data)
        posicao = len(devs)
        dados['id'] = posicao
        devs.append(dados)
        return {'status': 'sucesso', 'mesagem': 'Registro inserido'}

class List_devs(Resource):

    # Lista todos os desenvolvedores
    def get(self):
        return devs

class List_habilidades(Resource):
    
    # Lista as habilidades de um cadastrado
    def get(self, dev_id):
        try:
            response = devs[dev_id]['habilidade']
        
        except IndexError:
            response = {'status': 'erro', 'mensagem': f'Desenvolvedor ID {dev_id} não existe'}

        except Exception as error:
            response = {'status': 'erro', 'mensagem': 'Erro desconhecido. Procure o adm da API', 'info': error}

        finally:
            return (response)
    
    # Permite alterar um cadastro
    def put(self, dev_id):
        try:
            dados = json.loads(request.data)
            devs[dev_id]['habilidade'] = dados
            response = dados

        except IndexError:
            response = {'status': 'erro', 'mensagem': f'Desenvolvedor ID {dev_id} não existe'}

        except Exception as error:
            response = {'status': 'erro', 'mensagem': 'Erro desconhecido. Procure o adm da API', 'info': error}

        finally:
            return (response)
    
    # Permitie registrar um novo desenvolvedor
    def post(self, dev_id):
        dados = json.loads(request.data)
        posicao = len(devs[dev_id]['habilidade'])
        dados['id'] = posicao

        # testa se habilidade ja esta cadastrada
        if dados['habilidade'] not in devs[dev_id]['habilidade']:
        
            devs[dev_id]['habilidade'].append(dados['habilidade'])
            return {'status': 'sucesso', 'mesagem': 'Registro inserido'}
        
        else:
            return {'status': 'Erro', 'mesagem': 'Habilidade já adicionada'}
        
