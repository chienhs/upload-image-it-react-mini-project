import { useState } from "react";
import reactLogo from "./assets/react.svg";
import viteLogo from "/vite.svg";
import "./App.css";

import axios from "axios";

function App() {
  const [count, setCount] = useState(0);
  const [error, setError] = useState(null);
  const [processs, setProcess] = useState({ started: false, pc: 10 })
  const [file, setFile] = useState(null);
  function handleUpload() {
    if (!file) {
      setError("No the selected file");
      return;
    }
    console.log("processs bf: ",processs)
    setError("Uploding file...");
    setProcess((prv) => { return { ...prv, started: true } })
    console.log("processs af: ",processs)
    axios.post(
      "http://127.0.0.1:8000/api/upload-image",
      file,

      {
        onUploadProgress: (processsEvent) => {
          setProcess((prv) => { return { ...prv, pc: processsEvent.progress * 100 } })
          console.log("processsEvent: ",processs, processsEvent.progress*100);
        },
      }
    ).then((res) => {
      setError("Upload successfully");
      console.log(res);
    }).catch((err) => {
      setError("Upload failed");
      console.log(err);
    });
  }
  return (
    <>
      <div>
        <a href="https://vitejs.dev" target="_blank">
          <img src={viteLogo} className="logo" alt="Vite logo" />
        </a>
        <a href="https://react.dev" target="_blank">
          <img
            src={reactLogo}
            className="logo react"
            alt="React logo"
          />
        </a>
      </div>
      <h2>Upload Page &#40;Without 3rd party libary &#41;</h2>
      <div className="card">
        <input
          accept="image/*"
          onChange={(e) => setFile(e.target.files[0])}
          type="file"
        />
        <button
          style={{ marginLeft: "20px" }}
          onClick={handleUpload}
        >
          Upload
        </button>
        <p> {processs.started && <progress value={processs.pc} max="100"></progress>}</p>

        <p> {error && <span> {error}</span>}</p>
      </div>
      <p className="read-the-docs">
        Click on the Vite and React logos to learn more
      </p>
    </>
  );
}

export default App;
