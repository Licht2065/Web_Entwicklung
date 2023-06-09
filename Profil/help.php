<div>
          <p class="name_webmaster">
           <br>
            <?php echo $firstname;echo " ";?> <?php echo $lastname;?>
                <br><br>Seit <?php echo $date_start;?> bei the way
            </p>
        </div>



<?php
//insert teacher's addresses
$sql = "INSERT INTO Address_teacher(str, str_nr, plz, city, land, teacher)
 VALUES( '$t_address[0]', '$t_address[1]',
'$t_address[2]', '$t_address[3]',
'$t_address[4]', '$teacher')";
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//insert teacher's hobbys
$sql = "INSERT INTO Hobby(name, description, teacher, frequency) 
 VALUES( '$hobby_names[0]', '$hobby_bcs[0]', '$teacher', 1)";
    if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO Hobby(name, description, teacher, frequency) 
 VALUES( '$hobby_names[1]', '$hobby_bcs[1]', '$teacher', 2)";

if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO Hobby(name, description, teacher, frequency) 
 VALUES( '$hobby_names[2]', '$hobby_bcs[2]', '$teacher', 3)";
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO Hobby(name, description, teacher, frequency) 
 VALUES( '$hobby_names[3]', '$hobby_bcs[3]', '$teacher', 4)";

if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// insert work's names
$sql = "INSERT INTO Work(name, teacher, number)
 VALUES( '$work_names[0]', '$teacher', 1)";
    if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO Work(name, teacher, number)
 VALUES( '$work_names[1]', '$teacher', 2)";
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO Work(name, teacher, number)
 VALUES( '$work_names[2]', '$teacher', 3)";
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO Work(name, teacher, number)
 VALUES( '$work_names[3]', '$teacher', 4)";
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// work addresses
$sql = "INSERT INTO Address_work(str, str_nr, plz, city, land, teacher, number) 
 VALUES( '$b_a_help1[0]',
'$b_a_help1[1]', '$b_a_help1[2]',
'$b_a_help1[3]', '$b_a_help1[4]', '$teacher', 1)";
if ($conn->query($sql) === TRUE) {
echo "New records created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
// ----------------------------------
$sql = "INSERT INTO Address_work(str, str_nr, plz, city, land, teacher, number) 
 VALUES( '$b_a_help2[0]',
'$b_a_help2[1]', '$b_a_help2[2]',
'$b_a_help2[3]', '$b_a_help2[4]', '$teacher', 2)";
if ($conn->query($sql) === TRUE) {
echo "New records created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
// ----------------------------------
$sql = "INSERT INTO Address_work(str, str_nr, plz, city, land, teacher, number) 
 VALUES( '$b_a_help3[0]',
'$b_a_help3[1]', '$b_a_help3[2]',
'$b_a_help3[3]', '$b_a_help3[4]', '$teacher', 3)";
if ($conn->query($sql) === TRUE) {
echo "New records created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
// ----------------------------------
$sql = "INSERT INTO Address_work(str, str_nr, plz, city, land, teacher, number) 
 VALUES( '$b_a_help4[0]',
'$b_a_help4[1]', '$b_a_help4[2]',
'$b_a_help4[3]', '$b_a_help4[4]', '$teacher', 4)";
if ($conn->query($sql) === TRUE) {
echo "New records created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

// contributions addresses and description
$sql = "INSERT INTO Contributing(name, description, teacher, number)
 VALUES( '$contr_names[0]', '$contr_descs[0]', '$teacher', 1)";
if ($conn->query($sql) === TRUE) {
echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO Contributing(name, description, teacher, number)
 VALUES( '$contr_names[1]', '$contr_descs[1]', '$teacher', 2)";
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO Contributing(name, description, teacher, number)
 VALUES( '$contr_names[2]', '$contr_descs[2]', '$teacher', 3)";
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO Contributing(name, description, teacher, number)
 VALUES( '$contr_names[3]', '$contr_descs[3]', '$teacher', 4)";

if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}