<?php 


include '../config/db.php';


$sql = "SELECT * FROM users";
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);


if ($count > 0) {
    
    while($row = mysqli_fetch_assoc($query)){
        
        $no = 1;
        $name = $row['name'];
        $id = $row['id'];
        $email = $row['email'];
        $is_created = $row['is_created'];

        
        echo    "<tr>";
        echo        "<td>". $id ."</td>";
        echo        "<td>". $name ."</td>";
        echo        "<td>". $email ."</td>";
        echo        "<td>". $is_created ."</td>";
        echo        "<td>
                        <button onClick='deleteRequest($id)' class='delete_btn'>delete</button>
                    </td>";
        echo    "</tr>";

    }
}


$conn->close();
?>