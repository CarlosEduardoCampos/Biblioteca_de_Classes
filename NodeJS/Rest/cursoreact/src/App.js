import './App.css';
import AnotherComponent from './components/AnotherComponent';
import FirstComponent from './components/FirstComponent';
//import Images from './components/Images';
import Hooks from './components/Hooks';
import List from './components/List';
import RenderCound from './components/RenderCond';
import Fragment from './components/Fragment';
import Container from './components/Container';

function App() {
  return (
    <div className="App">
      <h2> Hello React </h2>
      <FirstComponent/>
      <AnotherComponent/>
      <Hooks/>
      <List/>
      <RenderCound x={8} y = {10}/>
      <Container>
        <h1> Este é Filho do container!</h1>
        <Fragment/>
      </Container>
      
    </div>
  );
}

export default App;
