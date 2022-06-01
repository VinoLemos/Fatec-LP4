
const BemVindo = function() { return <h1>Linguagem de Programação 4</h1> }

function BemVindo2(props) {return <h1>Bem vindo {props.nome} </h1>}
function Alterar2(props) {return <h1>{props.alterar2}</h1>}

// AeroFunction
const BemVindo3 = (props) => <h1>Idade: {props.idade} <br/>Endereço: {props.endereco}</h1>

export {BemVindo, BemVindo2, BemVindo3, Alterar2};