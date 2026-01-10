<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Feedback</title>
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background: linear-gradient(135deg, #27a2a2ff, #f0f2f8ff);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
      width: 380px;
      animation: fadeIn 1s ease-in-out;
    }
    .container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    label {
      font-weight: bold;
      display: block;
      margin: 10px 0 5px;
      color: #444;
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
      outline: none;
      transition: 0.3s;
    }
    input:focus, textarea:focus {
      border-color: #2575fc;
      box-shadow: 0 0 5px #2575fc;
    }
    textarea {
      resize: none;
      height: 100px;
    }
    .btn {
      margin-top: 15px;
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: transform 0.2s;
    }
    .btn:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #2575fc, #6a11cb);
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
  <script>
    function validateForm() {
      let name = document.forms["feedbackForm"]["user"].value;
      let email = document.forms["feedbackForm"]["email"].value;
      let number = document.forms["feedbackForm"]["number"].value;
      let feedback = document.forms["feedbackForm"]["co"].value;
      if (name=="" || email=="" || number=="" || feedback=="") {
        alert("All fields must be filled out!");
        return false;
      }
      return true;
    }
  </script>
</head>
<body>
  <div class="container">
    <h2>📋 Student Feedback</h2>
    <form name="feedbackForm" action="code.php" method="POST" onsubmit="return validateForm()">
      
      <label>Username</label>
      <input type="text" name="user" placeholder="Enter your name">

      <label>Email</label>
      <input type="email" name="email" placeholder="Enter your email">

      <label>Number</label>
      <input type="text" name="number" placeholder="Enter your phone number">

      <label>Student's Feedback</label>
      <textarea name="co" placeholder="Write your feedback..."></textarea>

      <button type="submit" class="btn">Submit</button>
    </form>
  </div>
</body>
</html>
