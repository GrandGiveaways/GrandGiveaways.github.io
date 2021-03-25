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

$link = urlencode("http://grand-giveaway/g/" . $giveaway->id);

$entry_types = [
  "twt" => new EntryType("Share on Twitter", "twitter.svg", 1, "http://twitter.com/share?text=" . urlencode("Check out the awesome " . $giveaway->title . " giveaway by " . $author->name . " on Grand Giveaways") . '+-&amp;url=' . $link),
  "fb" => new EntryType("Share on Facebook", "facebook.svg", 1, "https://www.facebook.com/sharer/sharer.php?u=" . $link),
  "ins" => new EntryType("Visit us on Instagram", "instagram.svg", 1, "#"),
  "yt" => new EntryType("Visit us on Youtube", "youtube.svg", 1, "#"),
  "tik" => new EntryType("Visit us on TikTok", "tiktok.svg", 1, "#"),
  "def" => new EntryType("Enter", "play.svg", 2, "#")
  //new EntryType("Watch an ad", "play.svg", 2, "#")
];
