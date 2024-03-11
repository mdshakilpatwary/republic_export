<?php
use App\Models\SiteInfo;
use Illuminate\Support\Facades\Auth;

function siteInfoData(){
    $siteInfo =SiteInfo::where('type','active_siteInfo')->first();
    return $siteInfo;
}



?>