<?php
$servername = "132web.site";
$username = "teamampharos";
$password = "132webampharos";
$dbname = "ampharos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  
  // sql to create table teacher
//   $sql = "CREATE TABLE Teacher (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     occupation VARCHAR(100) NOT NULL,
//     address_short VARCHAR(50) NOT NULL,
//     address_long VARCHAR(100) NOT NULL,
//     phone VARCHAR(30) NOT NULL,
//     website VARCHAR(100),
//     gender VARCHAR(10) NOT NULL,
//     marital_status VARCHAR(50),
//     photo LONGBLOB,
//     date_start VARCHAR(30) NOT NULL
//     )";
  
//   // sql to create table Hobby
//   $sql2 = "CREATE TABLE Hobby (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(50) NOT NULL,
//     description VARCHAR(200),
//     frequency VARCHAR(100)
//     )";

//     // sql to create table Work
//   $sql3 = "CREATE TABLE Work (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(50) NOT NULL,
//     address VARCHAR(200)
//     )";

//      // sql to create table Contributing
//   $sql4 = "CREATE TABLE Contributing (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(50) NOT NULL,
//     description VARCHAR(300) NOT NULL
//     )";

// insert teachers
    // $sql = "INSERT INTO Teacher (firstname, lastname, email, occupation,
    // address_short, address_long, phone, website, 
    // gender, marital_status, date_start)

    // VALUES ('Junior', 'Pablito', 'email@gmail.com', 'Student in Informatik',
    // 'Miami, Us', 'Detroit center 45\n89819 Miami\nUS', '+49 116 81 21285',
    // 'www.wikipedia.de', 'Mann', 'Ledig', '12.01.2023')";

    // $sql = "INSERT INTO Work (name, address, teacher)
    // VALUES ('Tutor an der Hoschule Worms', 'Ereburgerstr. 66 8349 Worms', 
    // '1');";
    // $sql .= "INSERT INTO Work (name, address, teacher)
    // VALUES ('Webmaster bei The Way', 'Woolstrit. 87 68349 San francisco', 
    // '1');";
    
    // $sql .= "INSERT INTO Contributing (name, description, teacher)
    // VALUES ('For the Way', 'All our courses are free, so that every can learn and developp their knowledges', 
    // '1');";
    // $sql .= "INSERT INTO Contributing (name, description, teacher)
    // VALUES ('In Github', 'My projects on Github are free to use and share. I write some Algoriths, that can be used to improve a lot of actions', 
    // '1');";
    // $sql .= "INSERT INTO Contributing (name, description, teacher)
    // VALUES ('For Linux', 'I contibute monthly to translate Linux Softwares documentations', 
    // '1');";
    // $sql .= "INSERT INTO Contributing (name, description, teacher)
    // VALUES ('Associations', 'Actually i don't contribute in any associations, because i'm searching a veridic and helpful associations, that really help people in need', 
    // '1');";
    
    // if ($conn->multi_query($sql) === TRUE) {
    //   echo "New records created successfully";
    // } else {
    //   echo "Error: " . $sql . "<br>" . $conn->error;
    // }

//     $sql = "SELECT id, firstname, lastname, email, 
//     occupation,  address_short,  address_long,  phone, 
//     website,  gender,  marital_status,  date_start
//      FROM Teacher WHERE id=1";
// $result = $conn->query($sql);

    // sql to create table Work
  // $sql = "CREATE TABLE Address_teacher (
  //   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  //   str VARCHAR(50) NOT NULL,
  //   str_nr VARCHAR(20) NOT NULL,
  //   plz INT(10) NOT NULL,
  //   city VARCHAR(30) NOT NULL,
  //   land VARCHAR(30) NOT NULL,
  //   teacher INT(10) NOT NULL
  //   );";

  // $sql .= "CREATE TABLE Address_work (
  //   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  //   str VARCHAR(50) NOT NULL,
  //   str_nr VARCHAR(20) NOT NULL,
  //   plz INT(10) NOT NULL,
  //   city VARCHAR(30) NOT NULL,
  //   land VARCHAR(30) NOT NULL,
  //   teacher INT(10) NOT NULL
  //   );";
  
    // $sql = "INSERT INTO Address_teacher (str, str_nr, plz,
    // city, land, teacher)
    // VALUES ('Detroit center', '45', '89819', 'Miami', 'US', '1');";
    // $sql .= "INSERT INTO Address_work (str, str_nr, plz,
    // city, land, teacher)
    // VALUES ('Ereburgerstr.', '6', '68349', 'Worms', 'DE', '1');";
    // $sql .= "INSERT INTO Address_work (str, str_nr, plz,
    // city, land, teacher)
    // VALUES ('Woolstrit.', '87', '68349', 'San francisco', 'US', '1');";

    // $sql = "DELETE FROM Address_work WHERE id=3;";
    // $sql .= "DELETE FROM Address_work WHERE id=4;";
    // if ($conn->multi_query($sql) === TRUE) {
    //   echo "New records created successfully";
    // } else {
    //   echo "Error: " . $sql . "<br>" . $conn->error;
    // }

// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "" . $row["id"]. "<br>"
//     . $row["firstname"]. "<br>"
//     . $row["lastname"]. "<br>"
//     . $row["email"]. "<br>"
//     . $row["occupation"]. "<br>"
//     . $row["address_short"]. "<br>"
//     . $row["address_long"]. "<br>"
//     . $row["phone"]. "<br>"
//     . $row["gender"]. "<br>"
//     . $row["marital_status"]. "<br>"
//     . $row["date_start"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
// echo "<br>";

// $sql = "SELECT name, description, frequency, teacher
//  FROM Hobby";


// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: "
//     . $row["id"]. ", name: " . $row["name"]. ", description: " . $row["description"].
//      ", frequency: " . $row["frequency"]. ", teacher: " . $row["teacher"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }

$sql = "ALTER TABLE Address_work MODIFY COLUMN plz VARCHAR(20)";
    if ($conn->query($sql) === TRUE) {
      echo "New records created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

// $sql = "UPDATE Contributing SET number=1 WHERE id=1;";
// $sql .= "UPDATE Contributing SET number=2 WHERE id=2;";
// $sql .= "UPDATE Contributing SET number=3 WHERE id=3;";
// $sql .= "UPDATE Contributing SET number=4 WHERE id=4";

//     // $sql = "INSERT INTO Address_work (str, str_nr, plz, city,
//     // land, teacher)
//     // VALUES ('test', 'test', '2', 'test', 'test', '1');";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "SELECT id, name, description, teacher, number
 FROM Contributing WHERE id < 5;";

// $sql = "SELECT id, name, teacher, number
// FROM Work;";

$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "<br>id: "
//     . $row["id"]. ", number: " . $row["number"]. ", str: " . $row["str"]. ", str_nr: " . $row["str_nr"].
//      ", plz: " . $row["plz"]. ", city: " . $row["city"].
//      ", land: " . $row["land"]. ", teacher: " . $row["teacher"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br>id: "
    . $row["id"]. ", number: " . $row["number"]. 
    ", name: " . $row["name"]. ", description: " . $row["description"]. 
     ", teacher: " . $row["teacher"]. "<br>";
  }
} else {
  echo "0 results";
}

//str VARCHAR(50) NOT NULL,
  //   str_nr VARCHAR(20) NOT NULL,
  //   plz INT(10) NOT NULL,
  //   city VARCHAR(30) NOT NULL,
  //   land VARCHAR(30) NOT NULL,
  //   teacher INT(10) NOT NULL

// $sql = "UPDATE Hobby SET frequency=3 WHERE id=3";

// if (mysqli_query($conn, $sql)) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . mysqli_error($conn);
// }

$conn->close();
?>