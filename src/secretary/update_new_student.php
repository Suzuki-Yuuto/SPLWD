<?php
include('../connect.php');
include('../session.php');
if (isset($_POST['submit'])) {
  $lrn = $_GET['id'];
  $folder_id = $_GET['folder_id'];
  $type = 1;
  while ($type <= 25) {
    $type1 = $_POST['1' . $type];
    $sql = "UPDATE `progress_report` SET `q1` = '" . $_POST['1' . $type . 'q1'] . "', `q2` = '" . $_POST['1' . $type . 'q2'] . "', `q3` = '" . $_POST['1' . $type . 'q3'] . "', `q4` = '" . $_POST['1' . $type . 'q4'] . "' WHERE type = '$type1' and folder_id= $folder_id and  lrn = $lrn and progress_index=1;";
    if ($conn->query($sql) === TRUE) {
      echo "<p>1" . $type . "</p>";
    }
    $type++;
  }
  $type = 1;
  while ($type <= 20) {
    $type2 = $_POST['2' . $type];
    $sql = "UPDATE `progress_report` SET `q1` = '" . $_POST['2' . $type . 'q1'] . "', `q2` = '" . $_POST['2' . $type . 'q2'] . "', `q3` = '" . $_POST['2' . $type . 'q3'] . "', `q4` = '" . $_POST['2' . $type . 'q4'] . "' WHERE type = '$type2' and folder_id= $folder_id and lrn = $lrn and progress_index=2;";
    if ($conn->query($sql) === TRUE) {
      echo "<p>1" . $type . "</p>";
    }
    $type++;
  }
  $type = 1;
  while ($type <= 18) {
    $type3 = $_POST['3' . $type];
    $sql = "UPDATE `progress_report` SET `q1` = '" . $_POST['3' . $type . 'q1'] . "', `q2` = '" . $_POST['3' . $type . 'q2'] . "', `q3` = '" . $_POST['3' . $type . 'q3'] . "', `q4` = '" . $_POST['3' . $type . 'q4'] . "' WHERE type = '$type3' and folder_id= $folder_id and lrn = $lrn and progress_index=3;";
    if ($conn->query($sql) === TRUE) {
      echo "<p>1" . $type . "</p>";
    }
    $type++;
  }
  $type = 1;
  while ($type <= 23) {
    $type4 = $_POST['4' . $type];
    $sql = "UPDATE `progress_report` SET `q1` = '" . $_POST['4' . $type . 'q1'] . "', `q2` = '" . $_POST['4' . $type . 'q2'] . "', `q3` = '" . $_POST['4' . $type . 'q3'] . "', `q4` = '" . $_POST['4' . $type . 'q4'] . "' WHERE type = '$type4' and folder_id= $folder_id and lrn = $lrn and progress_index=4;";
    if ($conn->query($sql) === TRUE) {
      echo "<p>1" . $type . "</p>";
    }
    $type++;
  }
  $type = 1;
  while ($type <= 23) {
    $type5 = $_POST['5' . $type];
    $sql = "UPDATE `progress_report` SET `q1` = '" . $_POST['5' . $type . 'q1'] . "', `q2` = '" . $_POST['5' . $type . 'q2'] . "', `q3` = '" . $_POST['5' . $type . 'q3'] . "', `q4` = '" . $_POST['5' . $type . 'q4'] . "' WHERE type = '$type5' and folder_id= $folder_id and lrn = $lrn and progress_index=5;";
    if ($conn->query($sql) === TRUE) {
      echo "<p>1" . $type . "</p>";
    }
    $type++;
  }
  $type = 1;
  while ($type <= 21) {
    $type6 = $_POST['6' . $type];
    $sql = "UPDATE `progress_report` SET `q1` = '" . $_POST['6' . $type . 'q1'] . "', `q2` = '" . $_POST['6' . $type . 'q2'] . "', `q3` = '" . $_POST['6' . $type . 'q3'] . "', `q4` = '" . $_POST['6' . $type . 'q4'] . "' WHERE type = '$type6' and folder_id= $folder_id and lrn = $lrn and progress_index=6;";
    if ($conn->query($sql) === TRUE) {
      echo "<p>1" . $type . "</p>";
    }
    $type++;
  }
  header('location:student_file.php?id=' . $lrn . '&folder_id=' . $_GET['folder_id']);
  $conn->close();
}
