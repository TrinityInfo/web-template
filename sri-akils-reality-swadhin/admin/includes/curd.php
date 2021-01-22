<?php
    include '../../config.php';
    date_default_timezone_set('Asia/Kolkata');
    $date_time = date('d/m/Y g:i a');
    $uniqID = uniqid();
// Inserting Property
    if(isset($_POST["addProperty"]))
    {
        echo $insert = "INSERT INTO `propertydetails` (`propertyID`,`title`,`description`,`propertyStatus`,`type`,`room`,`price`,`area`,`address`,`city`,`state`,`country`,`age`,`bedroom`,`bathroom`,`features`,`link`,`nearBy`,`status`,`createdOn`) VALUES 
        ('$uniqID','".$_POST["title"]."','".$_POST["description"]."','".$_POST["status"]."','".$_POST["type"]."','".$_POST["room"]."',
        '".$_POST["price"]."','".$_POST["area"]."','".$_POST["address"]."','".$_POST["city"]."','".$_POST["state"]."',
        '".$_POST["country"]."','".$_POST["age"]."','".$_POST["bedroom"]."','".$_POST["bathroom"]."','".$_POST["features"]."',
        '".$_POST["link"]."','".$_POST["nearBy"]."','1','$date_time')";

        if($conn->query($insert)) echo '<meta http-equiv="refresh" content="0; url=../all-property.php">';
        else echo mysqli_error($conn);

        mkdir('../../images/property_images/'.$uniqID.'/',0777);
        $total = count($_FILES['upload']['name']);
        for( $i=0 ; $i < $total ; $i++ ) 
        {
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
            if ($tmpFilePath != "")
            {
                $newFilePath = "../../images/property_images/".$uniqID."/".$_FILES['upload']['name'][$i];
                move_uploaded_file($tmpFilePath, $newFilePath);
                $newFilePath = "../images/property_images/".$uniqID."/".$_FILES['upload']['name'][$i];
                move_uploaded_file($tmpFilePath, $newFilePath);
            }
        }
    }
// Disable Property
    if(isset($_GET["removeProperty"])){
        $update = "UPDATE `propertydetails` SET `status`='0' WHERE id='".$_GET["removeProperty"]."' ";
        $conn->query($update);
        echo '<meta http-equiv="refresh" content="0; url=../all-property.php">';
    }
// Disable Msg
    if(isset($_POST["removeMsg"])){
        $update = "UPDATE `contactdetail` SET `status`='0' WHERE id='".$_POST["id"]."' ";
        $conn->query($update);
        echo '<meta http-equiv="refresh" content="0; url=../index">';
    }
// Admin Contact Detail
    if(isset($_POST["updateAdminDetail"]))
    {
        $update = "UPDATE `admin` SET `phone1`='".$_POST["phone1"]."',`phone2`='".$_POST["phone2"]."',`mail1`='".$_POST["mail1"]."',`mail2`='".$_POST["mail2"]."',`address`='".$_POST["address"]."' WHERE id='1' ";
        $conn->query($update);
        echo '<meta http-equiv="refresh" content="0; url=../index">';
    }
// Admin Password
    if(isset($_POST["changePassword"]))
    {
        $update = "UPDATE `admin` SET `password`='".base64_encode($_POST["newPassword"])."' WHERE id='1' ";
        $conn->query($update);
        echo '<meta http-equiv="refresh" content="0; url=../index">';
    }
// Update Property
    if(isset($_POST["updateProperty"])){
        $update = "UPDATE `propertydetails` SET `title`='".$_POST["title"]."',`description`='".$_POST["description"]."',
        `propertyStatus`='".$_POST["status"]."',`type`='".$_POST["type"]."',`room`='".$_POST["room"]."',`price`='".$_POST["price"]."',`area`='".$_POST["area"]."',`address`='".$_POST["address"]."',`city`='".$_POST["city"]."',`state`='".$_POST["state"]."',
        `country`='".$_POST["country"]."',`age`='".$_POST["age"]."',`bedroom`='".$_POST["bedroom"]."',`bathroom`='".$_POST["bathroom"]."',`features`='".$_POST["features"]."',`link`='".$_POST["link"]."',`nearBy`='".$_POST["nearBy"]."' WHERE `propertyID`='".$_POST["id"]."' ";
        $conn->query($update);
        echo '<meta http-equiv="refresh" content="0; url=../all-property.php">';
        $total = count($_FILES['upload']['name']);
        for( $i=0 ; $i < $total ; $i++ ) 
        {
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
            if ($tmpFilePath != "")
            {
                $newFilePath = "../../images/property_images/".$_POST["id"]."/".$_FILES['upload']['name'][$i];
                move_uploaded_file($tmpFilePath, $newFilePath);
                $newFilePath = "../images/property_images/".$_POST["id"]."/".$_FILES['upload']['name'][$i];
                move_uploaded_file($tmpFilePath, $newFilePath);
            }
        }
    }
// Enquiry
    if(isset($_POST["sendmessage"])){
        $insert = "INSERT INTO `contactdetail` (`fname`,`mobile`,`email`,`messgae`,`date`,`time`,`status`) VALUES (
            '".$_POST["full_name"]."','".$_POST["phone_number"]."','".$_POST["email_address"]."',
            '".$_POST["message"]."','".$_POST["date"]."','".$_POST["time"]."','1')";
        $conn->query($insert);
        echo '<meta http-equiv="refresh" content="0; url=../../property-detail?id='.$_POST["pid"].'&msg">';
    }
?>