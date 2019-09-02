<?php
class TariffsHelper
{
	private $tariffs;

	public function __construct(ApiLink $apiLink)
	{
		$this->tariffs = $apiLink->getJson()->tarifs;
	}

	public function getTariffsWhithMinMaxPrice()
	{
		$this->count = count($this->tariffs);
		for($i=0; $i < $this->count; $i++){
			$this->tariffs[$i]->tariffNumber = $i;//for js
			foreach ($this->tariffs[$i]->tarifs as $tariffOffers){	
				$prices[] = $tariffOffers->price/$tariffOffers->pay_period;
				}
			$this->tariffs[$i]->minPrice = min($prices);//for html
			$this->tariffs[$i]->maxPrice = max($prices);
		}
		return $this->tariffs;
	}

	public function getTariffsWhithMinMaxPriceJSON()
	{
		return json_encode($this->tariffs);
	}
}