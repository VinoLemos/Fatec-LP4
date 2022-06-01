
const Contador = function(props)
{
    return(
        <button onClick= { () => props.funcao()}>Incrementar</button>
    );
}
export default Contador