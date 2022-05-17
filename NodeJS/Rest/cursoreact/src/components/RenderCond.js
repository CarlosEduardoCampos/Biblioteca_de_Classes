const RenderCound = ({x, y}) =>
{
    return(
        <div>
            {x > 5 && <p>x é maior que 5</p>}
            {x > 5 ? <p>x é um número alto</p> : <p> X é um numero baixo </p> }
            <p>
                O valor de y é: {y}
            </p>
        </div>
    );
}

export default RenderCound;