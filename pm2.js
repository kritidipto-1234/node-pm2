const os = require('os');
const cluster = require('cluster');

const cpuCount = os.cpus().length;


console.log(`The total number of CPUs is ${cpuCount}`);
console.log(`Primary pid=${process.pid}`);

cluster.setupPrimary({
  exec: __dirname + "/server.js",
});

for (let i = 0; i < 1; i++) {
//   cluster.fork({PORT: 3000 + i});
  cluster.fork({});
}

cluster.on("exit", (worker, code, signal) => {
  console.log(`worker ${worker.process.pid} has been killed`);
  console.log("Starting another worker");
  cluster.fork();
});