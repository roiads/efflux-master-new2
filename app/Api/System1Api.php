<?php
namespace App\Api;
use App\Http\Controllers\Controller;
use \App\Models\Reporting\System1;

class System1Api extends Controller {

 private $reportUrl;
 private $report;
 private $types = ['subid', 'summary', 'campaign'];

 public function __construct($type) {
  if ($this->setup($type) === true) {
   if ($this->getReport()) {
    $this->record();
   }
  }
  return $this->anyErrors() ?? true;
 }
 /**
  * setup
  *
  * @param string $type
  * @return boolean
  */
 private function setup($type) {
  $key = env('SYSTEM1_KEY') ?? $this->error('No SYSTEM1_KEY in .env');
  $url = env('SYSTEM1_REPORTING_URL') ?? $this->error('No SYSTEM1_REPORTING_URL in .env');
  if (!in_array($type, $this->types)) {
   $this->error('Unknow type: ' . $type);
  }
  $this->type     = $type;
  $this->reportUrl = 'https://' . trim($url, '/ ') . '/' . $type . '.json?auth_key=' . $key;
  return $this->anyErrors() ?: true;
 }

 /**
  * getReport
  *
  * @return boolean
  */
 public function getReport() {
  $file = file_get_contents($this->reportUrl);
  if (!empty($file)) {
   $file = json_decode($file);
    unset($file[0]);
   $this->report[$this->type] = $file;
   return true;
  }
  return $this->error('No Report Found at ' . $link);

 }

 /**
  * record
  * launch the recordFunction by type
  *
  * @return void
  */
 public function record() {
  $method = 'record_' . $this->type;
  $rows   = $this->report[$this->type];
  $this->$method($rows);
 }
 public function record_summary($rows) {
  foreach ($rows as $row) {
   System1::updateOrCreate([
    'date'            => $row[0],
    'campaign_domain' => null,
    'subid'           => null,
   ], [
    'date'            => $row[0],
    'campaign_domain' => null,
    'subid'           => null,
    'mobile'          => $row[2],
    'mobile_unique'   => $row[6],
    'desktop'         => $row[3],
    'desktop_unique'  => $row[7],
    'searches'        => $row[9],
    'clicks'          => $row[10],
    'revenue'         => $row[11],
   ]
   );
  }
 }
 public function record_subid($rows) {
  foreach ($rows as $row) {
   System1::updateOrCreate([
    'date'            => $row[0],
    'campaign_domain' => $row[1],
    'subid'           => $row[2],
   ], [
    'date'            => $row[0],
    'campaign_domain' => $row[1],
    'subid'           => $row[2],
    'mobile'          => $row[4],
    'mobile_unique'   => $row[8],
    'desktop'         => $row[5],
    'desktop_unique'  => $row[9],
    'searches'        => $row[11],
    'clicks'          => $row[12],
    'revenue'         => $row[13],
   ]
   );
  }
 }
 public function record_campaign($rows) {
  foreach ($rows as $row) {
   System1::updateOrCreate([
    'date'            => $row[0],
    'campaign_domain' => $row[1],
    'subid'           => null,
   ], [
    'date'            => $row[0],
    'campaign_domain' => $row[1],
    'subid'           => null,
    'mobile'          => $row[3],
    'mobile_unique'   => $row[7],
    'desktop'         => $row[4],
    'desktop_unique'  => $row[8],
    'searches'        => $row[10],
    'clicks'          => $row[11],
    'revenue'         => $row[12],
   ]
   );
  }
 }
}