<body>
        <?php
        // put your code here
        // Employee ID
if (empty($_POST['employee_id'])) {
  echo "Employee ID is required";
} else {
  $employee_id = $_POST['employee_id'];
  if (!preg_match("/^[0-9]{6}$/", $employee_id)) {
    echo "Invalid Employee ID";
  }
}

// Employee Name
if (empty($_POST['employee_name'])) {
  echo "Employee Name is required";
} else {
  $employee_name = $_POST['employee_name'];
  if (!preg_match("/^[a-zA-Z ]+$/", $employee_name)) {
    echo "Invalid Employee Name";
  }
}

// Date of Birth
if (empty($_POST['date_of_birth'])) {
  echo "Date of Birth is required";
} else {
  $date_of_birth = $_POST['date_of_birth'];
  // Perform any additional validation as needed
}

// Gender
if (empty($_POST['gender'])) {
  echo "Gender is required";
} else {
  $gender = $_POST['gender'];
  // Perform any additional validation as needed
}

// Age
if (empty($_POST['age'])) {
  echo "Age is required";
} else {
  $age = $_POST['age'];
 
}
if (empty($_POST['address'])) {
  echo "Address is required";
} else {
  $address = $_POST['address'];
  if (strlen($address) > 100) {
    echo "Address cannot be longer than 100 characters";
  }
  // You can perform additional validation if needed
}
// Qualification
if (empty($_POST['qualification'])) {
  echo "Qualification is required";
} else {
  $qualification = $_POST['qualification'];
  if (!preg_match("/^[a-zA-Z ]+$/", $qualification)) {
    echo "Invalid Qualification";
  }
}

// Contact Number
if (empty($_POST['contact_number'])) {
  echo "Contact Number is required";
} else {
  $contact_number = $_POST['contact_number'];
  if (!preg_match("/^[0-9]{10}$/", $contact_number)) {
    echo "Invalid Contact Number";
  }
}

// Area of Interest
if (empty($_POST['area_of_interest'])) {
  echo "Area of Interest is required";
} else {
  $area_of_interest = $_POST['area_of_interest'];
  if (!preg_match("/^[a-zA-Z ]+$/", $area_of_interest)) {
    echo "Invalid Area of Interest";
  }
}

// Years of Experience
if (empty($_POST['years_of_experience'])) {
  echo "Years of Experience is required";
} else {
  $years_of_experience = $_POST['years_of_experience'];
  if (!preg_match("/^[0-9]+$/", $years_of_experience)) {
    echo "Invalid Years of Experience";
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $employee_id = $_POST["employee_id"];
  $employee_name = $_POST["employee_name"];
  $date_of_birth = $_POST["date_of_birth"];
  $gender = $_POST["gender"];
  $age = $_POST["age"];
  $address = $_POST["address"];
  $qualification = $_POST["qualification"];
  $contact_number = $_POST["contact_number"];
  $area_of_interest = $_POST["area_of_interest"];
  $years_of_experience = $_POST["years_of_experience"];
echo"<h1>successfully you have registered! </h1>";
  echo "Employee ID: " . $employee_id . "<br>";
  echo "Employee Name: " . $employee_name . "<br>";
  echo "Date of Birth: " . $date_of_birth . "<br>";
  echo "Gender: " . $gender . "<br>";
  echo "Age: " . $age . "<br>";
  echo "Address: " . $address . "<br>";
  echo "Qualification: " . $qualification . "<br>";
  echo "Contact Number: " . $contact_number . "<br>";
  echo "Area of Interest: " . $area_of_interest . "<br>";
  echo "Years of Experience: " . $years_of_experience . "<br>";
}

        ?>
    </body>