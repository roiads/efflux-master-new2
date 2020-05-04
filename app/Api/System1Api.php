<?php
namespace App\Api;
use App\Http\Controllers\Controller;
use \App\Models\Reporting\System1;

class System1Api extends Controller {

 private $reportUrl;
 private $report;
 public $changes;
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
  $this->type      = $type;
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
  $v = $k = [];
  foreach ($rows as $row) {
   $k['date']   = $date   = $row[0];
   $k['domain'] = $dom = null;
   $k['subid']  = $sid  = null;

   $v['searches'] = $row[9] ?: null;
   $v['clicks']   = $row[10] ?: null;
   $v['revenue']  = $row[11] ?: null;
   $v['sessions'] = $row[1] ?: null;
   $v['unique']   = $row[5] ?: null;

   $v['sessions_mobile']  = $row[2] ?: null;
   $v['sessions_desktop'] = $row[3] ?: null;
   $v['unique_mobile']    = $row[6] ?: null;
   $v['unique_desktop']   = $row[7] ?: null;

   $r = System1::updateOrCreate($k, array_merge($k, $v));
   if ($x = $r->getChanges()) {
    $this->changes[$date]['TOTAL'] = [$k, $x];
   }
  }
 }
 public function record_campaign($rows) {
  $v = $k = [];
  foreach ($rows as $row) {
   $k['date']   = $date   = $row[0];
   $k['domain'] = $dom = $row[1];
   $k['subid']  = $sid  = null;

   $v['searches'] = $row[10] ?: null;
   $v['clicks']   = $row[11] ?: null;
   $v['revenue']  = $row[12] ?: null;
   $v['sessions'] = $row[2] ?: null;
   $v['unique']   = $row[6] ?: null;

   $v['sessions_mobile']  = $row[3] ?: null;
   $v['unique_mobile']    = $row[7] ?: null;
   $v['sessions_desktop'] = $row[4] ?: null;
   $v['unique_desktop']   = $row[8] ?: null;

   $r = System1::updateOrCreate($k, array_merge($k, $v));
   if ($x = $r->getChanges()) {
    $this->changes[$date][$dom]['TOTAL'] = [$k, $x];
   }
  }
 }
 public function record_subid($rows) {
  $v = $k = [];
  foreach ($rows as $row) {
   $k['date']   = $date   = $row[0];
   $k['domain'] = $dom = $row[1];
   $k['subid']  = $sid  = $row[2];

   $v['searches'] = $row[11] ?: null;
   $v['clicks']   = $row[12] ?: null;
   $v['revenue']  = $row[13] ?: null;
   $v['sessions'] = $row[3] ?: null;
   $v['unique']   = $row[7] ?: null;

   $v['sessions_mobile']  = $row[4] ?: null;
   $v['sessions_desktop'] = $row[5] ?: null;
   $v['unique_mobile']    = $row[8] ?: null;
   $v['unique_desktop']   = $row[9] ?: null;

   $r = System1::updateOrCreate($k, array_merge($k, $v));
   if ($x = $r->getChanges()) {
    $this->changes[$date][$dom][$sid] = [$k, $x];
   }
  }
 }
}