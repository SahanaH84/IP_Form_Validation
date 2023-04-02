<html>
  <head>
    <meta charset="UTF-8" />
    <title>My Form</title>
    <style>
      form {
        border: 2px solid #ccc;
        padding: 20px;
        margin: 20px;
        max-width: 600px;
        margin: 0 auto;
      }

      input[type="submit"] {
        background-color: #4caf50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <form method="post" action="process_form1.php">
      <label for="employee_id">Employee ID:</label>
      <input type="text" id="employee_id" name="employee_id" /><br /><br />

      <label for="employee_name">Employee Name:</label>
      <input type="text" id="employee_name" name="employee_name" /><br /><br />

      <label for="date_of_birth">Date of Birth:</label>
      <input type="date" id="date_of_birth" name="date_of_birth" /><br /><br />

      <label for="gender">Gender:</label>
      <input type="radio" id="gender_male" name="gender" value="male" />
      <label for="gender_male">Male</label>
      <input type="radio" id="gender_female" name="gender" value="female" />
      <label for="gender_female">Female</label><br /><br />

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" /><br /><br />

      <label for="address">Address:</label>
      <textarea id="address" name="address"></textarea><br /><br />

      <label for="qualification">Qualification:</label>
      <input type="text" id="qualification" name="qualification" /><br /><br />

      <label for="contact_number">Contact Number:</label>
      <input type="tel" id="contact_number" name="contact_number" /><br /><br />

      <label for="area_of_interest">Area of Interest:</label>
      <input
        type="text"
        id="area_of_interest"
        name="area_of_interest"
      /><br /><br />

      <label for="years_of_experience">Years of Experience:</label>
      <input
        type="number"
        id="years_of_experience"
        name="years_of_experience"
      /><br /><br />

      <input type="submit" value="Submit" />
    </form>
  </body>
</html>
