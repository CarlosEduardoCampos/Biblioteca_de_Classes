const assert = require('assert');
const { spawn } = require('child_process');
const Math = require('../src/math.js');
const expect = require('chai').expect;
const sinon = require('sinon');

let value = 0; 

describe('Math class', ()=>{

    beforeEach(() =>{
        let value = 0
    });

    // Comportamento esperado
    it('Sun two numbers', ()=>{
        const math = new Math();

        value = math.sum(5, 5);
        expect(value).to.equal(10);

    });
    
    it('Multiply two numbers',() =>{
        const math = new Math(); 

        value = math.multiplay(5,5);
        assert.equal(value,25);
    });

    it('Object have name',() =>{
        const obj = {name : 'Celso Henrique'};
        
        expect(obj).to.have.property('name');
    });

    it.only('Calls req will sum and index values', ()=>{
        const req = {};
        const res = {
            load: sinon.spy()
        };

        const math = new Math();
        math.printSum(req, res, 5, 5);

        expect(res.load.calledOnce).to.be.true;
    });
});
