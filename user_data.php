<?php
//extract the content of form posted using their keys
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$country = $_POST['country'];



// Echo the extracted values out to the user_data
echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Date of Birth: " . $dob . "<br>";
echo "Gender: " . $gender . "<br>";
echo "Country: " . $country . "<br>";

 //save data into the file
   
    $filename = "./userdata.csv";
    $handle = fopen ($filename, "a");
    $inputArray[] = array($name, $email, $dob, $gender, $country);
    foreach ($inputArray as $csv) {
        $csvRow[] = fputcsv($handle,$csv);
    }
    $csvData = implode("\n", $csvRow);
    if($csvData){
    echo "User Successfully Saved".  "<br> <a href='./index.php'>Go to Form</a>";
}





    
