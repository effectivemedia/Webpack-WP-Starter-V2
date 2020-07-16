"use strict";

var testScript = function testScript(arg) {
  return arg ? "YAY!" : "BOO";
};

console.log(testScript(false));