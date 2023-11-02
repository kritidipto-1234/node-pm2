// console.log("leta",leta);
// console.log("vara",vara);
// console.log("wina",wina);
// console.log("nulla",nulla);

// y="ooverridden;"
// console.log("x",x)
// console.log("y",y)
// console.log("window.y",window.y)


// // function* binaryToNumbers(arr) {
// //   for (const number of arr) {
// //     console.log(number / 10);
// //     yield number / 10;
// //   }
// // }

// // function* numberToMessages(numbersIterator) {
// //   for (const number of numbersIterator) {
// //     console.log("message ".repeat(number) + number);
// //     yield "message ".repeat(number) + number;
// //   }
// // }

// // function* streamCompletion(arr) {
// //   const binaryToNumberIterator = binaryToNumbers(arr);
// //   const numberToMessagesIterator = numberToMessages(binaryToNumberIterator);
// //   yield "start";
// //   yield* numberToMessagesIterator;
// //   yield "end";
// // }

// // const chunkData = [30, 40, 20, 50, 100];
// // for (const a of streamCompletion(chunkData)) {
// //   console.log("Final : ", a);
// // }

// let x=1;
// const y=1;

console.log("Defer script")
for (let i=1;i<100000000;i++)
{
  const p=Math.random();
}

console.log("Defer script execution completed")