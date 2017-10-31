<?php

class jukebox {
    
    private $musiclist;
    
    //on creation get the Billboard music list
	public function __construct() {
        $this->musiclist = simplexml_load_file('http://www.billboard.com/rss/charts/hot-100');
    }
    
	//public function to show playlist on page
    public function showPlaylist() {
		print '<div class="list-group" id="musiclist" role="tablist" style="height: 500px; overflow: scroll; overflow-x: hidden; ">';

        $count = 1;
        foreach ($this->musiclist->channel->item as $song) {
            print '<a class="list-group-item list-group-item-action" id="list-song' . $count . '-list" data-toggle="list" href="#list-song' . $count . '" role="tab" aria-controls="song' . $count . '">' . $song->title . '</a>';
            $count++;
        }
        
        print '</div>';
    }

}


?>