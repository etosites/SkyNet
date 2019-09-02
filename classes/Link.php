<?php
class Link
{
	public $link;
	
    public function __construct($link)
    {
        if ($this->isLink($link)){
			$this->link = $link;}
		else {
			throw new \InvalidArgumentException('this not link');}
	}

	public function getContents(){
		if($this->linkIsAvailable()){
			return file_get_contents($this->link);
		}
	}

	//доступна ли ссылка
	private function linkIsAvailable(){
		if (get_headers($this->link, 1)['0']=='HTTP/1.1 200 OK'||get_headers($this->link, 1)['0']=='HTTP/1.1 301 Moved Permanently'){
			return true;
		}else{
			throw new \LogicException('link not available');
		}
	}
	
	private function isLink($link)
    {
        return preg_match('/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',$link);
	}
}