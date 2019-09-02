<?php
class ApiLink extends Link
{
	private $json;

	public function __construct($link)
    {
		parent::__construct($link);
        if (!$this->responseIsJSON()){
			throw new \InvalidArgumentException('response is not valid JSON');}
			return $this->json;
	}

	public function getJson(){
		return $this->json;
	}

	private function responseIsJSON(){
		$this->json = json_decode($this->getContents());
		return json_last_error()===0;
	}
}