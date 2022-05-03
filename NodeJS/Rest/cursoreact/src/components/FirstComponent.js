import AnotherComponent from "./AnotherComponent";
//
function FirstComponent()
{
    let name = "Carlos";
    // Coponente criado
    return(
        <div>
            <p> Primeiro Component </p>
            {2+2}
            <p> Nome: {name}</p>
            <AnotherComponent/>
        </div>
    );
    //
}

export default FirstComponent;