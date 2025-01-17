<!DOCTYPE html>
<!-- Coding by CodingLab || www.codinglabweb.com -->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OTP Verification Form</title>
  <!-- Boxicons CSS -->
  <style>
    /* Import Google font - Poppins */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #4070f4;
    }

    :where(.container, form, .input-field, header) {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .container {
      background: #fff;
      padding: 30px 65px;
      border-radius: 12px;
      row-gap: 20px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .container header {
      height: 65px;
      width: 65px;
      background: #4070f4;
      color: #fff;
      font-size: 2.5rem;
      border-radius: 50%;
    }

    .container h4 {
      font-size: 1.25rem;
      color: #333;
      font-weight: 500;
    }

    form .input-field {
      flex-direction: row;
      column-gap: 10px;
    }

    .input-field input {
      height: 45px;
      width: 42px;
      border-radius: 6px;
      outline: none;
      font-size: 1.125rem;
      text-align: center;
      border: 1px solid #ddd;
    }

    .input-field input:focus {
      box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
    }

    .input-field input::-webkit-inner-spin-button,
    .input-field input::-webkit-outer-spin-button {
      display: none;
    }

    form button {
      margin-top: 25px;
      width: 100%;
      color: #fff;
      font-size: 1rem;
      border: none;
      padding: 9px 0;
      cursor: pointer;
      border-radius: 6px;
      pointer-events: none;
      background: #6e93f7;
      transition: all 0.2s ease;
    }

    form button.active {
      background: #4070f4;
      pointer-events: auto;
    }

    form button:hover {
      background: #0e4bf1;
    }
  </style>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  
</head>

<body>
  <div class="container">
    <header>
      <i class="bx bxs-check-shield"></i>
    </header>
    <h4>Masukkan Kode OTP Anda</h4>
    <form action="<?= site_url('pegawai/otp/verifyOtp'); ?>" method="post">
      <div class="input-field">
        <input type="number" name="digit1" id="digit1" maxlength="1" required>
        <input type="number" name="digit2" id="digit2" maxlength="1" required>
        <input type="number" name="digit3" id="digit3" maxlength="1" required>
        <input type="number" name="digit4" id="digit4" maxlength="1" required>
      </div>
      <button type="submit">Verify OTP</button>
    </form>

  </div>
</body>
<script>
  const inputs = document.querySelectorAll("input");
  const button = document.querySelector("button");
  // iterate over all inputs
  inputs.forEach((input, index) => {
    input.addEventListener("input", (e) => {
      const currentInput = input;
      const nextInput = input.nextElementSibling;
      const prevInput = input.previousElementSibling;

      if (currentInput.value.length > 1) {
        currentInput.value = currentInput.value.slice(0, 1);
      }

      if (currentInput.value !== "") {
        if (nextInput) {
          nextInput.removeAttribute("disabled");
          nextInput.focus();
        }
      }

      if (e.inputType === "deleteContentBackward" && currentInput.value === "") {
        if (prevInput) {
          prevInput.focus();
        }
      }

      if (!inputs[inputs.length - 1].disabled && inputs[inputs.length - 1].value !== "") {
        button.classList.add("active");
      } else {
        button.classList.remove("active");
      }
    });
  });

  window.addEventListener("load", () => inputs[0].focus());
</script>

</html>