<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';


/*
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

$stmt = $conn->query("SELECT * FROM countries");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<ul>
<?php foreach ($results as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>
*/





$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$country = $_GET['country'];
?>

<?php 
/*

if ($country == ""):

    $stmt = $conn->query("SELECT * FROM countries");

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    <ul>
    <?php foreach ($results as $row): ?>
      <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
    <?php endforeach; ?>
    </ul>
<?php endif ?>

<?php if($country != ""):
    $stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    //var_dump($results);
    echo $results['name'] . ' is ruled by ' . $results['head_of_state'];
    

?>
<?php endif 

?>

<?php

if ($country == ""):

    $stmt = $conn->query("SELECT * FROM countries");

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    <ul>
    <?php foreach ($results as $row): ?>
      <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
    <?php endforeach; ?>
    </ul>
<?php endif ?>

<?php if($country != ""):
    $stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($results);
    //echo $results['name'] . ' is ruled by ' . $results['head_of_state'];
    ?>
    <ul>
    <?php foreach ($results as $row): ?>
      <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
    <?php endforeach; ?>
    </ul>

<?php endif ?>
*/
?>

<?php 

if ($country == ""):

    $stmt = $conn->query("SELECT * FROM countries");

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
  <table>
  <thead>
    <tr>
      <th>Country Name</th>
      <th>Continent</th>
      <th>Independence Year</th>
      <th>Head of State</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($results as $row): ?>
      <tr>
        <td><?= $row['name']; ?></td>
        <td><?= $row['continent']; ?></td>
        <td><?= $row['independence_year']; ?></td>
        <td><?= $row['head_of_state']; ?></td>
      </tr>
    <?php endforeach; ?>
 </tbody>
</table> 
    <?php endif ?>

    <?php if($country != ""):
      $stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
      <table>
      <thead>
        <tr>
          <th>Country Name</th>
          <th>Continent</th>
          <th>Independence Year</th>
          <th>Head of State</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($results as $row): ?>
          <tr>
            <td><?= $row['name']; ?></td>
            <td><?= $row['continent']; ?></td>
            <td><?= $row['independence_year']; ?></td>
            <td><?= $row['head_of_state']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
</table> 

    <?php endif ?>




