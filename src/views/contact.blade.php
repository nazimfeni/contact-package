<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Contact Usaaa</title>
      <style>
      /* General Reset */
      body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
      }

      h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
      }

      /* Form Styling */
      form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      label {
            font-size: 14px;
            color: #555;
            display: block;
            margin-bottom: 5px;
      }

      input[type="text"],
      input[type="email"],
      textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s, box-shadow 0.3s;
      }

      input[type="text"]:focus,
      input[type="email"]:focus,
      textarea:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
      }

      input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
      }

      input[type="submit"]:hover {
            background: #0056b3;
      }

      textarea {
            resize: none;
      }

      /* Responsive Design */
      @media (max-width: 600px) {
            form {
                  padding: 15px;
            }

            input[type="text"],
            input[type="email"],
            textarea,
            input[type="submit"] {
                  font-size: 14px;
            }
      }
      </style>
</head>

<body>
      <h1>Contact Us</h1>
      <form action="{{ route('contact') }}" method="post">
            @csrf
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name Please" required>

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>

            <label for="message">Your Message</label>
            <textarea id="message" name="message" cols="30" rows="10" placeholder="Enter your message or question here"
                  required></textarea>

            <input type="submit" value="Submit">
      </form>
</body>

</html>
