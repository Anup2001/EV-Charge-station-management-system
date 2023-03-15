<table class="table table-hover table-bordered table-dark">
  <thead>
  <tr>
    <th scope="col">Registered Number</th>
    <th scope="col">Billing Place</th>
    <th scope="col">Duration</th>
    <th scope="col">Date</th>
    <th scope="col">Amount</th>
    <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    <?php
      include '_dbconnect.php';
      $mobile = $_SESSION["mobile"];
      $res = mysqli_query($conn,"SELECT * FROM `2wheeler` Where `mobile`=$mobile ORDER BY `sl no.` DESC limit 5");
      $rows = mysqli_num_rows($res);
      if($rows !=0){
        while($Bill = mysqli_fetch_assoc($res)){
    
          echo "
          <tr>
          <td> ".$Bill['mobile']." </td>
          <td> ".$Bill['place']." </td>
          <td> ".$Bill['charge_time']."</td>
          <td> ".$Bill['date']." </td>
          <td> ".$Bill['bill']."</td>
          <td> ".$Bill['status']."</td>
          </tr>"; 
          
      
        }
        
      }
    
    ?>
    <?php mysqli_close($conn);?>
  </tbody>
</table>


