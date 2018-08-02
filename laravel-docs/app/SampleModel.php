<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SampleModel extends Model
{
    const SYNC_NOT_RUNNING = 0;
    const SYNC_RUNNING = 1;
    const SYNC_ERROR = 2;
    const SYNC_CONCLUDED = 3;

    protected $table = "sample_models";

    public function scopeName($query, $name)
    {
        if($name)
        {
            return $query->where('name', $name);
        }
    }

    public static function updateSyncStatus($status = self::SYNC_NOT_RUNNING)
    {
        $ky_sync_setting = SampleModel::name('sync_status')->update(['value' => $status]);
    }
}
