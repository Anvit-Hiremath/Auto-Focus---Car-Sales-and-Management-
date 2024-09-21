<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "autofocus";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $aadhar = $_POST['aadhar'];
    $city = $_POST['city'];
    //Database Connection
    $conn = new mysqli('localhost','root','', 'test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contact(name, email, phone, aadhar, city)
        values(?, ?, ?, ?, ?)")
        $stmt->bind_param("ssiis",$name, $email, $phone, $aadhar, $city);
        $stmt->execute();
        echo "Submitted Successfully..";
        $stmt->close();
        $conn->close();

    }
    
?>






<?php
    $dl_number = $_POST['dl_number'];
    $reg_date = $_POST['reg_date'];
    //Database Connection
    $conn = new mysqli('localhost','root','', 'test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into car_details(dl_number, reg_date)
        values(?, ?)")
        $stmt->bind_param("ss",$dl_number, $reg_date);
        $stmt->execute();
        ecoh "Submitted Successfully..";
        $stmt->close();
        $conn->close();

    }
    
?>






<?php
    $card_no = $_POST['card_no'];
    $CVV = $_POST['CVV'];
    $message = $_POST['message'];

    //Database Connection
    $conn = new mysqli('localhost','root','', 'test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into card_details(card_no, CVV, message)
        values(?, ?, ?)")
        $stmt->bind_param("ii"$card_no, $CVV, $message);
        $stmt->execute();
        ecoh "Submitted Successfully..";
        $stmt->close();
        $conn->close();

    }
    
?>
