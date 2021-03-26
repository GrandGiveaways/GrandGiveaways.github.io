<?php

class SocialMediaTypes {
  public $name;
  public $icon;
  public $entry_count;

  public function __construct($name, $icon, $entry_count) {
    $this->name = $name;
    $this->icon = $icon;
    $this->entry_count = $entry_count;
  }
}

$social_media_types = [
  "twt" => new SocialMediaTypes("Visit " . $author->name . " on Twitter", "twitter.svg", 1),
  "fb" => new SocialMediaTypes("Visit " . $author->name . " on Facebook", "facebook.svg", 1),
  "ins" => new SocialMediaTypes("Visit " . $author->name . " on Instagram", "instagram.svg", 1),
  "yt" => new SocialMediaTypes("Visit " . $author->name . " on Youtube", "youtube.svg", 1),
  "tik" => new SocialMediaTypes("Visit " . $author->name . " on TikTok", "tiktok.svg", 1),
  "lin" => new SocialMediaTypes("Visit " . $author->name . " on LinkedIn", "linkedin.svg", 1),
  "gg" => new SocialMediaTypes("Visit Grand Giveaways on Instagram", "instagram.svg", 1, "https://instagram.com/"),
  "def" => new SocialMediaTypes("Enter", "play.svg", 2)
];

class EntryType {
  public $id;
  public $link;

  public function __construct($id, $link) {
    $this->id = $id;
    $this->link = $link;
  }
}

$entry_types = array();

$serialized_social_media = $author->social_media;
$social_media_array = unserialize($serialized_social_media);

if (is_array($social_media_array) || is_object($social_media_array)) {
  foreach ($social_media_array as $mt) {
    $entry_types[] = new EntryType($mt["id"], $mt["link"]);
  }
}

$entry_types[] = new EntryType("gg", "https://www.instagram.com/the_grand_giveaway_/");
$entry_types[] = new EntryType("def", "#");
