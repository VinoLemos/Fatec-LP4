import logo from './logo.svg';
import './App.css';
import {BemVindo, BemVindo2, BemVindo3, Alterar2} from './bemvindo.js';
import Tabela from './tabela.js';
import {Component} from 'react';
import Contador from './contador';
import Alterar from './alterar';

class App extends Component
{
  state = { contador: 0, outras:"xxx"}

  constructor(props) {super(props)}

  incrementa()
  {
    //const {contador} =  this.state;
    this.setState ( { contador: this.state.contador + 1 }) ;
  }

  alterar()
  {
    //const {contador} =  this.state;
    //this.state.outras = "xxx" ? "yyy" : xxx;
    if (this.state.outras == "xxx")
    {
      this.setState( { contador: this.state.outras="yyy"});
    }else {
    this.setState( { contador: this.state.outras="xxx"});    
    }
  }

  render()
  {
    return (
    <div className="App">
      <header className="App-header">
        <BemVindo />
        <Alterar2 alterar2={this.state.outras} />
        <BemVindo2 nome="Vinícius" />
        <BemVindo3 idade="25" endereco="Praia Grande"/>
        <Tabela dados={ [{id:1,nome:"Talita"}, {id:2,nome:"Vinícius"}] } />
        <Contador funcao={this.incrementa.bind(this)}/>
        <Alterar funcao={this.alterar.bind(this)}/>
      </header>
    </div>
    );
  }
}

export default App;
