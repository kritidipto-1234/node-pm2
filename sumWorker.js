const { parentPort,threadId } = require('worker_threads');

parentPort.on('message', (n) => {
  let sum = 0;
  for (let i = 0; i < n; i++) {
    sum += Math.floor(Math.random() * 100); // assuming random numbers between 0 and 99
  }
  parentPort.postMessage(sum);
  process.exit();
});

setInterval(()=>{
	// Perform a memory/cpu intensive task: Calculate the first 10,000 prime numbers
	function isPrime(num) {
		if (num <= 1) return false;
		if (num <= 3) return true;
		if (num % 2 === 0 || num % 3 === 0) return false;
		for (let i = 5; i * i <= num; i += 6) {
			if (num % i === 0 || num % (i + 2) === 0) return false;
		}
		return true;
	}

	function calculatePrimes(limit) {
		const primes = [];
		let num = 2;
		while (primes.length < limit) {
			if (isPrime(num)) {
				primes.push(num);
			}
			num++;
		}
		return primes;
	}

	const primes = calculatePrimes(99999999);
	// console.log(`Calculated ${primes.length} primes`);
	console.log("worker running",threadId)
},2000)