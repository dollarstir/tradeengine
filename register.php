<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Custom colors and styles */
    .bg-card {
      background-color: #3C6E71;
    }

    .bg-button {
      background-color: #353535;
    }

    .input-bg {
      background-color: #FFFFFF;
    }

    .thick-line {
      position: absolute;
      top: 5%;
      left: 20%;
      transform: translateX(-50%);
      width: 39%;
      height: 6px;
      background-color: #FFFFFF;
      margin-bottom: -10px;
    }

    .thin-line {
      height: 2px;
      background-color: #FFFFFF;
      width: 50%;
    }

    .logo-style {
      position: absolute;
      top: calc(20% - 40px);
      left: calc(30% - 60px);
      width: 60px;
      height: 50px;
      opacity: 0.7;
    }

    .form-container {
      position: relative;
      z-index: 1;
    }

    .line-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .under-text-line {
      position: absolute;
      top: 10%;
      left: 90%;
      transform: translateX(-50%);
      width: 45%;
      height: 6px;
      background-color: #FFFFFF;
      border-radius: 10px;
    }

    .checkbox-container {
      display: flex;
      align-items: center;
      margin: 20px 0;
    }

    .checkbox-label {
      margin-left: 8px;
      color: #FFFFFF;
    }

    .login-link {
      color: #FFFFFF;
      text-decoration: underline;
    }
  </style>
</head>

<body class="bg-white flex items-center justify-center h-screen">
  <div class="bg-card p-8 rounded-lg shadow-lg max-w-sm w-full relative">
    <div class="line-container mb-6">
      <div class="thick-line rounded"></div>
    </div>
    <img src="wave.png" alt="Logo" class="logo-style">
    <div class="form-container">
      <h2 class="text-white text-2xl mb-6 text-center">StockWave</h2>
      <div class="under-text-line"></div> <!-- Thick line under the text -->
      <form>
        <div class="mb-4">
          <input type="email" placeholder="Email" class="w-full p-2 rounded focus:outline-none text-gray-900 input-bg">
        </div>
        <div class="mb-4">
          <input type="password" placeholder="Password" class="w-full p-2 rounded focus:outline-none text-gray-900 input-bg">
        </div>
        <div class="checkbox-container">
          <input type="checkbox" id="terms" class="accent-white">
          <label for="terms" class="checkbox-label">I accept the terms and conditions</label>
        </div>
        <button type="submit" class="w-full p-2 rounded text-white bg-button hover:bg-gray-700">Register</button>
        <p class="text-white text-center mt-4">Already have an account? <a href="/login.html" class="login-link">Log in</a></p>
      </form>
      <div class="flex items-center justify-center mt-6">
        <div class="thin-line rounded mr-2"></div>
        <p class="text-white mx-2">Or</p>
        <div class="thin-line rounded ml-2"></div>
      </div>
      <div class="flex justify-center mt-4">
        <button class="bg-blue-500 p-2 rounded-full shadow-lg mr-2"></button>
        <button class="bg-red-500 p-2 rounded-full shadow-lg"></button>
      </div>
    </div>
  </div>
</body>

</html>