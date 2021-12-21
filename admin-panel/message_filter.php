<?php 
    include '../connection.php';
    $conn = OpenCon();
    $q = $_GET['q'];
    $type = $_GET['p'];
    $page = $_GET['page'];

    if($type == "date"){
        $sql="SELECT * FROM message_calls WHERE date<='".$q."' AND service_for='".$page."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            $text = '';
            $i = 0;
            while($row = $result->fetch_assoc()) {
                $i += 1;
                $date = str_replace("-", "/", $row['date']);
                        $text= $text. '<tr class="border-bottom">
                        <td class="border-right border-left text-center">'.$i.'</td>
                        <td class="border-right border-left text-center">'.$date.'</td>';


                if($row['status']){
                  $text= $text. '<td class="border-right border-left text-center"><a class="btn btn-primary">Completed</a></td>';                              
                }else{
                  $text= $text. '<td class="border-right border-left text-center"><a href="#" class="btn btn-sm btn-info" onclick="my_complete('.$row['id'].', `bulk_message.php`);">Processing</a></td>';
                }

                $text= $text. '<td class="border-right text-center">'.$row['name'].'</td>
                <td class="border-right text-center">'.$row['mobile'].'</td>
                <td class="border-right text-center">'.$row['email'].'</td>
                <td class="border-right text-center">'.$row['no_of_message'].'</td>
                <td class="border-right text-center">'.$row['msg_character'].'</td>
                <td class="border-right text-center">'.$row['description'].'</td>
                </tr> ';
            }
            echo $text;
        }
    }else{
        $sql="SELECT * FROM message_calls WHERE status='".$q."' AND service_for='".$page."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            $text = '';
            $i = 0;
            while($row = $result->fetch_assoc()) {
                $i += 1;
                $date = str_replace("-", "/", $row['date']);
                        $text= $text. '<tr class="border-bottom">
                        <td class="border-right border-left text-center">'.$i.'</td>
                        <td class="border-right border-left text-center">'.$date.'</td>';


                if($row['status']){
                  $text= $text. '<td class="border-right border-left text-center"><a class="btn btn-primary">Completed</a></td>';                              
                }else{
                  $text= $text. '<td class="border-right border-left text-center"><a href="#" class="btn btn-sm btn-info" onclick="my_complete('.$row['id'].', `bulk_message.php`);">Processing</a></td>';
                }

                $text= $text. '<td class="border-right text-center">'.$row['name'].'</td>
                <td class="border-right text-center">'.$row['mobile'].'</td>
                <td class="border-right text-center">'.$row['email'].'</td>
                <td class="border-right text-center">'.$row['no_of_message'].'</td>
                <td class="border-right text-center">'.$row['msg_character'].'</td>
                <td class="border-right text-center">'.$row['description'].'</td>
                </tr> ';
            }
            echo $text;
        }
    }
?>
