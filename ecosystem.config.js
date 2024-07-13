// module.exports = {
// 	apps: [
// 	  {
// 		name: "server",
// 		script: "./server.js",
// 		instances: 3,
// 		exec_mode: "cluster",
// 		env: {
// 		  NODE_ENV: "development",
// 		},
// 		env_production: {
// 		  NODE_ENV: "production",
// 		},
// 	  },
// 	],
//   };

  module.exports = {
	apps: Array.from({ length: 8 }, (v, i) => ({
	  name: `server${i + 1}`,
	  script: './server.js',
	//   watch: true,
	  instance:1,
	  exec_mode: "fork",
	  env: {
		PORT: 3000 + i
	  }
	}))
  };