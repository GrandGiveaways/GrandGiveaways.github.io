<?php

class Giveaway {
  public $id;
  public $author;
  public $image;
  public $description;
  public $banner;
  public $title;
  public $caption;
  public $release_date;
  public $expiration_date;
  public $entries;

  public function __construct($id, $author, $image, $description, $banner, $title, $caption, $release_date, $expiration_date, $entries) {
    $this->id = $id;
    $this->author = $author;
    $this->image = $image;
    $this->description = $description;
    $this->banner = $banner;
    $this->title = $title;
    $this->caption = $caption;
    $this->release_date = $release_date;
    $this->expiration_date = $expiration_date;
    $this->entries = $entries;
  }
}

function guidExists($conn, $id) {
    $sql = "SELECT * FROM Giveaways WHERE id = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: /?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    // if returns true, we have desired login behavior
    // if returns false, we have desired signup behavior
    if ($row = mysqli_fetch_assoc($resultData)) {
        return new Giveaway($row["id"], $row["author"], $row["image"], $row["description"], $row["banner"], $row["title"], $row["caption"], $row["release_date"], $row["expiration_date"], $row["entries"]);
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}
