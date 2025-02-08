<?php
session_start();
include '../model/dbconnect.php';
$ticket_no = rand(1000000,9999999);
$source = $_POST['source'];
$destination = $_POST['destination'];
$no_passanger = $_POST['no_passanger'];
$date = $_POST['date'];

echo $ticket_no, $source, $destination, $no_passanger, $date;


$selected_train = "SELECT `train_no`,`reservation` FROM `traindetails` WHERE `reservation`<50 limit 1";
$selected_train_result = mysqli_query($conn, $selected_train);
$selected_train_row = mysqli_fetch_assoc($selected_train_result);


$train_id = $selected_train_row['train_no'];
$reservation = $selected_train_row['reservation'];
$reservation = $reservation + $no_passanger;
$ticket_insert = "INSERT INTO `ticket`(`ticket_no`, `train_no`, `source`, `destination`, `no_passanger`, `date`) VALUES ('$ticket_no','$train_id','$source','$destination','$no_passanger','$date')";
$ticket_insert_result = mysqli_query($conn, $ticket_insert);


$update_passanger_for_ticket = "UPDATE `passanger` SET `ticket_no`='$ticket_no' WHERE `email`='$_SESSION[email]'";
$update_passanger_for_ticket_result = mysqli_query($conn, $update_passanger_for_ticket);


$train_update = "UPDATE `traindetails` SET `reservation`='$reservation' WHERE `train_no`='$train_id'";
$train_update_result = mysqli_query($conn, $train_update);

if($ticket_insert_result && $train_update_result){
    echo "Ticket Booked";
}
else{
    echo "Ticket Not Booked";
}



?>