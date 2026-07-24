<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar guru";
    }

    public function create()
    {
        return "Ini adalah halaman tambah guru";
    }

    public function store()
    {
        return "Menambahkan data guru buru";
    }

    public function show($id)
    {
        return "Menampilkan detail guru dengan ID: {$id}";
    }

    public function edit($id)
    {
        return "Ini adalah halaman edit guru ID: {$id}";
    }

    public function update($id)
    {
        return "Mengubah data guru dengan ID: {$id}";
    }

    public function destroy($id)
    {
        return "Menghapus data guru dengan ID: {$id}";
    }
}
