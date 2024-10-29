<html>
  <head>
    <title>
      MIS4013 HW 5
    </title>
  </head>
  
<div>
  <button onclick="calcFactorial()">Calculate Factorial</button>
  <p id="result"></p>
</div>
<div>
  <input type="number" id="numberInp" min="0">
  <button onclick="generateRandNum()">Generate Number</button>
</div>
<div>
  <button>Check to see if Palindrome</button>
</div>
<div>
  <button>Odd or Even Checker</button>
</div>
<div>
  <button>Generate Random Hex Code</button>
</div>

<script>
  function factorial(n) {
    if (n === 0 || n === 1) {
      return 1;
    }
    return n*factorial(n-1);
  }

  function calcFactorial() {
    const input = document.getElementById('numinp').value;
    const number = parseInt(input, 10);
    if(isNaN(number) || number < 0) {
      document.getElementById('result').innerText = 'Not valid number';
    } else {
      const result = factorial(number);
      document.getElementById('result').innerText = `${result}`;
    }
  }

  function randomNum(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }
  function generateRandNum() {
    const randomNum = randomNum(0,10);
    document.getElementById('result').innterText = `Random Number: ${randomNum}`;
  }
</script>

  
</html>
