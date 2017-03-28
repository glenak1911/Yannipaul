<?php

//fetch xml for youtube channel
$json = https://www.googleapis.com/youtube/v3/playlists?part=snippet&channelId=UCKHBJ-C1ZVYKtIyY01Uzf6g&key=AIzaSyCKEb2K3Qaz7ydIa4gxy4LI8k2PbxoifZ4

$server_time = $xml->updated;
  $return = array();
  foreach ($xml->entry as $video) {
      $vid = array();
      $vid['id'] = substr($video->id,42);
      $vid['title'] = $video->title;
      $vid['date'] = $video->published;

      // get nodes in media: namespace for media information
      $media = $video->children('http://search.yahoo.com/mrss/');

      // get the video length
      $yt = $media->children('http://gdata.youtube.com/schemas/2007');
      $attrs = $yt->duration->attributes();
      $vid['length'] = $attrs['seconds'];

      // get video thumbnail
      $attrs = $media->group->thumbnail[0]->attributes();
      $vid['thumb'] = $attrs['url'];

      // get <yt:stats> node for viewer statistics
      $yt = $video->children('http://gdata.youtube.com/schemas/2007');
      $attrs = $yt->statistics->attributes();
      $vid['views'] = $attrs['viewCount'];

      array_push($return, $vid);
  }
  echo "<pre>";
  print_r($return);
  die;

?>
