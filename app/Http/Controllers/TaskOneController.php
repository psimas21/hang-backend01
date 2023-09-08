<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TaskOneController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $req)
    {
        $slackName = $req->input('slack_name');
        $track = $req->input('track');

        return response()->json([
            "slack_name" => $slackName,
            "current_day" =>  date('l'),
            "utc_time" => Carbon::now()->toIso8601ZuluString(),
            "track" =>  $track,
            "github_file_url" => "https://github.com/psimas21/hang-backend01/blob/main/app/Http/Controllers/TaskOneController.php",
            "github_repo_url" => "https://github.com/psimas21/hang-backend01",
            "status_code" => 200
        ]);
    }
}
