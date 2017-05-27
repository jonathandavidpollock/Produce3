<?php

class apiModel {
  public function __construct($parent) {
    $this->deb = $parent-db;
  }

  public function googleBooks($term='') {
    $client = new Google_Client();
    $client->setApplicationName("sslapi");
    $client->setDeveloperKey("AIzaSyD5LVGkno8cz2yDg9DFAETM-tfJo9UoUN4");

    $service = new Google_Service_Book($client);

    $optParams = array('filter'=>"free-ebooks");
    $result = $service->volumens->listVolumes($term, $optParams);

    return $result;
  }
}
?>
