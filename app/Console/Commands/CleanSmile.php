<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CleanSmile extends Command
{
    protected $signature = 'test:smile {text}';
    protected $description = 'Удалить последовательные скобки';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $text = $this->argument('text');
        $cleanedText = $this->cleanSmile($text);
        $this->info($cleanedText);
    }

    protected function cleanSmile(string $inputText): string
    {
        $result = preg_replace('/\)\)+/', ')', $inputText);
        $result = preg_replace('/\(\(+/', '(', $result);

        return $result;
    }
}
