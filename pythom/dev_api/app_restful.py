from flask import Flask, jsonify, request
from flask_restful import Resource, Api
from desenvolvedor import Desenvolvedor, List_devs, List_habilidades
import json

app = Flask(__name__)
api = Api(app)

# Rotas
api.add_resource(Desenvolvedor, '/dev/<int:dev_id>/')
api.add_resource(List_devs, '/dev/list/')
api.add_resource(List_habilidades, '/dev/habilidade/<int:dev_id>/')

# Exeta apartir do arquivo principal
if __name__ == '__main__':
    app.run(debug=True)
