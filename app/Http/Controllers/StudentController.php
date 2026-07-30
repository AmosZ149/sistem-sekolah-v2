<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = [
            [
               'id' => 1,
               'nis' => '7743',
               'name' => 'Amos',
               'class' => 'XII TKJ 1',
               'major' => 'Computer network and information'
            ],

            [
               'id' => 1,
               'nis' => '7743',
               'name' => 'Amos',
               'class' => 'XII TKJ 1',
               'major' => 'Computer network and information'
            ],
            
            [
               'id' => 1,
               'nis' => '7743',
               'name' => 'Amos',
               'class' => 'XII TKJ 1',
               'major' => 'Computer network and information'
            ]
        ];
        return view('students.index', compact('students','title'));
            
    }
    public function show(string $id)
    {
        return view('students.how');
    }
    public function create()
    {
        return view('students.create');
    }
    public function edit(string $id)
    {
        return ('students.edit');
    }               
    public function store()
    {
        return "Menambah data siswa baru";
    }
    public function update(string $id)
    {
        return "Mengubah data siswa dengan ID: {$id}";
    }
    public function destroy(string $id)
    {
        return "Menghapus data siswa dengan ID: {$id}";
    }
}
