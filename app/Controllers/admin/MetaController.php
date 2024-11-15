<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\MetaModel;

class MetaController extends BaseController
{
    public function index()
    {
        $meta_model = new MetaModel();
        $meta = $meta_model->findAll();

        return view('admin/meta/index', [
            'meta' => $meta,
        ]);
    }

    public function tambah()
    {
        
        $meta_model = new MetaModel();
        $meta = $meta_model->findAll();

        return view('admin/meta/tambah', [
            'meta' => $meta,
        ]);
    }

    public function proses_tambah()
    {
        $meta_model = new MetaModel();
        $data = [
            'id_seo' => $this->request->getVar("id_seo"),
            'nama_halaman' => $this->request->getVar("nama_halaman"),
            'meta_title_id' => $this->request->getVar("meta_title_id"),
            'meta_description_id' => $this->request->getVar("meta_description_id"),
            'meta_title_en' => $this->request->getVar("meta_title_en"),
            'meta_description_en' => $this->request->getVar("meta_description_en"),
        ];
        $meta_model->save($data);

        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to(base_url('admin/meta/index'));
    }

    public function edit($id_seo)
    {

        $meta_model = new MetaModel();
        $meta_data = $meta_model->find($id_seo);

        return view('admin/meta/edit', [
            'meta_data' => $meta_data
        ]);
    }

    public function proses_edit($id_seo = null)
    {
        if (!$id_seo) {
            return redirect()->back();
        }

        $metaModel = new MetaModel();
        $metaModel->where('id_seo', $id_seo)->set([
            'nama_halaman' => $this->request->getVar("nama_halaman"),
            'meta_title_id' => $this->request->getVar("meta_title_id"),
            'meta_description_id' => $this->request->getVar("meta_description_id"),
            'meta_title_en' => $this->request->getVar("meta_title_en"),
            'meta_description_en' => $this->request->getVar("meta_description_en"),
        ])->update();

        session()->setFlashdata('success', 'Berkas berhasil diperbarui');
        return redirect()->to(base_url('admin/meta/index'));
    }

    public function delete($id = null)
    {
        
        // Ensure an ID is provided
        if ($id === null) {
            return redirect()->to(base_url('admin/meta/index'))->with('error', 'Invalid ID.');
        }

        $metaModel = new MetaModel();

        // Find the record to ensure it exists before attempting to delete
        $meta = $metaModel->find($id);
        if (!$meta) {
            return redirect()->to(base_url('admin/meta/index'))->with('error', 'Meta data not found.');
        }

        // Perform the deletion
        $metaModel->delete($id);

        // Redirect with a success message
        return redirect()->to(base_url('admin/meta/index'))->with('success', 'Meta data deleted successfully.');
    }
}
