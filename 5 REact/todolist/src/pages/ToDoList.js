import React, { useState } from "react";
import './TodoList.css';

const ToDoList = () => {
  const [tasks, setTasks] = useState([]);
  const [inputValue, setInputValue] = useState("");

  const handleInputChange = (e) => {
    setInputValue(e.target.value);
  };

  const addTask = () => {
    if (inputValue.trim() !== "") {
      setTasks([...tasks, { text: inputValue, completed: false }]);
      setInputValue("");
    }
  };

  const toggleTaskCompletion = (index) => {
    const newTasks = tasks.map((task, i) =>
      i === index ? { ...task, completed: !task.completed } : task
    );
    setTasks(newTasks);
  };

  const deleteTask = (index) => {
    const newTasks = tasks.filter((_, i) => i !== index);
    setTasks(newTasks);
  };

  return (
    <div className="todo-list-app">
      <h1>To-Do List</h1>
      <div className="input-container">
        <input
          type="text"
          value={inputValue}
          onChange={handleInputChange}
          placeholder="Add a new task..."
        />
        <button onClick={addTask}>Add</button>
      </div>
      <ul className="todo-list">
        {tasks.map((task, index) => (
          <li key={index} className={`todolist-card ${task.completed ? "completed" : ""}`}>
            <div>
            <input
              type="checkbox"
              checked={task.completed}
              onChange={() => toggleTaskCompletion(index)}
              />
            {task.text}
            </div>
            <button onClick={() => deleteTask(index)} className="delete-task-button">Delete</button>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default ToDoList;
