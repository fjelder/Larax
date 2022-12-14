<?php
namespace App\Helpers;

use App\Models\UserSettings;
use Illuminate\Support\Facades\Auth;

class UserHelper
{
    public static function sets()
    {
        $settings = self::getSettings();
        if ($settings) {
            return $settings;
        } else {
            UserSettings::create([
                'user_id' => Auth::user()->id,
            ]);
            return self::getSettings();
        }
    }
    public static function getSettings()
    {
        return UserSettings::where('user_id', Auth::user()->id)->first();
    }
    public static function saveFilterStageContract($settings, $stage)
    {
        $settings->contract_filter_stage_id = $stage;
        $settings->save();
        return true;
    }
    public static function saveCurrentContract($settings, $contract_id)
    {
        $settings->contract_current_id = $contract_id;
        $settings->save();
        return true;
    }
}
