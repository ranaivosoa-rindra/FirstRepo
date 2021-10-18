<?php 
    include("connection.php");
    try{
        $sql = "SELECT * FROM student";

        $q = $conn->query($sql);
        // $q->setFetchMode(PDO::FETCH_ASSOC);    
    } catch (PDOException $e)
    {
        die("Could not connect to the database $dbname : " . $e->getMessage());
    }
?>
<?php while($row = $q->fetch()): ?>
<tr>
    <td><?php echo htmlspecialchars($row['id']); ?></td>
     <td><?php echo htmlspecialchars($row['firstName']); ?></td>
     <td><?php echo htmlspecialchars($row['lastName']); ?></td>
     <td><?php echo htmlspecialchars($row['dateOfBirth']); ?></td>
     <td><?php echo htmlspecialchars($row['status']); ?></td>
     <td><?php echo htmlspecialchars($row['description']); ?></td>
     <td><?php echo htmlspecialchars($row['schooling']); ?></td>
</tr>
<?php endwhile; ?>