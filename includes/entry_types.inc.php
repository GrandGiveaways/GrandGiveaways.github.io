<?php

class EntryType {
  public $name;
  public $icon;
  public $entry_count;
  // public $action;

  public function __construct($name, $icon, $entry_count){
    $this->name = $name;
    $this->icon = $icon;
    $this->entry_count = $entry_count;
  }
}

$entry_types = [
  new EntryType("Share on TikTok", "tiktok.svg", 1),
  new EntryType("Share on Twitter", "twitter.svg", 1),
  new EntryType("Share on Facebook", "facebook.svg", 1),
  new EntryType("Share on Instagram", "instagram.svg", 1),
  new EntryType("Share on Youtube", "youtube.svg", 1),
  new EntryType("Watch an ad", "play.svg", 2)
];
