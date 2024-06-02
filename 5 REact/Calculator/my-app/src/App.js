import './App.css';
import React,{useState} from 'react';
function App() {
  const [input,setInput] = useState('');
  const [result,setResult]=useState('');
  const handleclick = (value) =>{
    setInput((prevInput)=>prevInput+value);
  };
  const clearInput = () =>{
    setInput('');
    setResult('');
  };
  const Calculate = () =>{
     try{
      setInput(eval(input));
     }
     catch{
          setInput("Error");
     }
  };
  return (
    <div className='calculator_wrapper'>

    <div className='calculator'>
      <input type="text" readOnly value={input} className='calculator-input' />
      <div className='number-wrapper'>
          <button onClick={()=>handleclick('1')}>1</button>
          <button onClick={()=>handleclick('2')}>2</button>
          <button onClick={()=>handleclick('3')}>3</button>
          <button onClick={()=>handleclick('4')}>4</button>
          <button onClick={()=>handleclick('5')}>5</button>
          <button onClick={()=>handleclick('6')}>6</button>
          <button onClick={()=>handleclick('7')}>7</button>
          <button onClick={()=>handleclick('8')}>8</button>
          <button onClick={()=>handleclick('9')}>9</button>
          <button onClick={()=>handleclick('0')}>0</button>
          <button className='orange' onClick={()=>handleclick('*')}>x</button>
          <button className='orange' onClick={()=>handleclick('+')}>+</button>
          <button className='orange' onClick={()=>handleclick('-')}>-</button>
          <button className='orange' onClick={()=>handleclick('/')}>/</button>
          <button className='orange' onClick={()=>clearInput()}>C</button>
          <button className='orange is-bg' onClick={()=>Calculate()}>=</button>
      </div>
    </div>
    </div>
  );
}

export default App;
