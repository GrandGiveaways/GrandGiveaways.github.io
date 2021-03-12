<?php

class EntryType {
  public $name;
  public $icon;
  public $entry_count;
  public $link;

  public function __construct($name, $icon, $entry_count, $link) {
    $this->name = $name;
    $this->icon = $icon;
    $this->entry_count = $entry_count;
    $this->link = $link;
  }
}
