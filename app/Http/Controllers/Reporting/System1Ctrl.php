<?php

namespace App\Http\Controllers\Reporting;

use Illuminate\Http\Request;
use \App\Models\Reporting\System1;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class System1Ctrl extends Controller {
    public function index() {
        return System1::all();
    }
    public function store(Request $R) {
        $data = $R->validate([
            'domain' => 'required',
            'date' => 'required',
        ]);
        return response('System1 API data has been saved...', 422);
    }
    public function show(System1 $s1) {
        return $s1->find($s1);
    }
    public function update(Request $R, System1 $s1) {
        $data = $R->validate([
            'id' => 'required',
            'domain' => 'required',
            'date' => 'required',
        ]);
    }
    public function destroy(System1 $s1) {
        $s1->delete();
    }

    public function table($type, $days = 30) {
        $this->days = $days;
        $this->fields = ['clicks',
            'searches',
            'sessions' => 'total',
            'sessions_mobile' => 'mobile',
            'sessions_desktop' => 'desktop',
            'unique',
            'unique_mobile' => 'unique_m',
            'unique_desktop' => 'unique_d',
            'revenue'];
        $s1 = System1::select($type);
        foreach ($this->fields as $k => $v) {
            $s1 = $s1->addSelect(DB::raw('sum(`' . (is_numeric($k) ? $v : $k) . '`) as `' . $v . '`'));
        }
        $s1 = $s1->whereDate('date', '>=', today()->subDays($this->days))
            ->where(($type == 'date' ? 'domain' : 'subid'), NULL)
            ->groupBy($type);
        if ($type == 'domain') {
            $s1 = $s1->orderBy($type);
        } else {
            $s1 = $s1->orderByDesc('date');
        }
        $s1 = $s1->get();
        foreach ($s1 as &$s) {
            if (isset($s->date)) {
                $s->date = date('M. jS', strtotime($s->date));
            }
            unset($s->sessions_mobile);
            if ($type == 'domains') {
                $s->domain = $s->domain ?? 'All Domains';
            }
            $s->revenue = '$' . number_format($s->revenue, 2);
        }
        return $s1;
    }
}