const assert = require('assert');
const Math = require('../src/math.js');

describe('Math class', ()=>{
    // Comportamento esperado
    it('Sun two numbers', (done)=>{
        const math = new Math();

        this.timeout(3000);

        math.sum(5,5, (value) => {
            assert.equal(value,15);
            done();
        });
    });

    it('Multiply two numbers',());
});