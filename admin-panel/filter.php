<?php 
    include '../connection.php';
    $conn = OpenCon();
    $q = $_GET['q'];
    $type = $_GET['p'];
    $page = $_GET['page'];

    if($type == "date"){
        $sql="SELECT * FROM book_services WHERE date<='".$q."' AND service_for='".$page."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            $text = '';
            $i = 0;
            if($page == "video"){
              while($row = $result->fetch_assoc()) {
                $i += 1;
                        $date = str_replace("-", "/", $row['date']);
                        $text= $text. '<tr class="border-bottom">
                        <td class="border-right border-left text-center">'.$i.'</td>
                        <td class="border-right border-left text-center">'.$date.'</td>';
                if($row['status']){
                  $text= $text. '<td class="border-right border-left text-center"><a class="btn btn-primary">Completed</a></td>';                              
                }else{
                  $text= $text. '<td class="border-right border-left text-center"><a href="#" class="btn btn-sm btn-info" onclick="complete('.$row['id'].', `short_video.php`);">Processing</a></td>';
                }

                $text= $text. '<td class="border-right text-center">'.$row['name'].'</td>
                <td class="border-right text-center">'.$row['mobile'].'</td>
                <td class="border-right text-center">'.$row['email'].'</td>
                <td class="border-right text-center">'.$row['occasion'].'</td>
                <td class="border-right text-center"><a href="upload/'.$row['pictures'].'">'.$row['pictures'].'</a></td>
                <td class="border-right text-center"><a href="upload/videos/'.$row['video'].'">'.$row['video'].'</a></td>
                <td class="border-right text-center">'.$row['description'].'</td>
                <td class="border-right text-center">'.$row['payment_id'].'</td>
                <td class="border-right text-center">&#8377;'.$row['service_price'].'</td>
                </tr> ';
              }
            }else if($page == "documentary"){
              while($row = $result->fetch_assoc()) {
                $i += 1;
                $date = str_replace("-", "/", $row['date']);
                        $text= $text. '<tr class="border-bottom">
                        <td class="border-right border-left text-center">'.$i.'</td>
                        <td class="border-right border-left text-center">'.$date.'</td>';

                if($row['status']){
                  $text= $text. '<td class="border-right border-left text-center"><a class="btn btn-primary">Completed</a></td>';                              
                }else{
                  $text= $text. '<td class="border-right border-left text-center"><a href="#" class="btn btn-sm btn-info" onclick="complete('.$row['id'].', `documentary_video.php`);">Processing</a></td>';
                }
                $text= $text. '<td class="border-right text-center">'.$row['name'].'</td>
                <td class="border-right text-center">'.$row['mobile'].'</td>
                <td class="border-right text-center">'.$row['email'].'</td>
                <td class="border-right text-center">'.$row['description'].'</td>
                <td class="border-right text-center">&#8377;'.$row['service_price'].'</td>
                </tr> ';
              }
            }else if($page == "print media" || $page == "news channel" || $page == "youtube news" ||$page == "facebook news"
                      || $page == "facebook Sponsored Post" || $page == "instagram sponsored post" || $page == "youtube advertisement"
                        || $page == "google advertisement" || $page == "Increase Facebook Page Likes" || $page == "Increase instagram followers"
                        || $page == "verify social account"){
                while($row = $result->fetch_assoc()) {
                            $i += 1;
                                  $date = str_replace("-", "/", $row['date']);
                                  $text= $text. '<tr class="border-bottom">
                                  <td class="border-right border-left text-center">'.$i.'</td>
                                  <td class="border-right border-left text-center">'.$date.'</td>';
      
                            if($row['status']){
                              $text= $text. '<td class="border-right border-left text-center"><a class="btn btn-primary">Completed</a></td>';                              
                            }else{
                              $text= $text. '<td class="border-right border-left text-center"><a href="#" class="btn btn-sm btn-info" onclick="complete('.$row['id'].', `advertisement.php`);">Processing</a></td>';
                            }
      
                            $text= $text. '<td class="border-right text-center">'.$row['name'].'</td>
                            <td class="border-right text-center">'.$row['mobile'].'</td>
                            <td class="border-right text-center">'.$row['email'].'</td>
                            <td class="border-right text-center">'.$row['description'].'</td>';
      
                            if($page == "facebook Sponsored Post" || $page == "instagram sponsored post" || $page == "youtube advertisement" || $page == "google advertisement"){
                              $text = $text .'<td class="border-right text-center">'.$row['payment_id'].'</td>
                              <td class="border-right text-center">&#8377;'.$row['service_price'].'</td>';
                            }
                            $text = $text.'</tr> ';
                  }
            }else if($page == "web development"){
              while($row = $result->fetch_assoc()) {
                $i += 1;
                $date = str_replace("-", "/", $row['date']);
                $text= $text. '<tr class="border-bottom">
                <td class="border-right border-left text-center">'.$i.'</td>
                <td class="border-right border-left text-center">'.$date.'</td>';

                if($row['status']){
                  $text= $text. '<td class="border-right border-left text-center"><a class="btn btn-primary">Completed</a></td>';                              
                }else{
                  $text= $text. '<td class="border-right border-left text-center"><a href="#" class="btn btn-sm btn-info" onclick="complete('.$row['id'].', `web_development.php`);">Processing</a></td>';
                }

                $text= $text. '<td class="border-right text-center">'.$row['name'].'</td>
                  <td class="border-right text-center">'.$row['mobile'].'</td>
                  <td class="border-right text-center">'.$row['email'].'</td>
                  <td class="border-right text-center">'.$row['description'].'</td>
                </tr> ';
              }
            }else if($page == "app development"){
              while($row = $result->fetch_assoc()) {
                $i += 1;
                $date = str_replace("-", "/", $row['date']);
                $text= $text. '<tr class="border-bottom">
                <td class="border-right border-left text-center">'.$i.'</td>
                <td class="border-right border-left text-center">'.$date.'</td>';

                if($row['status']){
                  $text= $text. '<td class="border-right border-left text-center"><a class="btn btn-primary">Completed</a></td>';                              
                }else{
                  $text= $text. '<td class="border-right border-left text-center"><a href="#" class="btn btn-sm btn-info" onclick="complete('.$row['id'].', `app_development.php`);">Processing</a></td>';
                }

                $text= $text. '<td class="border-right text-center">'.$row['name'].'</td>
                  <td class="border-right text-center">'.$row['mobile'].'</td>
                  <td class="border-right text-center">'.$row['email'].'</td>
                  <td class="border-right text-center">'.$row['description'].'</td>
                </tr> ';
              }
            }else{
              while($row = $result->fetch_assoc()) {
                  $i += 1;
                  $date = str_replace("-", "/", $row['date']);
                  $text= $text. '<tr class="border-bottom">
                  <td class="border-right border-left text-center">'.$i.'</td>
                  <td class="border-right border-left text-center">'.$date.'</td>';

                  if($row['status']){
                    $text= $text. '<td class="border-right border-left text-center"><a class="btn btn-primary">Completed</a></td>';                              
                  }else{
                    $text= $text. '<td class="border-right border-left text-center"><a href="#" class="btn btn-sm btn-info" onclick="complete('.$row['id'].', `graphics_design_table.php`);">Processing</a></td>';
                  }

                  $text= $text. '<td class="border-right text-center">'.$row['name'].'</td>
                    <td class="border-right text-center">'.$row['mobile'].'</td>
                    <td class="border-right text-center">'.$row['email'].'</td>
                    <td class="border-right text-center">'.$row['belong'].'</td>
                    <td class="border-right text-center">'.$row['occasion'].'</td>
                    <td class="border-right text-center"><a href="upload/'.$row['pictures'].'">'.$row['pictures'].'</a></td>
                    <td class="border-right text-center"><a href="upload/'.$row['belonging_pictures1'].'">'.$row['belonging_pictures1'].'</a></td>
                    <td class="border-right text-center">'.$row['description'].'</td>
                    <td class="border-right text-center">'.$row['payment_id'].'</td>
                    <td class="border-right text-center">&#8377;'.$row['service_price'].'</td>
                  </tr>';
              }
            }
            echo $text;
        }
    }else{
        $sql="SELECT * FROM book_services WHERE status='".$q."' AND service_for='".$page."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            $text = '';
            $i = 0;
            if($page == "video"){
              while($row = $result->fetch_assoc()) {
                $i += 1;
                        $date = str_replace("-", "/", $row['date']);
                        $text= $text. '<tr class="border-bottom">
                        <td class="border-right border-left text-center">'.$i.'</td>
                        <td class="border-right border-left text-center">'.$date.'</td>';
                if($row['status']){
                  $text= $text. '<td class="border-right border-left text-center"><a class="btn btn-primary">Completed</a></td>';                              
                }else{
                  $text= $text. '<td class="border-right border-left text-center"><a href="#" class="btn btn-sm btn-info" onclick="complete('.$row['id'].', `short_video.php`);">Processing</a></td>';
                }

                $text= $text. '<td class="border-right text-center">'.$row['name'].'</td>
                <td class="border-right text-center">'.$row['mobile'].'</td>
                <td class="border-right text-center">'.$row['email'].'</td>
                <td class="border-right text-center">'.$row['occasion'].'</td>
                <td class="border-right text-center"><a href="upload/'.$row['pictures'].'">'.$row['pictures'].'</a></td>
                <td class="border-right text-center"><a href="upload/videos/'.$row['video'].'">'.$row['video'].'</a></td>
                <td class="border-right text-center">'.$row['description'].'</td>
                <td class="border-right text-center">'.$row['payment_id'].'</td>
                <td class="border-right text-center">&#8377;'.$row['service_price'].'</td>
                </tr> ';
              }
            }else if($page == "documentary"){
              while($row = $result->fetch_assoc()) {
                $i += 1;
                $date = str_replace("-", "/", $row['date']);
                        $text= $text. '<tr class="border-bottom">
                        <td class="border-right border-left text-center">'.$i.'</td>
                        <td class="border-right border-left text-center">'.$date.'</td>';

                if($row['status']){
                  $text= $text. '<td class="border-right border-left text-center"><a class="btn btn-primary">Completed</a></td>';                              
                }else{
                  $text= $text. '<td class="border-right border-left text-center"><a href="#" class="btn btn-sm btn-info" onclick="complete('.$row['id'].', `documentary_video.php`);">Processing</a></td>';
                }
                $text= $text. '<td class="border-right text-center">'.$row['name'].'</td>
                <td class="border-right text-center">'.$row['mobile'].'</td>
                <td class="border-right text-center">'.$row['email'].'</td>
                <td class="border-right text-center">'.$row['description'].'</td>
                <td class="border-right text-center">&#8377;'.$row['service_price'].'</td>
                </tr> ';
              }
            }else if($page == "print media" || $page == "news channel" || $page == "youtube news" ||$page == "facebook news"
            || $page == "facebook Sponsored Post" || $page == "instagram sponsored post" || $page == "youtube advertisement"
              || $page == "google advertisement" || $page == "Increase Facebook Page Likes" || $page == "Increase instagram followers"
              || $page == "verify social account"){
                while($row = $result->fetch_assoc()) {
                            $i += 1;
                                  $date = str_replace("-", "/", $row['date']);
                                  $text= $text. '<tr class="border-bottom">
                                  <td class="border-right border-left text-center">'.$i.'</td>
                                  <td class="border-right border-left text-center">'.$date.'</td>';

                            if($row['status']){
                              $text= $text. '<td class="border-right border-left text-center"><a class="btn btn-primary">Completed</a></td>';                              
                            }else{
                              $text= $text. '<td class="border-right border-left text-center"><a href="#" class="btn btn-sm btn-info" onclick="complete('.$row['id'].', `advertisement.php`);">Processing</a></td>';
                            }

                            $text= $text. '<td class="border-right text-center">'.$row['name'].'</td>
                            <td class="border-right text-center">'.$row['mobile'].'</td>
                            <td class="border-right text-center">'.$row['email'].'</td>
                            <td class="border-right text-center">'.$row['description'].'</td>';

                            if($page == "facebook Sponsored Post" || $page == "instagram sponsored post" || $page == "youtube advertisement" || $page == "google advertisement"){
                              $text = $text .'<td class="border-right text-center">'.$row['payment_id'].'</td>
                              <td class="border-right text-center">&#8377;'.$row['service_price'].'</td>';
                            }
                            $text = $text.'</tr> ';
                  }
            
            }else if($page == "web development"){
              while($row = $result->fetch_assoc()) {
                $i += 1;
                $date = str_replace("-", "/", $row['date']);
                $text= $text. '<tr class="border-bottom">
                <td class="border-right border-left text-center">'.$i.'</td>
                <td class="border-right border-left text-center">'.$date.'</td>';

                if($row['status']){
                  $text= $text. '<td class="border-right border-left text-center"><a class="btn btn-primary">Completed</a></td>';                              
                }else{
                  $text= $text. '<td class="border-right border-left text-center"><a href="#" class="btn btn-sm btn-info" onclick="complete('.$row['id'].', `web_development.php`);">Processing</a></td>';
                }

                $text= $text. '<td class="border-right text-center">'.$row['name'].'</td>
                  <td class="border-right text-center">'.$row['mobile'].'</td>
                  <td class="border-right text-center">'.$row['email'].'</td>
                  <td class="border-right text-center">'.$row['description'].'</td>
                </tr> ';
            }
            }else if($page == "app development"){
              while($row = $result->fetch_assoc()) {
                $i += 1;
                $date = str_replace("-", "/", $row['date']);
                $text= $text. '<tr class="border-bottom">
                <td class="border-right border-left text-center">'.$i.'</td>
                <td class="border-right border-left text-center">'.$date.'</td>';

                if($row['status']){
                  $text= $text. '<td class="border-right border-left text-center"><a class="btn btn-primary">Completed</a></td>';                              
                }else{
                  $text= $text. '<td class="border-right border-left text-center"><a href="#" class="btn btn-sm btn-info" onclick="complete('.$row['id'].', `app_development.php`);">Processing</a></td>';
                }

                $text= $text. '<td class="border-right text-center">'.$row['name'].'</td>
                  <td class="border-right text-center">'.$row['mobile'].'</td>
                  <td class="border-right text-center">'.$row['email'].'</td>
                  <td class="border-right text-center">'.$row['description'].'</td>
                </tr> ';
              }
            }else{
              while($row = $result->fetch_assoc()) {
                  $i += 1;
                  $date = str_replace("-", "/", $row['date']);
                  $text= $text. '<tr class="border-bottom">
                  <td class="border-right border-left text-center">'.$i.'</td>
                  <td class="border-right border-left text-center">'.$date.'</td>';

                  if($row['status']){
                    $text= $text. '<td class="border-right border-left text-center"><a class="btn btn-primary">Completed</a></td>';                              
                  }else{
                    $text= $text. '<td class="border-right border-left text-center"><a href="#" class="btn btn-sm btn-info" onclick="complete('.$row['id'].', `graphics_design_table.php`);">Processing</a></td>';
                  }

                  $text= $text. '<td class="border-right text-center">'.$row['name'].'</td>
                    <td class="border-right text-center">'.$row['mobile'].'</td>
                    <td class="border-right text-center">'.$row['email'].'</td>
                    <td class="border-right text-center">'.$row['belong'].'</td>
                    <td class="border-right text-center">'.$row['occasion'].'</td>
                    <td class="border-right text-center"><a href="upload/'.$row['pictures'].'">'.$row['pictures'].'</a></td>
                    <td class="border-right text-center"><a href="upload/'.$row['belonging_pictures1'].'">'.$row['belonging_pictures1'].'</a></td>
                    <td class="border-right text-center">'.$row['description'].'</td>
                    <td class="border-right text-center">'.$row['payment_id'].'</td>
                    <td class="border-right text-center">&#8377;'.$row['service_price'].'</td>
                  </tr>';
              }
            }
            echo $text;
        }
    }
?>
