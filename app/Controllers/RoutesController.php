<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class RoutesController extends BaseController
{
    public $kehadiranModel, $keluarModel;
    public function __construct()
    {
        $this->kehadiranModel = new \App\Models\Kehadiran();
        $this->keluarModel = new \App\Models\Keluar();
    }
    public function form_kehadiran()
    {
        if (session('LOGGED_IN') == true) {
            $kehadiranStatus = $this->kehadiranModel->where('idmhs', session('idmhs'))
                ->where('DATE(tanggal)', date('Y-m-d'))
                ->get()->getRow();
            $keluarStatus = $this->keluarModel->where('idmhs', session('idmhs'))
                ->where('DATE(tanggal)', date('Y-m-d'))
                ->get()->getRow();
            if (session('role') == 'mahasiswa') {
                if ($kehadiranStatus) {
                    session()->set('kehadiranStatus', true);
                } else {
                    session()->set('kehadiranStatus', false);
                }
                if ($keluarStatus) {
                    session()->set('keluarStatus', true);
                } else {
                    session()->set('keluarStatus', false);
                }
                return view('form_kehadiran');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->to(base_url('login'));
        }
    }
    public function operatorDashboard()
    {
        return view('operator/dashboard');
    }
    public function login()
    {
        return view('login');
    }
    public function dashboard()
    {
        if (session('LOGGED_IN') == true) {
            if (session('role') == 'admin') {
                return view('admin/dashboard');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->to(base_url('login'));
        }
    }
}
