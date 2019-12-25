<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte;
class ScrapeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scraper-test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'NewJobs Test';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $crawler = Goutte::request('GET', 'https://www.jobsinyangon.com/app/job-search?send=1&reset_filtr=1');
        $crawler->filter('.nazev-inzeratu-vypis')->each(function ($node) {
        dump($node->text());
    });
    }
}
