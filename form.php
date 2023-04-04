<?php
$nameErr = $emailErr = $genderErr  = $checkErr = "";
$name = $email = $gender = $group = $classdet = $check = "";
$courses = [];
if (!empty($_GET["submit"])){
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_GET["name"]);
  }
  
  if (empty($_GET["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_GET["email"]);
  }
    
  if (empty($_GET["classdet"])) {
    $website = "";
  } else {
    $classdet = test_input($_GET["classdet"]);
  }

  if (empty($_GET["group"])) {
    $group = "";
  } else {
    $group = test_input($_GET["group"]);
  }

//   if (empty($_GET["courses[]"])) {
//     $courses = [];
//   } else {
//     $courses = $_GET["courses"];
//     foreach($courses as $key=>$value){
//         echo $value ." ,";}
//   }
  if (empty($_GET["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_GET["gender"]);
  }
  if (empty($_GET["check"])) {
    $checkErr = "You must agree";
  } else {
    $check = test_input($_GET["check"]);
}
}}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<html>
<body>
    <table >
        <thead>
            <th colspan="5" style="text-align: left;">
                <h1>Application name:AAST_BIS class registration</h1>
                <h2 style="color: red"> *Required fields </h2>
            </th>
        </thead>
        <tbody>
        <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                <tr>
                    <td>Name:</td>
                    <td colspan="2"><input type="text" name="name" /><span style="color: red;"> *<?php echo $nameErr;?></span> </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td colspan="2"><input type="email" name="email" /><span style="color: red;"> *<?php echo $emailErr;?></span></td>
                </tr>
                <tr>
                    <td>Group#:</td>
                    <td colspan="2"><input type="text" name="group" /></td>
                </tr>
                <tr>
                    <td>class details:</td>
                    <td><textarea row="5" cols="50" name="classdet"></textarea></td>
                </tr>
                <tr>
                    <td>gender:</td>
                    <td colspan="2"><input type="radio" name="gender" value="male" />Male
                        <input type="radio" name="gender" value="female" />Female
                        <span style="color: red;"> *<?php echo $genderErr;?></span>
                    </td>
                </tr>
                <tr>
                    <td>select course</td>
                    <td>
                        <select name="courses[]" id="courses" multiple size="4">
                            <option value="Html">HTML</option>
                            <option value="css">CSS</option>
                            <option value="javascript">Javascript</option>
                            <option value="php">Php</option>
                            <option value="wordpress">WordPress</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Agree</td>
                    <td><input type="checkbox" name="check"/><span style="color: red;"> *<?php echo $checkErr;?></span></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit">
                    </td>
                </tr>
            </form>
        </tbody>
    </table>
</body>
</html>
<?php
  echo "<b>Your given values are as:</b>";
  echo "<b>Name:</b> ". $name. "<br/>";
  echo "<b>Email:  </b>". $email. "<br/>";
  echo "<b>class details: </b>".$classdet."<br/>";
  echo "<b>Group#: </b>".$group."<br/>";
  echo "<b>Gender: </b>".$gender."<br/>";
  echo "<b>Courses: </b>";
  $courses = $_GET["courses"];
  foreach($courses as $key=>$value){
    echo $value ." ";}
  ?>