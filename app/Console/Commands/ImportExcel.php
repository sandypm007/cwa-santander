<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class ImportExcel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:excel {path}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Load users to the database.';

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
     * @return int
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    public function handle()
    {
        $path = $this->argument('path');
        if (!is_file($path)) {
            $this->info("File not found {$path}.");
            return -1;
        }

        $reader = new Xlsx();
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load($path);
        $sheet = $spreadsheet->getActiveSheet();
        for ($i = 2; $i <= 995; $i++) {
            $region = $sheet->getCell("A{$i}")->getValue();
            $name = mb_convert_case($sheet->getCell("B{$i}")->getValue(), MB_CASE_TITLE);
            $position = $sheet->getCell("C{$i}")->getValue();
            $department = $sheet->getCell("D{$i}")->getValue();
            $email = $sheet->getCell("E{$i}")->getValue();

            $user = User::where('email', $email)->first();
            if (!$user) {
                $user = new User();
                $user->fullname = $name;
                $user->active = true;
                $user->region = $region;
                $user->department = $department;
                $user->position = $position;
                $user->email = $email;
                $user->password = app('hash')->make($email);
                $user->acl_level = 0;
                $user->save();
                $this->info("Registered user {$name} {$email}");
            } else {
                $this->info("User already exists {$name} {$email}");
            }
        }
        return 0;
    }
}
