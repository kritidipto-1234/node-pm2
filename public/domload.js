console.log(Date.now(), document.readyState, " - head linked script loaded");

function handleReadyStateChange() {
  if (document.readyState === "interactive") {
    console.log(Date.now(), document.readyState, " - document loaded and parsed, but not resources");
  }
  if (document.readyState === "complete") {
    console.log(Date.now(), document.readyState, " - everything loaded");
  }
}

window.addEventListener("load", function () {
  console.log(Date.now(), document.readyState, " - window.onload ");
});

document.addEventListener("DOMContentLoaded", function () {
  console.log(Date.now(), document.readyState, " - DOMContentLoad");
});

// Attach the event listener to the document
// document.addEventListener("readystatechange", handleReadyStateChange);
// (() => {
//   const scriptElement = document.createElement("script");
// scriptElement.src="/linked.js"
//   document.head.prepend(scriptElement);
// })();

(() => {
  const scriptElement = document.createElement("script");
  const scriptCode = `console.log(Date.now(),document.readyState,"Injected head script1")
const scriptElement2 = document.createElement("script");
scriptElement2.textContent = 'console.log(Date.now(),document.readyState,"Injected head script2");';;
document.head.prepend(scriptElement2);
;`;
  scriptElement.textContent = scriptCode;

  document.head.prepend(scriptElement);
})();