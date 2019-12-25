<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte;

class ScrapeController extends Controller
{   
    public function checkScrape(){
        $result = array();
        $crawler = Goutte::request('GET', 'https://www.jobsinyangon.com/app/job-search?send=1&reset_filtr=1');
        $crawler->filter('.nazev-inzeratu-vypis')->each(function ($node) {
            $result = $node->text()."<br>";
            echo $result;
        });
    }
    
}
