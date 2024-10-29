<html>
  <head>
    <title>
      MIS4013 HW 5
    </title>
  </head>
  
<div>
  <input type="number" id="numinp" min="0"> 
  <button onclick="calcFactorial()">Calculate Factorial</button>
  <p id="result"></p>
</div>
<div>
  <button onclick="generateRandNum()">Generate Number</button>
  <p id="randNumResult"></p>
</div>
<div>
  <input type="text" id="palindromeInput">
  <button onclick="checkPalindrome()">Check to see if Palindrome</button>
  <p id="palindromeResult"></p>
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
    const randomNumber = randomNum(1,100);
    document.getElementById('randNumResult').innterText = `Random Number: ${randomNumber}`;
  }

  function isPalindrome(str) {
    const cleanedStr = str.toLowerCase();
    const reversedStr = str.reverse();
    return cleanedStr === reversedStr;
  }

  function checkPalindrome() {
    const input = document.getElementById('palindromeInput').value;
    const result = isPalindrome(input);
    document.getElementById('palindromeResult').innerText = result ? `"${input IS a palindrome}`" : `"${input} IS NOT a palindrome"`;
  }
</script>

  
</html>
