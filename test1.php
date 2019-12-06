<?php 
$host = "127.0.0.1";
$user = "root";
$passwd = "";
$dbname = "practice";
$conn = mysqli_connect($host, $user, $passwd, $dbname);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "select EMPNO, ENAME, JOB, DNAME from emp inner Join  dept on emp.DEPTNO = dept.DEPTNO";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> HTML5 เบื่องต้น </title>
    <!--this is ccomment section.-->
</head>

<body>
    <div>
        <h2>Hello world</h2>
    </div>
    <table border="1">
        <tr>
            <th> รหัสพนักงาน </th>
            <th> ชื่อ - นามสกุล</th>
            <th>ตำแหน่ง</th>
            <th>แผนก</th>
        </tr>
        <?php 
            if (mysqli_num_rows($result) > 0) {

                while($row = mysqli_fetch_assoc($result)) {?>
            
        <tr>
            <td><?php echo $row['EMPNO'] ?></td>
            <td><?php echo $row['ENAME']?></td>
            <td><?php echo $row['JOB']?></td>
            <td><?php echo $row['DNAME']?></td>
           
        </tr>
    <?php } //end loop
    }?> 
    </table>
</body>

<html>
