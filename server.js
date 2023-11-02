const express = require("express");
const app = express();
const path = require("path");
const morgan = require("morgan");

// Define the directory where your static files are located (e.g., "public" folder)
const staticDir = path.join(__dirname, "public");
app.use(morgan("dev"));
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



// Start the server
const port = process.env.PORT || 3000;
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
