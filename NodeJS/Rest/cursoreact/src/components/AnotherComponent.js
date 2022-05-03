//Classe ou função principal
const AnotherComponent = () =>
{
    const handleClick = ()=>
    {
        alert("Teste 001");
    }
    //
    return(
        <div>
            <h2>Segundo component</h2>
            <button onClick={handleClick}>Evento de click</button>
            <hr/>
            <button onClick={()=> prompt()}>Evento no Elemento</button>
        </div>
    );    
}
//
export default AnotherComponent;