<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SampleModel;
use DB;
use Helpers;

class SampleController extends Controller
{
    public function updatesyncstatus()
    {
        DB::beginTransaction();
        try{
            $this->reconnectDatabasesIfLost(); //Trying to imitate the reconnect to db function in kayako command.
            $sync_status = SampleModel::SYNC_NOT_RUNNING;
            //$sync_status = SampleModel::SYNC_RUNNING;
            SampleModel::updateSyncStatus($sync_status);
            echo "Done updating to ".$sync_status;
            DB::commit();
        }
        catch(Exception $ex) { // General try catch
            DB::rollback();
            return false;
        }
    }

    private function reconnectDatabasesIfLost()
    {
        if(DB::connection()->getDatabaseName() != env('DB_DATABASE')) {
            DB::connection()->reconnect();
        }
    }

    public function useHelper()
    {
        echo Helpers::sample_helper();
    }
}
