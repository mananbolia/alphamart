<?php
            $dbcon=mysqli_connect("localhost","root","");
            if($dbcon){
                mysqli_select_db($dbcon,'database');
            }
            else{
                die("Error! Could not connect");
            }
            $query="SELECT * FROM state WHERE countryID = '" . $_POST["country_id"] . "'";
            $result = mysqli_query($dbcon,$query);
            while($row=mysqli_fetch_assoc($result)) {
              $resultset[] = $row;
            }
            $results=$resultset;
?><option value disabled selected>Select State</option>
<?php
    foreach ($results as $state) {
        ?>
<option value="<?php echo $state["id"]; ?>"><?php echo $state["name"]; ?></option>
<?php
    }
?>