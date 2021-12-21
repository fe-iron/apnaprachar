<?php
    include("../connection.php");
    $conn = OpenCon();
    if(isset($_POST['this_id'])){
        $this_id = $_POST['this_id'];
        $this_page = $_POST['page_id'];

        $query = "UPDATE book_services SET status=1 WHERE id=".$this_id;

        if ($conn->query($query) === TRUE) {
            // echo $this_page;
            header("Location: ".$this_page);
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    CloseCon($conn);
?>