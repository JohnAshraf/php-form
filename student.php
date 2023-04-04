<html>
<body>
<?php
$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
];
?>
<h1>Application name : PHP class registration</h1>
    <table border=1px width=500px>
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
        </thead>
      <tbody>
      <?php
      for($i = 0; $i< count($students); $i++){
                if($students[$i]['status'] == 'CMS'){
                    echo "<tr style='color: red;text-align:center'>".
                    "<td>".$students[$i]['name']."</td>".
                    "<td>". $students[$i]['email']."</td>".
                    "<td>". $students[$i]['status'] ."</td>".
                    "</tr>";
                }else{
                    echo "<tr style='text-align:center'>".
                    "<td>".$students[$i]['name']."</td>".
                    "<td>". $students[$i]['email']."</td>".
                    "<td>". $students[$i]['status'] ."</td>".
                    "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
    </body>
</html>