import './App.css';
import {useState, useEffect} from 'react';
// Impota icones licheira e bandeiras
import {Bstrash, BsBookmarkCheck, BsBookmarkCheckFill} from 'react-icons/bs';

const API = "http://localhost:5000";

function App() {
  // Estado da Aplicação
  const [title, setTitle] = useState("");
  const [time, setTime] = useState("");
  const [todos, setTodos] = useState([]);
  const [loading, setLoading] = useState(false);

  //Load todos on page load
  useEffect(()=>
  {
	const loadData = async()=>
	{
		setLoading(true);
		//
		const res = await fetch(API + "/todos")
			.then((res)=>res.jon)
			.then((data)=>data.json)
		.catch((err)=>console.log(err));
		//
		setLoading(false);
		setTodos(res);
	};
	loadData();
  }, []);

  // Funções da Aplicação
  const handleSubimit = async (evento) =>{
	  evento.preventDefault();//Para a execução do evento

	  // Eviar para api
	  const todo = {
		  id: Math.random(),
		  title,
		  time,
		  done: false,
	  };

	  await fetch(API+"/todos",{
		  method: "POST",
		  body: JSON.stringify(todo),
		  headers:{
			  "Content-Type": "application/json",
		  }
	  });

	  setTodos((prevState)=>[...prevState,todo]);

	  // Zerar os inputs
	  setTitle("");
	  setTime("");

	  // Comfirmação por console
	  console.log("Enviou!");
  }

  return (
    <div className="App">
		<div className="todo-header">
			<h1>React Todo</h1>
		</div>

		<div className = "form-todo">
			<h2> Insira a sua próxima tarefa:</h2>

			<form onSubmit={handleSubimit}>
				<div className="form-control">
					<label htmlFor="title">O que voce vai fazer?</label><br/>
					<input
						type="text"
						name="title"
						placeholder="Título da terefa"
						onChange={(evento) => setTitle(evento.target.value)}
						value={title || ""}
						required
					/>
				</div>
				
				<div className="form-control">
					<label htmlFor="time">Duração</label><br/>
					<input
						type="text"
						name="time"
						placeholder="Tempo estimado(em horas)"
						onChange={(evento) => setTime(evento.target.value)}
						value={time || ""}
						required
					/>
				</div>

				<input type="submit" value="Criar Tarefa"/>
			</form>
		</div>

		<div className="list-todo">
			<h2>Lista de tarefas:</h2>
			{/*Tarefa codicional (Exibe texto quando array vazio)*/}
			{/*todos.length === 0 && <p> Não há tarefas! </p>*/}
			{todos.map((todo)=>(
				<div className="todo" key={todo.id}>
					<h3>{todo.title}</h3>
					<p>Duração:{todo.time}</p>
					<div className="actions">
						<span>
							{!todo.done ? <BsBookmarkCheck/>: <BsBookmarkCheckFill/>}
						</span>
					</div>
				</div>
			))}
		</div>
    </div>
  );
}

export default App;
