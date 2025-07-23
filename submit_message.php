<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Me</title>
  <style>
    body {
      background: #eef2f3;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .contact-container {
      background: #fff;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      width: 90%;
      max-width: 500px;
    }

    .contact-container h2 {
      margin-bottom: 20px;
      color: #333;
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    input, textarea {
      padding: 12px 15px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
      outline: none;
      transition: border-color 0.3s;
    }

    input:focus, textarea:focus {
      border-color: #007BFF;
    }

    button {
      padding: 12px;
      font-size: 16px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background-color: #0056b3;
    }

    @media (max-width: 480px) {
      .contact-container {
        padding: 20px;
      }

      input, textarea {
        font-size: 15px;
      }
    }
  </style>
</head>
<body>

  <div class="contact-container">
    <h2>Send Me a Message</h2>
    <form action="submit_message.php" method="POST">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <input type="tel" name="mobile" placeholder="Your Mobile Number" pattern="[0-9]{10}" required>
      <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
      <button type="submit">Send</button>
    </form>
  </div>

</body>
</html>
