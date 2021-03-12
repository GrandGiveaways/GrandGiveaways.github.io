<?php

class Influencer {
  public $username;
  public $email;
  public $name;
  public $description;

  public function __construct($username, $email, $name, $description) {
    $this->username = $username;
    $this->email = $email;
    $this->name = $name;
    $this->description = $description;
  }
}

function infuidExists($conn, $username, $email) {
  $sql = "SELECT * FROM Influencers WHERE username = ? OR email = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../?error=stmtfailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);
  // if returns true, we have desired login behavior
  // if returns false, we have desired signup behavior
  if ($row = mysqli_fetch_assoc($resultData)) {
    return new Influencer($row["username"], $row["email"], $row["name"], $row["description"]);
  }
  else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}
