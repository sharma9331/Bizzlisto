
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Animated Login Form</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      height: 100vh;
      background: #1a1a1a;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
    }

    .container {
      border: 4px solid;
      padding: 2rem;
      border-radius: 20px;
      width: 320px;
      background: #222;
      position: relative;
      z-index: 1;
      transition: all 0.3s ease;
    }

    .login-form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .login-form h2 {
      color: #fff;
      text-align: center;
    }

    .login-form input {
      padding: 0.75rem;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
    }

    .login-form button {
      padding: 0.75rem;
      border: none;
      border-radius: 5px;
      background: #5c6bc0;
      color: white;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s;
    }

    .login-form button:hover {
      background: #3f51b5;
    }

    .forgot-password {
      text-align: right;
      margin-top: -0.5rem;
    }

    .forgot-password a {
      color: #aaa;
      font-size: 0.9rem;
      text-decoration: none;
    }

    .forgot-password a:hover {
      text-decoration: underline;
      color: #fff;
    }

    /* Modal Styles */
    .modal {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.6);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 10;
    }

    .modal-content {
      background: #333;
      padding: 2rem;
      border-radius: 10px;
      width: 300px;
      text-align: center;
      position: relative;
    }

    .modal-content h3 {
      color: #fff;
      margin-bottom: 1rem;
    }

    .modal-content input {
      width: 100%;
      padding: 0.75rem;
      border: none;
      border-radius: 5px;
      margin-bottom: 1rem;
    }

    .modal-content button {
      background: #5c6bc0;
      color: white;
      padding: 0.5rem 1rem;
      border: none;
      border-radius: 5px;
      margin: 0.25rem;
      cursor: pointer;
    }

    .close {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 1.2rem;
      color: #ccc;
      cursor: pointer;
    }

    .close:hover {
      color: #fff;
    }
  </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</head>
<body>

  <div class="container" id="loginBox">
    <form class="login-form">
      <h2>Login</h2>
      <input type="email" placeholder="Email" required />
      <input type="password" placeholder="Password" required />
      <div class="forgot-password">
        <a href="#" id="forgotLink">Forgot Password?</a>
      </div>
      <button type="submit">Login</button>
    </form>
  </div>

  <!-- Forgot Password Modal -->
  <div class="modal" id="forgotModal">
    <div class="modal-content">
      <span class="close" id="closeForgot">&times;</span>
      <h3>Reset Password</h3>
      <input type="email" placeholder="Enter your email" required />
      <button>Send Reset Link</button>
    </div>
  </div>

  <!-- Discard Confirmation Modal -->
  <div class="modal" id="discardModal">
    <div class="modal-content">
      <h3>Are you sure you want to discard?</h3>
      <button id="discardYes">Discard</button>
      <button id="discardCancel">Cancel</button>
    </div>
  </div>

  <script>
    const container = document.querySelector('.container');

    // Animate border color using GSAP
    gsap.timeline({ repeat: -1, yoyo: true })
      .to(container, { borderColor: "#ff3e3e", duration: 1 })
      .to(container, { borderColor: "#3eff9e", duration: 1 })
      .to(container, { borderColor: "#3e9eff", duration: 1 })
      .to(container, { borderColor: "#ff3ee8", duration: 1 });

    // Forgot Password Modal
    const forgotModal = document.getElementById("forgotModal");
    const forgotLink = document.getElementById("forgotLink");
    const closeForgot = document.getElementById("closeForgot");

    forgotLink.onclick = (e) => {
      e.preventDefault();
      forgotModal.style.display = "flex";
    };

    closeForgot.onclick = () => {
      forgotModal.style.display = "none";
    };

    // Discard Modal
    const discardModal = document.getElementById("discardModal");
    const discardYes = document.getElementById("discardYes");
    const discardCancel = document.getElementById("discardCancel");
    const loginBox = document.getElementById("loginBox");

    // Track original position
    const originalStyles = {
      position: loginBox.style.position,
      left: loginBox.style.left,
      top: loginBox.style.top,
      transform: loginBox.style.transform,
      margin: loginBox.style.margin
    };

    document.addEventListener("click", (e) => {
      const isInsideLogin = loginBox.contains(e.target);
      const isInsideModal = discardModal.contains(e.target) || forgotModal.contains(e.target);
      if (!isInsideLogin && !isInsideModal) {
        discardModal.style.display = "flex";
      }
    });

    discardYes.onclick = () => {
      discardModal.style.display = 'none';

      // Reset login box position
      loginBox.style.position = originalStyles.position;
      loginBox.style.left = originalStyles.left;
      loginBox.style.top = originalStyles.top;
      loginBox.style.transform = originalStyles.transform;
      loginBox.style.margin = originalStyles.margin;

      alert("Form discarded and reset.");
    };

    discardCancel.onclick = () => {
      discardModal.style.display = 'none';
    };

    // Optional: close modals when clicking outside of them
    window.onclick = (e) => {
      if (e.target === forgotModal) forgotModal.style.display = "none";
      if (e.target === discardModal) discardModal.style.display = "none";
    };
  </script>

</body>
</html>



    <!----------------------- Main Container -------------------------->
  

