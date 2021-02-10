
<?php
            if(isset($_GET['info'])){
              $id = $_GET['info'];
            }
            $db= new mysqli("localhost", "root", "", "mysqliquery"); 
            $sql = "SELECT * FROM towns";
            $data=$db->query($sql);
            ?>

            <style>
              table,td,th,tr{
                border: 1px solid;
                border-collapse: collapse;
              }
            </style>

<div class="col-lg-12">
        <table >
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Town name</th>
              <th scope="col">town info</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($rows=$data->fetch_assoc()) {
              ?>
            
            <tr>
              <td><?php echo $rows['town_id']; ?></td>
              <td><?php echo $rows['townname']; ?></td>
              <td><?php echo $rows['towninfo']; ?></td>
            </tr>
            <?php 
            } ?>


          </tbody>
        </table>
      </div>