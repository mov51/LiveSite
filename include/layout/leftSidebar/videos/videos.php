
<?php

include $_SERVER['DOCUMENT_ROOT'] . "/include/config.php";

$myChannelID="UCRlTx9vzLsyHKPB-cJhqQjg";
$maxResults="10";
$cacheFile=dirname(__FILE__) .  "/include/layout/leftSidebar/videos/cache.json";
$cacheInterval=1200; //time in seconds

$time=gettimeofday();
if ($time["sec"] > filemtime($cacheFile) + $cacheInterval)
{
  $myQuery = "https://www.googleapis.com/youtube/v3/search?key=$youtubeApiKey&channelId=$myChannelID&part=snippet,id&order=date&maxResults=$maxResults&type=video";
  $videoList = file_get_contents($myQuery);
  file_put_contents($cacheFile, $videoList, LOCK_EX);
}
else {
  $videoList=file_get_contents($cacheFile);
}


$decoded = json_decode($videoList, true);


foreach ($decoded['items'] as $items)
{
  $id = $items['id']['videoId'];
  $title= $items['snippet']['title'];
  $thumbnail = $items['snippet']['thumbnails']['medium']['url'];
  echo "<div class=\"video box dark hover col-5 m-1 p-1\">";
  echo '<a href="https://www.youtube.com/watch?v=' .  $id . '">';
  echo "<img src=\"$thumbnail\" >";
  echo "<p class=\"videoTitle\">";
  echo "$title";
  echo "</p>";
  echo "</a>";
  echo "</div>";
}
?>
