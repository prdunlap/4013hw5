<html>
  <head>
    <title>
      MIS4013 HW 5
    </title>
  </head>
  
<div>
  <input type="number" id="numinp" min="0">
  <button onclick="calcFactorial()">Calculate</button>
</div>
<div>
  <button>Generate Number</button>
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
    
  }
</script>

  
</html>
