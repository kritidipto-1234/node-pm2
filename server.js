const express = require("express");
const app = express();
const path = require("path");
const morgan = require("morgan");

// Define the directory where your static files are located (e.g., "public" folder)
const staticDir = path.join(__dirname, "public");
app.use(morgan("dev"));
app.get("/afterdomload.js", (req, res) => {
  console.log("Delayed after dom load script")
  setTimeout(() => {
    res.sendFile(path.join(staticDir, "afterdomload.js")); // Replace with the actual file name
  }, 400); // 2000 milliseconds (2 seconds)
});

// Serve static files from the "public" directory
app.use(express.static(staticDir));



// Start the server
const port = process.env.PORT || 3000;
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
