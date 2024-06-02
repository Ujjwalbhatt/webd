import React, { useState } from 'react';
import './App.css';

function App() {
  const [timer, setTimer] = useState(0);
  const [intervalId, setIntervalId] = useState(null); // To store the interval ID

  // Starts the timer when called
  const startTimer = () => {
    if (!intervalId) { // Prevent multiple intervals
      const id = setInterval(() => {
        setTimer(prevTimer => prevTimer + 1);
      }, 1000);
      setIntervalId(id); // Store the interval ID
    }
  };

  // Stops the timer when called
  const stopTimer = () => {
    clearInterval(intervalId); // Stop the interval using its ID
    setIntervalId(null); // Reset the interval ID state
  };
  // Stops the timer when called
  const clearTimer = () => {
    clearInterval(intervalId); 
    setIntervalId(null); 
    setTimer(0);
  };

  return (
    <div className="App">
      <header className="App-header">
        <h1>Timer: {timer} seconds</h1>
        <button onClick={startTimer}>Start Timer</button>
        <button onClick={stopTimer}>Stop Timer</button>
        <button onClick={clearTimer}>clear Timer</button>
      </header>
    </div>
  );
}

export default App;
