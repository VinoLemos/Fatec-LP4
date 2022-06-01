import {Component} from 'react';

class Tabela extends Component
{
    constructor(props){
        super(props);
    }

    render(){
        return(

            <table>        
                <tr> <th>Id</th> <th>Nome</th> </tr>
                { this.props.dados.map( (json) => <tr> <td key={json.id}>{json.id}</td> <td>{json.nome}</td> </tr>) }
            </table>
        )
    }
}

export default Tabela