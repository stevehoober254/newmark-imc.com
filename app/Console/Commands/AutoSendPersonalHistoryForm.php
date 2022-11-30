<?php

namespace App\Console\Commands;

use App\Exports\PersonalHistoryFormExport;
use App\Mail\PersonalHistoryFormMail;
use App\Models\PersonalHistoryForm;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class AutoSendPersonalHistoryForm extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:send-phf';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Auto send personal history form to email';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $filename = 'phf-' . date('Y-m-d-H-i-s') . '.xlsx';
        \Maatwebsite\Excel\Facades\Excel::store(new PersonalHistoryFormExport(), $filename);
        // attach file generated to email and send
        $file = storage_path('app/' . $filename);
        Mail::to(env('HR_EMAIL'))
            ->send(new PersonalHistoryFormMail($file));

        return 0;
    }
}
