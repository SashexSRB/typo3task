<?php

namespace Sashex\SitePackage\Domain\Model;

use GeorgRinger\News\Domain\Model\News as ModelNews;

class EventNews extends ModelNews {
    protected string $location;
    protected \DateTime $date;
    protected string $organizer;
    protected string $price;
    protected string $website;

    public function getLocation(): string {
        return $this->location;
    }
    public function getDate(): \DateTime { 
        return $this->date;
    }
    public function getOrganizer(): string { 
        return $this->organizer;
    }
    public function getPrice(): string {
        return $this->price;
    }
    public function getWebsite(): string { 
        return $this->website;
    }

    public function setLocation(string $location) {
        $this->location = $location;
    }
    public function setDate(\DateTime $date) {  
        $this->date = $date;
    }
    public function setOrganizer(string $organizer) { 
        $this->organizer = $organizer;
    }
    public function setPrice(string $price) { 
        $this->price = $price;   
    }
    public function setWebsite(string $website) { 
        $this->website = $website;
    }
}