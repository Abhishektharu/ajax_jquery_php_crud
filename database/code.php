<?php

$conn = mysqli_connect("localhost","root","","phpcrud");

if(isset($_POST['checking_add']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $class = $_POST['class'];
    $section = $_POST['section'];

    $query = "INSERT INTO student (fname,lname,email,class,section) VALUES ('$fname','$lname','$email','$class','$section')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo $return  = "Successfully Stored";
    }
    else
    {
        echo $return  = "Something Went Wrong.!";
    }
}
if (isset($_POST['checking_view'])) {
    // echo $return = 'hello';
    $student_id = $_POST['student_id'];
    $result_array  = [];


    $query = "SELECT * FROM student WHERE id = '$student_id'";
    $query_run = mysqli_query($conn, $query);
    if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $row){
            array_push($result_array, $row);
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    }
    else{
        echo $return = "no data found!";
    }
}

//to edit the data
if(isset($_POST['checking_edit'])){
    $student_id = $_POST['student_id'];
    $result_array  = [];


    $query = "SELECT * FROM student WHERE id = '$student_id'";
    $query_run = mysqli_query($conn, $query);
    if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $row){
            array_push($result_array, $row);
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    }
    else{
        echo $return = "no data found!";
    }
}

if(isset($_POST['checking_update']))
{
    
    $id = $_POST['student_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $class = $_POST['class'];
    $section = $_POST['section'];

    $query = "UPDATE student SET fname = '$fname', lname = '$lname', email = '$email', class = '$class', section='$section' where id = '$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo $return  = "Successfully Stored";
    }
    else
    {
        echo $return  = "Something Went Wrong.!";
    }
}

if(isset($_POST['checking_delete'])){
    $id = $_POST['student_id'];

    $query = "DELETE FROM student WHERE id = '$id'";

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo $return  = "Successfully deleted";
    }
    else
    {
        echo $return  = "Something Went Wrong.!";
    }

}
?>