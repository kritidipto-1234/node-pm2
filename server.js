const express = require("express");
const app = express();
const path = require("path");
const morgan = require("morgan");
const { Worker } = require('worker_threads');


// Define the directory where your static files are located (e.g., "public" folder)
const staticDir = path.join(__dirname, "public");
// app.use(require('express-status-monitor')())
// app.use(morgan("dev"));
app.get("/slow.js", (req, res) => {
  console.log("Delayed script")
  setTimeout(() => {
    res.sendFile(path.join(staticDir, "slow.js")); // Replace with the actual file name
  }, 1000); // 2000 milliseconds (2 seconds)
});

// app.get("/fast.js", (req, res) => {
//   console.log("Fast script")
//   setTimeout(() => {
//     res.sendFile(path.join(staticDir, "fast.js")); // Replace with the actual file name
//   }, 1); // 2000 milliseconds (2 seconds)
// });

// Serve static files from the "public" directory
app.use(express.static(staticDir));

app.get("/sum", (req, res) => {
  res.setHeader('Cache-Control', 'no-store');
  const n = parseInt(req.query.n, 10);
  console.log("Value of n: " + n);
  let sum = 0;
  for (let i = 0; i < n; i++) {
    sum += Math.floor(Math.random() * 100); // assuming random numbers between 0 and 99
  }
  console.log("Calculated sum: " + sum);
  res.send(sum.toString());
});

app.get("/async-sum", async (req, res) => {
  res.setHeader('Cache-Control', 'no-store');
  const n = parseInt(req.query.n, 10);
  console.log("Value of n: " + n);
  let sum = 0;
  
  await new Promise((resolve) => {
    for (let i = 0; i < n; i++) {
      sum += Math.floor(Math.random() * 100); // assuming random numbers between 0 and 99
    }
    resolve();
  });

  console.log("Calculated sum: " + sum);
  res.send(sum.toString());
});


app.get("/workersum", (req, res) => {
	res.setHeader('Cache-Control', 'no-store');
	const n = parseInt(req.query.n, 10);
	console.log("Value of n: " + n);
  
	const worker = new Worker(path.join(__dirname, 'sumWorker.js'));
	worker.postMessage(n);
  
	worker.on('message', (sum) => {
	  console.log("Calculated sum: " + sum);
	  res.send(sum.toString());
	//   worker.terminate();
	});
  
	worker.on('error', (error) => {
	  console.error("Worker error: ", error);
	  res.status(500).send("Internal Server Error");
	});
  
	worker.on('exit', (code) => {
	  if (code !== 0) {
		console.error(`Worker stopped with exit code ${code}`);
	  }
	});
  });

// Start the server
const port = process.env.PORT || 3000;
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
