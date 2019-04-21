<?php
/**
 * API Request Caching
 *
 *  Use server-side caching to store API request's as JSON at a set
 *  interval, rather than each pageload.
 *
 * @arg Argument description and usage info
 */
function json_cached_api_results( $cache_file = NULL, $expires = NULL ) {
    global $request_type, $purge_cache, $limit_reached, $request_limit;

    if( !$cache_file ) $cache_file = dirname(__FILE__) . '/api-cache.json';
    if( !$expires) $expires = time() - 2*60*60;

    if( !file_exists($cache_file) ) die("Cache file is missing: $cache_file");

    // Check that the file is older than the expire time and that it's not empty
    if ( filectime($cache_file) < $expires || file_get_contents($cache_file)  == '' || $purge_cache && intval($_SESSION['views']) <= $request_limit ) {

        // File is too old, refresh cache
        $api_results = indeed_api_request();
        $json_results = json_encode($api_results);

        // Remove cache file on error to avoid writing wrong xml
        if ( $api_results && $json_results )
            file_put_contents($cache_file, $json_results);
        else
            unlink($cache_file);
    } else {
        // Check for the number of purge cache requests to avoid abuse
        if( intval($_SESSION['views']) >= $request_limit )
            $limit_reached = " <span class='error'>Request limit reached ($request_limit). Please try purging the cache later.</span>";
        // Fetch cache
        $json_results = file_get_contents($cache_file);
        $request_type = 'JSON';
    }

    return json_decode($json_results);
}

/**
 * Request jobs from Indeed API
 *
 * Split the request into smaller request chunks (25 results each)
 * and then consolidate them into a single array to meet the API
 * requirements.
 */
function indeed_api_request( ) {

  $myApiKey="AIzaSyAg5Z2AgiWhUpFVvHuSOPg95yDvpC50X4c"; // Provide your API Key
  $myChannelID="UCRlTx9vzLsyHKPB-cJhqQjg"; // Provide your Channel ID
  $maxResults="10"; // Number of results to display

  // Make an API call to store list of videos to JSON variable
  $myQuery = "https://www.googleapis.com/youtube/v3/search?key=$myApiKey&channelId=$myChannelID&part=snippet,id&order=date&maxResults=$maxResults&type=video";
  $videoList = file_get_contents($myQuery);

  // Convert JSON to PHP Array
  $decoded = json_decode($videoList, true);

  // Run a loop to display list of videos
  foreach ($decoded['items'] as $items)
  {
  $id = $items['id']['videoId'];
  $title= $items['snippet']['title'];
  $description = $items['snippet']['description'];
  $thumbnail = $items['snippet']['thumbnails']['high']['url'];

  return $items;
}
?>
