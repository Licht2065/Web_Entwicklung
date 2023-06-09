<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- 
        On-Page SEO - Best Practices: Meta Keywords
        Genau 4 mit komma getrennte Meta-Keywords 
    -->
    <meta name="keywords" content="Junior Pablito, The Way, CV, About" />
    <!-- 
        On-Page SEO - Best Practices: Meta Description 
        Genau 75 Zeichen für die Meta Description 
    -->
    <meta name="description" content="Juior Pablito ist ein Webmaster tätig bei The Way: eine wachsende Firma" />
    <!-- 
        On-Page SEO - Best Practices: Title Tag 
        der Titel hat genau 58 Zeichen. Die zeichen [] sind nicht mitgezält
        sie sind da nur für das Sonderzeichen & 
    -->
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sansita" />
    <script src="../umkehrfunktion/my_script.js" async></script>
    <script src="../script.js" defer></script>
    <link rel="shortcut icon" type= "image/svg" href="../Bilder/Logo/Logo.svg">
    <title>Profil page employee by the Way</title>
</head>

<body class="body_ubung_j body_profil_page_j">
    <?php
        // define variables and set to empty values
        $firstname = $lastname = $email = $occupation
         = $address_long = $phone = $website = $gender = $marital_status
          = $date_start = $photo = "";

    // help variables
    $b_a_help1 = array();
    $b_a_help2 = array();
    $b_a_help3 = array();
    $b_a_help4 = array();
    $t_id_check = array();
    $t_f_check = array();
    $t_l_check = array();

    $i = 0;
    $teacher = 0;
    $hobby_names = array();
    $hobby_bcs = array();
    $work_names = array();
    $contr_names = array();
    $contr_descs = array();
    $t_address = array();
    $b_address = array(array());


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

// start control

// select all first- and lastnames
$i = 0;
$sql = "SELECT id, firstname, lastname
     FROM Teacher";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $t_id_check[$i] = $row["id"];
    $t_f_check[$i] = $row["firstname"];
    $t_l_check[$i] = $row["lastname"];
  }
} else {
  echo "0 results";
}
if (empty($_GET["id"])) {
    $teacher = 1;
}else{
    $teacher = $_GET["id"];
}

// check for update or add teacher !!!
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = control_input($_POST["t_fn"]);
    $lastname = control_input($_POST["t_ln"]);
    $email = control_input($_POST["t_e"]);
    $occupation = control_input($_POST["t_t"]);
    $phone = control_input($_POST["t_p"]);
    $website = control_input($_POST["t_w"]);
    $gender = control_input($_POST["t_gdr"]);
    $t_address[0] = control_input($_POST["t_str"]);
    $t_address[1] = control_input($_POST["t_str_nr"]);
    $t_address[2] = (int)control_input($_POST["t_plz"]);
    $t_address[3] = control_input($_POST["t_sdt"]);
    $t_address[4] = control_input($_POST["t_land"]);
    $marital_status = control_input($_POST["t_fsdt"]);
    $photo = control_input($_POST["t_ph"]);

    if(strtolower($gender) == "nicht eingeben"){
        $gender = "None";
    }

    $hobby_names[0] = control_input($_POST["h_n"]);
    $hobby_bcs[0] = control_input($_POST["h_b"]);
    $hobby_names[1] = control_input($_POST["h_n1"]);
    $hobby_bcs[1] = control_input($_POST["h_b1"]);
    $hobby_names[2] = control_input($_POST["h_n2"]);
    $hobby_bcs[2] = control_input($_POST["h_b2"]);
    $hobby_names[3] = control_input($_POST["h_n3"]);
    $hobby_bcs[3] = control_input($_POST["h_b3"]);

    $work_names[0] = control_input($_POST["b_n"]);
    $work_names[1] = control_input($_POST["b_n1"]);
    $work_names[2] = control_input($_POST["b_n2"]);
    $work_names[3] = control_input($_POST["b_n3"]);
    // -------------------------------
    // -------------------------------
    $b_a_help1[0] = control_input($_POST["b_str"]);
    $b_a_help1[1] = control_input($_POST["b_str_nr"]);
    $b_a_help1[2] = control_input($_POST["b_plz"]);
    $b_a_help1[3] = control_input($_POST["b_sdt"]);
    $b_a_help1[4] = control_input($_POST["b_land"]);
    // ------------------------------
    $b_a_help2[0] = control_input($_POST["b_str1"]);
    $b_a_help2[1] = control_input($_POST["b_str_nr1"]);
    $b_a_help2[2] = control_input($_POST["b_plz1"]);
    $b_a_help2[3] = control_input($_POST["b_sdt1"]);
    $b_a_help2[4] = control_input($_POST["b_land1"]);
    // ------------------------------
    $b_a_help3[0] = control_input($_POST["b_str2"]);
    $b_a_help3[1] = control_input($_POST["b_str_nr2"]);
    $b_a_help3[2] = control_input($_POST["b_plz2"]);
    $b_a_help3[3] = control_input($_POST["b_sdt2"]);
    $b_a_help3[4] = control_input($_POST["b_land2"]);
    // ------------------------------
    $b_a_help4[0] = control_input($_POST["b_str3"]);
    $b_a_help4[1] = control_input($_POST["b_str_nr3"]);
    $b_a_help4[2] = control_input($_POST["b_plz3"]);
    $b_a_help4[3] = control_input($_POST["b_sdt3"]);
    $b_a_help4[4] = control_input($_POST["b_land3"]);
    // ------------------------------
    // ------------------------------
    $contr_names[0] = control_input($_POST["ctr_n"]);
    $contr_descs[0] = control_input($_POST["ctr_b"]);
    $contr_names[1] = control_input($_POST["ctr_n1"]);
    $contr_descs[1] = control_input($_POST["ctr_b1"]);
    $contr_names[2] = control_input($_POST["ctr_n2"]);
    $contr_descs[2] = control_input($_POST["ctr_b2"]);
    $contr_names[3] = control_input($_POST["ctr_n3"]);
    $contr_descs[3] = control_input($_POST["ctr_b3"]);


    if ((in_array(strtolower(control_input($_POST["t_fn"])), $t_f_check))
    && (in_array(strtolower(control_input($_POST["t_ln"])), $t_l_check))){
        $teacher = array_search(control_input($_POST["t_fn"]), $t_f_check) + 1;
        
        // update teacher basic infos
        $sql = "UPDATE Teacher SET firstname='$firstname', lastname='$lastname',
        email='$email', occupation='$occupation',
        phone='$phone', website='$website', photo='$photo', 
        gender='$gender', marital_status='$marital_status' WHERE id=$teacher";

        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        //update teacher's addresses
        $sql = "UPDATE Address_teacher SET str='$t_address[0]', str_nr='$t_address[1]',
        plz='$t_address[2]', city='$t_address[3]',
        land='$t_address[4]' WHERE teacher=$teacher";
        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        //update teacher's hobbys
        $sql = "UPDATE Hobby SET name='$hobby_names[0]', description='$hobby_bcs[0]'
         WHERE teacher=$teacher AND frequency=1";
         if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "UPDATE Hobby SET name='$hobby_names[1]', description='$hobby_bcs[1]'
        WHERE teacher=$teacher AND frequency=2";
        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "UPDATE Hobby SET name='$hobby_names[2]', description='$hobby_bcs[2]'
        WHERE teacher=$teacher AND frequency=3";
        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "UPDATE Hobby SET name='$hobby_names[3]', description='$hobby_bcs[3]'
        WHERE teacher=$teacher AND frequency=4";

        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // update work's names
        $sql = "UPDATE Work SET name='$work_names[0]'
         WHERE teacher=$teacher AND number=1";
         if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "UPDATE Work SET name='$work_names[1]'
        WHERE teacher=$teacher AND number=2";
        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "UPDATE Work SET name='$work_names[2]'
        WHERE teacher=$teacher AND number=3";
        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "UPDATE Work SET name='$work_names[3]'
        WHERE teacher=$teacher AND number=4";
        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // work addresses
        $sql = "UPDATE Address_work SET str='$b_a_help1[0]',
        str_nr='$b_a_help1[1]', plz='$b_a_help1[2]',
        city='$b_a_help1[3]', land='$b_a_help1[4]'
        WHERE teacher=$teacher AND number=1";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // ----------------------------------
        $sql = "UPDATE Address_work SET str='$b_a_help2[0]',
        str_nr='$b_a_help2[1]', plz='$b_a_help2[2]',
        city='$b_a_help2[3]', land='$b_a_help2[4]'
        WHERE teacher=$teacher AND number=2";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // ----------------------------------
        $sql = "UPDATE Address_work SET str='$b_a_help3[0]',
        str_nr='$b_a_help3[1]', plz='$b_a_help3[2]',
        city='$b_a_help3[3]', land='$b_a_help3[4]'
        WHERE teacher=$teacher AND number=3";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // ----------------------------------
        $sql = "UPDATE Address_work SET str='$b_a_help4[0]',
        str_nr='$b_a_help4[1]', plz='$b_a_help4[2]',
        city='$b_a_help4[3]', land='$b_a_help4[4]'
        WHERE teacher=$teacher AND number=4";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // contributions addresses and description
        $sql = "UPDATE Contributing SET name='$contr_names[0]', description='$contr_descs[0]'
        WHERE teacher=$teacher AND number=1";
        if ($conn->query($sql) === TRUE) {
        
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "UPDATE Contributing SET name='$contr_names[1]', description='$contr_descs[1]'
        WHERE teacher=$teacher AND number=2";
        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "UPDATE Contributing SET name='$contr_names[2]', description='$contr_descs[2]'
        WHERE teacher=$teacher AND number=3";
        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "UPDATE Contributing SET name='$contr_names[3]', description='$contr_descs[3]'
        WHERE teacher=$teacher AND number=4";

        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    else{
        // // add teacher
        // $sql = "INSERT INTO MyGuests (firstname, lastname, email)   
        // VALUES ('John', 'Doe', 'john@example.com')";

        // update teacher basic infos
        $sql = "INSERT INTO Teacher(firstname, lastname, email, 
        occupation, phone, website, gender, marital_status, 
        address_short, address_long, date_start, photo) 
        VALUES ('$firstname', '$lastname',
        '$email', '$occupation', '$phone', '$website', '$gender',
        '$marital_status', 'hello', 'hello' , now(), '$photo')";

        if ($conn->query($sql) === TRUE) {
            // teacher set
            $teacher = $conn->insert_id;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        //insert teacher's addresses
        $sql = "INSERT INTO Address_teacher(str, str_nr, plz, city, land, teacher)
        VALUES( '$t_address[0]', '$t_address[1]',
        '$t_address[2]', '$t_address[3]',
        '$t_address[4]', '$teacher')";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        //insert teacher's hobbys
        $sql = "INSERT INTO Hobby(name, description, teacher, frequency) 
        VALUES( '$hobby_names[0]', '$hobby_bcs[0]', '$teacher', 1)";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "INSERT INTO Hobby(name, description, teacher, frequency) 
        VALUES( '$hobby_names[1]', '$hobby_bcs[1]', '$teacher', 2)";

        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "INSERT INTO Hobby(name, description, teacher, frequency) 
        VALUES( '$hobby_names[2]', '$hobby_bcs[2]', '$teacher', 3)";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "INSERT INTO Hobby(name, description, teacher, frequency) 
        VALUES( '$hobby_names[3]', '$hobby_bcs[3]', '$teacher', 4)";

        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // insert work's names
        $sql = "INSERT INTO Work(name, teacher, number)
        VALUES( '$work_names[0]', '$teacher', 1)";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "INSERT INTO Work(name, teacher, number)
        VALUES( '$work_names[1]', '$teacher', 2)";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "INSERT INTO Work(name, teacher, number)
        VALUES( '$work_names[2]', '$teacher', 3)";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "INSERT INTO Work(name, teacher, number)
        VALUES( '$work_names[3]', '$teacher', 4)";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // work addresses
        $sql = "INSERT INTO Address_work(str, str_nr, plz, city, land, teacher, number) 
        VALUES( '$b_a_help1[0]',
        '$b_a_help1[1]', '$b_a_help1[2]',
        '$b_a_help1[3]', '$b_a_help1[4]', '$teacher', 1)";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // ----------------------------------
        $sql = "INSERT INTO Address_work(str, str_nr, plz, city, land, teacher, number) 
        VALUES( '$b_a_help2[0]',
        '$b_a_help2[1]', '$b_a_help2[2]',
        '$b_a_help2[3]', '$b_a_help2[4]', '$teacher', 2)";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // ----------------------------------
        $sql = "INSERT INTO Address_work(str, str_nr, plz, city, land, teacher, number) 
        VALUES( '$b_a_help3[0]',
        '$b_a_help3[1]', '$b_a_help3[2]',
        '$b_a_help3[3]', '$b_a_help3[4]', '$teacher', 3)";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // ----------------------------------
        $sql = "INSERT INTO Address_work(str, str_nr, plz, city, land, teacher, number) 
        VALUES( '$b_a_help4[0]',
        '$b_a_help4[1]', '$b_a_help4[2]',
        '$b_a_help4[3]', '$b_a_help4[4]', '$teacher', 4)";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // contributions addresses and description
        $sql = "INSERT INTO Contributing(name, description, teacher, number)
        VALUES( '$contr_names[0]', '$contr_descs[0]', '$teacher', 1)";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "INSERT INTO Contributing(name, description, teacher, number)
        VALUES( '$contr_names[1]', '$contr_descs[1]', '$teacher', 2)";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "INSERT INTO Contributing(name, description, teacher, number)
        VALUES( '$contr_names[2]', '$contr_descs[2]', '$teacher', 3)";
        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "INSERT INTO Contributing(name, description, teacher, number)
        VALUES( '$contr_names[3]', '$contr_descs[3]', '$teacher', 4)";

        if ($conn->query($sql) === TRUE) {
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
        
}
// end control
// echo "Teacher ist: " . $teacher . "<br>";

// Table teacher
$sql = "SELECT id, firstname, lastname, email, 
    occupation, phone, 
    website,  gender,  marital_status,  date_start, photo
     FROM Teacher WHERE id=$teacher";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $email =  $row["email"];
    $occupation = $row["occupation"];
    $phone = $row["phone"];
    $website = $row["website"];
    $gender = $row["gender"];
    $marital_status = $row["marital_status"];
    $date_start = $row["date_start"];
    $photo = $row["photo"];
  }
} else {
  echo "0 results";
}

// Table Address works
$i = 0;
$sql = "SELECT str, str_nr, plz, city, land 
     FROM Address_work WHERE teacher=$teacher";

$result = $conn->query($sql);
    
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $b_address[$i][0] = $row["str"];
    $b_address[$i][1] = $row["str_nr"];
    $b_address[$i][2] = $row["plz"];
    $b_address[$i][3] = $row["city"];
    $b_address[$i][4] = $row["land"];
    $i += 1;
  }
} else {
  echo "0 results";
}

// Table Address teacher
$sql = "SELECT str, str_nr, plz, city, land 
     FROM Address_teacher WHERE teacher=$teacher";

$result = $conn->query($sql);
    
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $t_address[0] = $row["str"];
    $t_address[1] = $row["str_nr"];
    $t_address[2] = $row["plz"];
    $t_address[3] = $row["city"];
    $t_address[4] = $row["land"];
  }
} else {
  echo "0 results";
}

// Table Hobby
$i = 0;
$sql = "SELECT name, description
     FROM Hobby WHERE teacher=$teacher";

$result = $conn->query($sql);
    
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $hobby_names[$i] = $row["name"];
    $hobby_bcs[$i] = $row["description"];
    $i++;
  }
} else {
  echo "0 results";
}

// Table Work
$i = 0;
$sql = "SELECT name
     FROM Work WHERE teacher=$teacher";

$result = $conn->query($sql);
    
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $work_names[$i] = $row["name"];
    $i++;
  }
} else {
  echo "0 results";
}

// Table Contributions
$i = 0;
$sql = "SELECT name, description
     FROM Contributing WHERE teacher=$teacher";

$result = $conn->query($sql);
    
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $contr_names[$i] = $row["name"];
    $contr_descs[$i] = $row["description"];
    $i++;
  }
} else {
  echo "0 results";
}

  $conn->close();

  // remove too much space, tab, special caracters from input
  function control_input($data) {
    if(empty($data)){
        return "";
    }
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
     <!-- Logo + Nav -->

    <!-- Header for the step overview -->
    <div id="header_step_overview">
        <div id="sticky_navbar_a">
          <header>
            <a href="../index.html">
              <img
                src="../Bilder/Logo/Logo_2.svg"
                alt="logo von der Website the Way"
                id="logo"
              />
            </a>
            <div class="toogle">
              <!-- mit Css erstellen-->
              <span class="toogle one"></span>
              <span class="toogle two"></span>
              <span class="toogle three"></span>
            </div>
          </header>
          
          <nav>
            <div class="menu">
                    <a href="../index.html">
                        <p id="home_1452">
                        Home    
    
                        </p>  
                    </a>
                    <div></div>
                    <a href="../contact_us.html">
                    <p>
                       Contact

                    </p>  
                </a>
                <div>

                </div>
                    <a href="../mittelstufe_startSeite.html">
                        <p>
                            Stufe
                        </p>
                    </a> 
                
                <div></div>
            </div>
          </nav>
        </div>
        <div class="name_webmaster">
          <p>
           <br><br><br>
            <?php echo $firstname;echo " ";?> <?php echo $lastname;?>
                <br><br>Seit <?php echo $date_start;?> bei the way
            </p>
        </div>
        
        
    </div>


    <div class="left">
        <div class="p_theme">
            <div class="p_theme_1">Contributing in the Society</div>
            <div class="p_theme_2"></div>
        </div>
        <h4><?php echo $contr_names[0];?></h4>
        <p>
            <?php echo $contr_descs[0];?>
        </p>
        <h4><?php echo $contr_names[1];?></h4>
        <p>
            <?php echo $contr_descs[1];?>
        </p>
        <h4><?php echo $contr_names[2];?></h4>
        <p><?php echo $contr_descs[2];?></p>
        <h4><?php echo $contr_names[3];?></h4>
        <p>
            <?php echo $contr_descs[3];?>
        </p>
    </div>
    <!-- Content of the Profil !!!-->
    <main>
        <div class="main_left">
            <div class="container_image_tootip">
                <img src="<?php echo $photo;?>" alt="Passbild von Junior Pablito" width="70" height="70" />
                <img class="tooltiptext2" src="<?php echo $photo;?>" alt="position" width="300" height="300" />
            </div>
            <div class="p_header">
                <p class="p_name"><?php echo $firstname;echo " ";?><?php echo $lastname;?></p>
                <p class="p_job">
                    <img src="../Bilder/Icon/student.png" alt="position" width="14" height="14" />
                    <a href="https://www.hs-worms.de/ai/beschreibung/" target="_blank"
                        rel="noopener noreferrer"><?php echo $occupation;?></a>
                </p>
                <div class="p_pos">
                    <img src="../Bilder/Icon/position.png" alt="position" width="14" height="14" />
                    <?php echo $t_address[3]
                        . ", " . $t_address[4];?>
                    <span class="tooltiptext">
                        Miami ist eine Stadt im US-Bundesstaat Florida mit 442.241
                        Einwohnern</span>
                </div>

                <p class="p_hbd">
                    <img src="../Bilder/Icon/information.png" alt="position" width="14" height="14" />
                    <a href="#jump_basic_info">Basic Informations</a>
                </p>
                <p class="p_contact">
                    <img src="../Bilder/Icon/contact.png" alt="position" width="14" height="14" />
                    <a href="#jump_contact">Contact</a>
                </p>
            </div>
        </div>
        <div class="main_right">
            <span class="monentan_level2_j">
                <div class="p_theme">
                    <div class="p_theme_1">Berufe</div>
                    <div class="p_theme_2"></div>
                </div>
                <h4><?php echo $work_names[0];?></h4>
                <p><?php echo $b_address[0][0]
                        . " " . $b_address[0][1]
                        . "<br>" . $b_address[0][2]
                        . " " . $b_address[0][3]
                        . "<br>" . $b_address[0][4];?>
                </p>
                <h4><?php echo $work_names[1];?></h4>
                <p><?php echo $b_address[1][0]
                        . " " . $b_address[1][1]
                        . "<br>" . $b_address[1][2]
                        . " " . $b_address[1][3]
                        . "<br>" . $b_address[1][4];?>
                </p>
                <h4><?php echo $work_names[2];?></h4>
                <p><?php echo $b_address[2][0]
                        . " " . $b_address[2][1]
                        . "<br>" . $b_address[2][2]
                        . " " . $b_address[2][3]
                        . "<br>" . $b_address[2][4];?>
                </p>
                <h4><?php echo $work_names[3];?></h4>
                <p><?php echo $b_address[3][0]
                        . " " . $b_address[3][1]
                        . "<br>" . $b_address[3][2]
                        . " " . $b_address[3][3]
                        . "<br>" . $b_address[3][4];?>
                </p>
            </span>
            <span class="monentan_level1_j">
                <div class="p_theme">
                    <div class="p_theme_1">Hobbys</div>
                    <div class="p_theme_2"></div>
                </div>
                <h4><?php echo $hobby_names[0];?></h4>
                <?php echo $hobby_bcs[0];?>
                <h4><?php echo $hobby_names[1];?></h4>
                <?php echo $hobby_bcs[1];?>
                <h4><?php echo $hobby_names[2];?></h4>
                <?php echo $hobby_bcs[2];?>
                <h4><?php echo $hobby_names[3];?></h4>
                <?php echo $hobby_bcs[3];?><br>
                <div id="jump_contact"></div>
            </span>

            <div class="p_theme">
                <div class="p_theme_1">Contact</div>
                <div class="p_theme_2"></div>
            </div>
            <div class="p_attribut">
                <h4 class="col1_row1">Phone:</h4>
                <h4 class="col1_row2">Address:</h4>
                <h4 class="col1_row3">Email:</h4>
                <h4 class="col1_row4">Webseite:</h4>
                <p class="col2_row1">
                    <a href=<?php echo "tel:" .$phone;?>><?php echo $phone;?></a>
                </p>
                <p class="col2_row2">
                    <?php echo $t_address[0]
                        . " " . $t_address[1]
                        . "<br>" . $t_address[2]
                        . " " . $t_address[3]
                        . "<br>" . $t_address[4];?>
                </p>
                <p class="col2_row3">
                    <a href=<?php echo "mailto: " .$email;?>><?php echo $email;?></a>
                </p>
                <p class="col2_row4">
                    <a href="https://<?php echo $website;?>"><?php echo $website;?></a>
                </p>
            </div>
            <span class="monentan_level1_j">
                <div class="p_theme">
                    <div id="jump_basic_info" class="p_theme_1">More Infos</div>
                    <div class="p_theme_2"></div>
                </div>
                <div class="p_attribut">
                    <h4 class="col1_row1">Gender:</h4>
                    <h4 class="col1_row2">Familienstand:</h4>
                    <p class="col2_row1"><?php echo $gender;?></p>
                    <p class="col2_row2"><?php echo $marital_status;?></p>
                </div>
                <div class="p_theme">
                    <div class="p_theme_1">Contributing in the Society</div>
                    <div class="p_theme_2"></div>
                </div>
                <h4><?php echo $contr_names[0];?></h4>
                <p>
                    <?php echo $contr_descs[0];?>
                </p>
                <h4><?php echo $contr_names[1];?></h4>
                <p>
                    <?php echo $contr_descs[1];?>
                </p>
                <h4><?php echo $contr_names[2];?></h4>
                <p><?php echo $contr_descs[2];?></p>
                <h4><?php echo $contr_names[3];?></h4>
                <p>
                    <?php echo $contr_descs[3];?>
                </p>
            </span>
            
            <div id="close_it_teacher" class="animated_b_container_j">
                <button class="animated_bottom_j" onclick="open_formular()">Update Teacher</button>
            </div>
            
        </div>
    </main>

    <aside>
        <div class="p_theme">
            <div class="p_theme_1">Hobbys</div>
            <div class="p_theme_2"></div>
        </div>
        <h4><?php echo $hobby_names[0];?></h4>
        <?php echo $hobby_bcs[0];?>
        <h4><?php echo $hobby_names[1];?></h4>
        <?php echo $hobby_bcs[1];?>
        <h4><?php echo $hobby_names[2];?></h4>
        <?php echo $hobby_bcs[2];?>
        <h4><?php echo $hobby_names[3];?></h4>
        <?php echo $hobby_bcs[3];?><br />
        <div class="p_theme">
            <div class="p_theme_1">More Infos</div>
            <div class="p_theme_2"></div>
        </div>
        <div class="p_attribut">
            <h4 class="col1_row1">Gender:</h4>
            <h4 class="col1_row2">Familienstand:</h4>
            <p class="col2_row1"><?php echo $gender;?></p>
            <p class="col2_row2"><?php echo $marital_status;?></p>
        </div>
        <span class="monentan_level2_j">
            <div class="p_theme">
                <div class="p_theme_1">Contributing in the Society</div>
                <div class="p_theme_2"></div>
            </div>
            <h4><?php echo $contr_names[0];?></h4>
            <p>
                <?php echo $contr_descs[0];?>
            </p>
            <h4><?php echo $contr_names[1];?></h4>
            <p>
                <?php echo $contr_descs[1];?>
            </p>
            <h4><?php echo $contr_names[2];?></h4>
            <p><?php echo $contr_descs[2];?></p>
            <h4><?php echo $contr_names[3];?></h4>
            <p>
                <?php echo $contr_descs[3];?>
            </p>
        </span>
        <span class="monentan_level3_j">
            <div class="p_theme">
                <div class="p_theme_1">Berufe</div>
                <div class="p_theme_2"></div>
            </div>
            <h4><?php echo $work_names[0];?></h4>
                <p><?php echo $b_address[0][0]
                        . " " . $b_address[0][1]
                        . "<br>" . $b_address[0][2]
                        . " " . $b_address[0][3]
                        . "<br>" . $b_address[0][4];?>
                </p>
                <h4><?php echo $work_names[1];?></h4>
                <p><?php echo $b_address[1][0]
                        . " " . $b_address[1][1]
                        . "<br>" . $b_address[1][2]
                        . " " . $b_address[1][3]
                        . "<br>" . $b_address[1][4];?>
                </p>
                <h4><?php echo $work_names[2];?></h4>
                <p><?php echo $b_address[2][0]
                        . " " . $b_address[2][1]
                        . "<br>" . $b_address[2][2]
                        . " " . $b_address[2][3]
                        . "<br>" . $b_address[2][4];?>
                </p>
                <h4><?php echo $work_names[3];?></h4>
                <p><?php echo $b_address[3][0]
                        . " " . $b_address[3][1]
                        . "<br>" . $b_address[3][2]
                        . " " . $b_address[3][3]
                        . "<br>" . $b_address[3][4];?>
                </p>
        </span>
    </aside>
<!-- foooter for the informations about the teachers -->
    <div class="footer_j_j">
        <span id="jump_to_hier_j"></span>
        <!-- form to update or add teacher -->
        
        <span id="update_teacher_j">
                    
                  
                    <form class="formular_teacher_update" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   
                    <h3 id="jump_hier_on_open">Update or Add Teacher</h3> 
                    <div>
                    <h4>Basic Infos</h4>    
                    <span class="grid_teacher">
                            
                            <label for="vorname">Vorname*</label>
                            <input type="text" name="t_fn" 
                            maxlength="20" required value="<?php echo $t_fn;?>">
                        
                            <label for="nachname">Nachname</label>
                            <input type="text" name="t_ln" 
                            maxlength="20" required value="<?php echo $t_ln;?>">
                        
                            <label for="email">Email</label>
                            <input type="email" name="t_e" 
                            maxlength="25" required value="<?php echo $t_e;?>">
                        
                            <label for="webseite">Webseite</label>
                            <input type="url" name="t_w" 
                            maxlength="25" value="<?php echo $t_w;?>">
                        
                            <label for="Tätigkeit">Tätigkeit</label>
                            <input type="text" name="t_t" 
                            maxlength="25" required value="<?php echo $t_t;?>">
                            
                            <label for="Tel">Tel</label>
                            <input type="tel" name="t_p" placeholder="0 156 89 32529" 
                            pattern="0 [0-9]{3} [0-9]{2} [0-9]{5}"
                            maxlength="25" required value="<?php echo $t_p;?>">
                        </span>
                        
                    </div>
    
                    <div>
                    <h4>Addresse</h4>
        
        <span class="grid_teacher">
            <label for="Straße">Straße</label>
                <input type="text" name="t_str" 
                maxlength="25" required value="<?php echo $t_str;?>">
            
            <label for="Straße Nummer">Straße Nr.</label>
                <input type="text" name="t_str_nr" 
                maxlength="10" required value="<?php echo $t_str_nr;?>">
            
            <label for="Postleizahl">PLZ</label>
                <input type="text" name="t_plz" placeholder="2529" 
                            pattern="[0-9]{5}"
                maxlength="10" required value="<?php echo $t_plz;?>">
            
            <label for="Stadt">Stadt</label>
                <input type="text" name="t_sdt" 
                maxlength="25" required value="<?php echo $t_sdt;?>">
            
            <label for="Land">Land</label>
                <input type="text" name="t_land" 
                maxlength="25" required value="<?php echo $t_land;?>">
        </span>
    
                    </div>
                    
                   <div class="radio_teacher_j">
                   <h4>Gender</h4>
                        <label for="Mann">
                            <input type="radio" name="t_gdr"
                                <?php if (isset($t_gdr) && $t_gdr=="Mann") echo "checked";?> required value="Mann">
                            Mann</label><br>
                        
                        <label for="Frau">
                        <input type="radio" name="t_gdr"
                            <?php if (isset($t_gdr) && $t_gdr=="Frau") echo "checked";?> value="Frau">
                            Frau</label><br>
        
                        <label for="Nicht eingeben">
                        <input type="radio" name="t_gdr"
                            <?php if (isset($t_gdr) && $t_gdr=="Nicht eingeben") echo "checked";?> value="Nicht eingeben">
                            Nicht eingeben</label><br>
        
    
                   </div>     
        
                     <div class="radio_teacher_j">
                        <h4>Familienstand</h4>
                        <label for="Ledig">
                            <input type="radio" name="t_fsdt"
                                <?php if (isset($t_fsdt) && $t_fsdt=="Ledig") echo "checked";?> required value="Ledig">
                            Ledig</label><br>
                        
                        <label for="Verheiratet">
                        <input type="radio" name="t_fsdt"
                            <?php if (isset($t_fsdt) && $t_fsdt=="Verheiratet") echo "checked";?> value="Verheiratet">
                            Verheiratet</label><br>
        
                        <label for="Geschieden">
                        <input type="radio" name="t_fsdt"
                            <?php if (isset($t_fsdt) && $t_fsdt=="Geschieden") echo "checked";?> value="Geschieden">
                            Geschieden</label><br>
        
                        <label for="Verliebt">
                        <input type="radio" name="t_fsdt"
                            <?php if (isset($t_fsdt) && $t_fsdt=="Verliebt") echo "checked";?> value="Verliebt">
                            Verliebt</label><br>
                     </div>  
                     <div class="radio_teacher_j">
                        <h4>Profil photo</h4>
                        <label for="photo 1">
                            <input type="radio" name="t_ph"
                                <?php if (isset($t_ph) && $t_ph=="photo1.jpeg") echo "checked";?> required value="photo1.jpeg">
                            Photo 1</label><br>
                        
                        <label for="photo 2">
                        <input type="radio" name="t_ph"
                            <?php if (isset($t_ph) && $t_ph=="photo2.jpeg") echo "checked";?> value="photo2.jpeg">
                            Photo 2</label><br>
        
                        <label for="photo 3">
                        <input type="radio" name="t_ph"
                            <?php if (isset($t_ph) && $t_ph=="photo3.jpeg") echo "checked";?> value="photo3.jpeg">
                            Photo 3</label><br>
        
                        <label for="photo 4">
                        <input type="radio" name="t_ph"
                            <?php if (isset($t_ph) && $t_ph=="photo4.jpeg") echo "checked";?> value="photo4.jpeg">
                            Photo 4</label><br>
                     </div>   
    
                     <div>
                        <h4>Hobbys <span id="max_hobby" style="color: red;"></span>
                            <button type="button" onclick="add_hobby()">
                                +
                            </button>
                        </h4>
                        <span class="grid_teacher">
                            <label for="Hobby Name">Name</label>
                                <input type="text" name="h_n" 
                                maxlength="25" required value="<?php echo $h_n;?>">
                        </span>
                        Beschreibung        
                        <textarea placeholder="Gibt was ein.." 
                        value="<?php echo $h_b;?>" name="h_b"></textarea>
    
                        <span id="hobby_j_1">
                            <h4>Hobby 2
                                <button type="button" onclick='close_hobby("hobby_j_1")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Hobby Name">Name</label>
                                    <input type="text" id="h_n1" name="h_n1" 
                                    maxlength="25" value="<?php echo $h_n1;?>">
                            </span>
                            Beschreibung        
                            <textarea placeholder="Gibt was ein.." id="h_b1" 
                            value="<?php echo $h_b1;?>" name="h_b1"></textarea>
                        </span>
                        <span id="hobby_j_2">
                            <h4>Hobby 3
                                <button type="button" onclick='close_hobby("hobby_j_2")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Hobby Name">Name</label>
                                    <input type="text" id="h_n2" name="h_n2" 
                                    maxlength="25" value="<?php echo $h_n2;?>">
                            </span>
                            Beschreibung        
                            <textarea placeholder="Gibt was ein.." id="h_b2" 
                            value="<?php echo $h_b2;?>" name="h_b2"></textarea>
                        </span>
                        <span id="hobby_j_3">
                            <h4>Hobby 4
                                <button type="button" onclick='close_hobby("hobby_j_3")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Hobby Name">Name</label>
                                    <input type="text" id="h_n3" name="h_n3" 
                                    maxlength="25" value="<?php echo $h_n3;?>">
                            </span>
                            Beschreibung        
                            <textarea placeholder="Gibt was ein.." id="h_b3" 
                            name="h_b3" value="<?php echo $h_b3;?>"></textarea>
                        </span>
                     </div>
    
                     <div>
                     <h4>Beruf <span id="max_beruf" style="color: red;"></span>
                            <button type="button" onclick="add_beruf()">
                                +
                            </button>
                        </h4>
                        <span class="grid_teacher">
                            <label for="Beruf Name">Name</label>
                                <input type="text" name="b_n" 
                                maxlength="25" required value="<?php echo $b_n;?>">
                        </span>
    
                        <b>Addresse</b>        
                        <span class="grid_teacher">
                            <label for="Straße">Straße</label>
                                <input type="text" name="b_str" 
                                maxlength="25" required value="<?php echo $b_str;?>">
                            
                            <label for="Straße Nummer">Straße Nr.</label>
                                <input type="text" name="b_str_nr" 
                                maxlength="10" required value="<?php echo $b_str_nr;?>">
                            
                            <label for="Postleizahl">PLZ</label>
                                <input type="text" name="b_plz" placeholder="2529" 
                            pattern="[0-9]{5}"
                                maxlength="10" required value="<?php echo $b_plz;?>">
                            
                            <label for="Stadt">Stadt</label>
                                <input type="text" name="b_sdt" 
                                maxlength="25" required value="<?php echo $b_sdt;?>">
                            
                            <label for="Land">Land</label>
                                <input type="text" name="b_land" 
                                maxlength="25" required value="<?php echo $b_land;?>">
                        </span>
    
                        <span id="beruf_j_1">
                            <h4>Beruf 2
                                <button type="button" onclick='close_beruf("beruf_j_1")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Beruf Name">Name</label>
                                    <input type="text" id="b_n1" name="b_n1" 
                                    maxlength="25" value="<?php echo $b_n1;?>">
                            </span>
    
                            <b>Addresse</b>     
                            <span class="grid_teacher">
                                <label for="Straße">Straße</label>
                                    <input type="text" id="b_str1" name="b_str1" 
                                    maxlength="25" value="<?php echo $b_str1;?>">
                                
                                <label for="Straße Nummer">Straße Nr.</label>
                                    <input type="text" name="b_str_nr1" id="b_str_nr1" 
                                    maxlength="10" value="<?php echo $b_str_nr1;?>">
                                
                                <label for="Postleizahl">PLZ</label>
                                    <input type="text" name="b_plz1" id="b_plz1" placeholder="2529" 
                            pattern="[0-9]{5}"
                                    maxlength="10" value="<?php echo $b_plz1;?>">
                                
                                <label for="Stadt">Stadt</label>
                                    <input type="text" name="b_sdt1" id="b_sdt1"
                                    maxlength="25" value="<?php echo $b_sdt1;?>">
                                
                                <label for="Land">Land</label>
                                    <input type="text" name="b_land1" id="b_land1"
                                    maxlength="25" value="<?php echo $b_land1;?>">
                            </span>
                        </span>
    
                        <span id="beruf_j_2">
                            <h4>Beruf 3
                                <button type="button" onclick='close_beruf("beruf_j_2")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Beruf Name">Name</label>
                                    <input type="text" name="b_n2"  id="b_n2"
                                    maxlength="25" value="<?php echo $b_n2;?>">
                            </span>
    
                            <b>Addresse</b>       
                            <span class="grid_teacher">
                                <label for="Straße">Straße</label>
                                    <input type="text" name="b_str2" id="b_str2"
                                    maxlength="25" value="<?php echo $b_str2;?>">
                                
                                <label for="Straße Nummer">Straße Nr.</label>
                                    <input type="text" name="b_str_nr2" id="b_str_nr2"  
                                    maxlength="10" value="<?php echo $b_str_nr2;?>">
                                
                                <label for="Postleizahl">PLZ</label>
                                    <input type="text" name="b_plz2" id="b_plz2" placeholder="2529" 
                            pattern="[0-9]{5}"
                                    maxlength="10" value="<?php echo $b_plz2;?>">
                                
                                <label for="Stadt">Stadt</label>
                                    <input type="text" name="b_sdt2" id="b_sdt2" 
                                    maxlength="25" value="<?php echo $b_sdt2;?>">
                                
                                <label for="Land">Land</label>
                                    <input type="text" name="b_land2" id="b_land2" 
                                    maxlength="25" value="<?php echo $b_land2;?>">
                            </span>
                        </span>
    
                        
                        <span id="beruf_j_3">
                            <h4>Beruf 4
                                <button type="button" onclick='close_beruf("beruf_j_3")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Beruf Name">Name</label>
                                    <input type="text" name="b_n3" id="b_n3" 
                                    maxlength="25" value="<?php echo $b_n3;?>">
                            </span>
    
                            <b>Addresse</b>       
                            <span class="grid_teacher">
                                <label for="Straße">Straße</label>
                                    <input type="text" name="b_str3" id="b_str3" 
                                    maxlength="25" value="<?php echo $b_str3;?>">
                                
                                <label for="Straße Nummer">Straße Nr.</label>
                                    <input type="text" name="b_str_nr3" id="b_str_nr3" 
                                    maxlength="10" value="<?php echo $b_str_nr3;?>">
                                
                                <label for="Postleizahl">PLZ</label>
                                    <input type="text" name="b_plz3" id="b_plz3" placeholder="2529" 
                            pattern="[0-9]{5}"
                                    maxlength="10" value="<?php echo $b_plz3;?>">
                                
                                <label for="Stadt">Stadt</label>
                                    <input type="text" name="b_sdt3" id="b_sdt3" 
                                    maxlength="25" value="<?php echo $b_sdt3;?>">
                                
                                <label for="Land">Land</label>
                                    <input type="text" name="b_land3" id="b_land3" 
                                    maxlength="25" value="<?php echo $b_land3;?>">
                            </span>
                        </span>
    
    
                     </div>
    
                     <div>
                        <h4>Contributions <span id="max_ctr" style="color: red;"></span>
                            <button type="button" onclick="add_ctr()">
                                +
                            </button>
                        </h4>
                        <span class="grid_teacher">
                            <label for="Contribution Name">Name</label>
                                <input type="text" name="ctr_n" 
                                maxlength="25" required value="<?php echo $ctr_n;?>">
                        </span>
                        Beschreibung        
                        <textarea placeholder="Gibt was ein.." 
                        value="<?php echo $ctr_b;?>" name="ctr_b"></textarea>
    
                        <span id="ctr_j_1">
                            <h4>Contribution 2
                                <button type="button" onclick='close_ctr("ctr_j_1")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Contribution Name">Name</label>
                                    <input type="text" id="ctr_n1" name="ctr_n1" 
                                    maxlength="25" value="<?php echo $ctr_n1;?>">
                            </span>
                            Beschreibung        
                            <textarea placeholder="Gibt was ein.." id="ctr_b1" 
                            value="<?php echo $ctr_b1;?>" name="ctr_b1"></textarea>
                        </span>
                        <span id="ctr_j_2">
                            <h4>Contribution 3
                                <button type="button" onclick='close_ctr("ctr_j_2")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Contribution Name">Name</label>
                                    <input type="text" id="ctr_n2" name="ctr_n2" 
                                    maxlength="25" value="<?php echo $ctr_n2;?>">
                            </span>
                            Beschreibung        
                            <textarea placeholder="Gibt was ein.." id="ctr_b2" 
                            value="<?php echo $ctr_b2;?>" name="ctr_b2"></textarea>
                        </span>
                        <span id="ctr_j_3">
                            <h4>Contribution 4
                                <button type="button" onclick='close_ctr("ctr_j_3")'>
                                    -
                                </button>
                            </h4>
                            <span class="grid_teacher">
                                <label for="Contribution Name">Name</label>
                                    <input type="text" id="ctr_n3" name="ctr_n3" 
                                    maxlength="25" value="<?php echo $ctr_n3;?>">
                            </span>
                            Beschreibung        
                            <textarea placeholder="Gibt was ein.." id="ctr_b3" 
                            name="ctr_b3" value="<?php echo $ctr_b3;?>"></textarea>
                        </span>
                     </div>
    
        
                    <br>
                    <div class="animated_b_container_j">
                        <input class="animated_bottom_j" type="submit" value="Absenden">
                        <br>
                        <button type="button" class="animated_bottom_j" onclick="close_formular()">
                        Cancel</button>
                    </div>
                    </form>
                
                    </span>
        

        <div class="footer_general_j">
          <section>
            <img src="../Bilder/Logo/Logo_2.svg" alt="Logo the The Way" />
            <p>China Town 16<br />80791 Newyork<br />USA</p>
          </section>
          <section>
            <h4>Contact</h4>
            <a href="mailto:ampharos@gmail.com">Schreib uns</a><br />
            <a href="../contact_us.html">Feedback senden</a>
          </section>
          <section>
            <h4>Service</h4>
            <a href="../arbeitmoeglichkeit.html">Nachhilfekurs</a><br />
            <a href="../arbeitmoeglichkeit.html">Arbeitmöglichkeiten</a>
          </section>
          <section>
            <h4>About us</h4>
            <a href="../wer_sind_wir.html">Wer sind wir?</a><br />
            <a href="../Profil/lehrer.php?id=3">Esra's profil page</a><br />
            <a href="../Profil/lehrer.php?id=2">Aymar's profil page</a><br />
            <a href="../Profil/lehrer.php?id=1">Junior's profil page</a>
          </section>
        </div>
    </div>
    
    </body>
    
    </html>