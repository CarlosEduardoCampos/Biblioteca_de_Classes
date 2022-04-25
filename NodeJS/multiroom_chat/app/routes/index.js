module.exports = (aplication)=>
{
    aplication.get('/', (req,res)=>
    {
        res.send('Teste');
    });
}