<?php

include("config.php");
if(isset($_POST['input'])){
    $input=$_POST['input'];
    $query= "SELECT * FROM searchperson WHERE location LIKE '{$input}%' ";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result) > 0){
        ?>
      <table class="table table-bordered table-striped mt-4">
          <thread>
              <tr>
                  <th>id </th>
                  <th>name</th>
                  <th>location</th>
                  <th>officecontact</th>
                  <th>personalcontact</th>
                  <th>email</th>
                  <th>pickup</th>
              </tr>
          </thread>
          <tbody>
              <?php
                 while($row = mysqli_fetch_assoc($result)){
                  $id=$row['id'];
                  $name=$row['name'];
                  $location=$row['location'];
                  $officecontact=$row['officecontact'];
                  $personalcontact=$row['personalcontact'];
                  $email=$row['email'];
                  $pickup=$row['pickup'];
              ?>
                <tr>
                   <td><?php echo $id;?></td>
                   <td><?php echo $name;?></td>
                   <td><?php echo $location;?></td>
                   <td><?php echo $officecontact;?></td>
                   <td><?php echo $personalcontact;?></td>
                   <td><?php echo $email;?></td>
                   <td><a href="request.php">request pick up</a></td>
                </tr>
              <?php
              }
              ?>
          </tbody>
      </table>
      <?php
    }else{
        echo "<h6 class='text-danger text-center mt-3'>NO data found</h6>";
    }
}
?>