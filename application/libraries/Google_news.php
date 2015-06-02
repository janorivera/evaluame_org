
<?php
/**
 * Google-News feed parser and JSON provider Class
 *
 * @package None
 * @author Nuhil Mehdy <nuhil@nuhil.net>
 *        
 */
/*
echo'hola';
$news = new Google_news();
$news->setSearchQuery ( '"Felipe Ward" diputado' );
$news->setNumberOfNews ( '10' );
echo $news>getNews ();
*/

class Google_news {
	 
	public function __construct() {
	$this->searchQuery = 'Good news';
    $this->numberOfNews = 5;
	}
	public function __toString() {
		return $this->getNews ();
	}
	public function setSearchQuery($searchQuery) {
		if (! empty ( $searchQuery )) {
			$this->searchQuery = $searchQuery;
		}
	}
	public function setNumberOfNews($numberOfNews) {
		if (! empty ( $numberOfNews )) {
			$this->numberOfNews = ( int ) $numberOfNews;
		}
	}
	public function getNews() {
		return $this->processNews ();
	}
	private function processNews() {
		$loadXml = simplexml_load_file ( urlencode ( 'http://news.google.cl/news?q=' . $this->searchQuery . '&num=' . $this->numberOfNews . '&output=rss' ) );
		//echo 'http://news.google.cl/news?q=' . $this->searchQuery . '&num=' . $this->numberOfNews . '&output=rss';
		$news = array ();
		$i = 0;
		foreach ( $loadXml->channel->item as $item ) {
			preg_match ( '@src="([^"]+)"@', $item->description, $match );
			
			$newsSections = explode ( '<font size="-1">', $item->description );
			
			//echo var_dump($match );
			$news [$i] ['title'] = ( string ) $item->title;
		    if (isset ($match[1]))
				$news [$i] ['image'] = $match [1];
		    else 
		    	$news [$i] ['image']= get_media_path('images/icons','N','jpg');
		    preg_match ( '@url=([^"]+)"@',$newsSections [0], $match );
			//echo var_dump ($match[1]);
			//echo htmlentities($newsSections[0]);
		    //echo var_dump($item);
		    $news [$i] ['link'] =  $match [1];
		    //I can also use the google link
		    $news [$i]['googleLink']= $item->link;
		    $news [$i]['pubDate']= $item->pubDate;
			$news [$i] ['newsSource'] = strip_tags ( $newsSections [1] );
			$news [$i] ['shortStory'] = strip_tags ( $newsSections [2] );
			
			$i ++;
		}
		$result = array (
				'news' => $news,
				'status' => 200,
				'message' => 'OK' 
		);
		//return json_encode ( $result );
		return $news;
	}
}
?>