<?php

namespace Modules\Admin\Controllers; 

use App\Controllers\BaseController;
use Modules\Admin\Models\ServiceModel;

class Admin extends BaseController
{
    public function index()
    {
        $model = new ServiceModel();
        // Mengambil semua data service
        $data['services'] = $model->findAll(); 

        return view('Modules\Admin\Views\Index', $data);
    }

    public function add()
    {
        return view('Modules\Admin\Views\add');
    }

    public function save()
    {
        $model = new \Modules\Admin\Models\ServiceModel();

        $model->save([
            'customer'    => $this->request->getPost('customer'),
            'device'      => $this->request->getPost('device'),
            'description' => $this->request->getPost('description'),
            'status'      => 'Pending' // Default status saat baru ditambah
        ]);

        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $model = new \Modules\Admin\Models\ServiceModel();
        
        // Perintah untuk menghapus data berdasarkan ID
        $model->delete($id);

        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $model = new \Modules\Admin\Models\ServiceModel();
        $data['service'] = $model->find($id); // Mencari data berdasarkan ID

        return view('Modules\Admin\Views\edit', $data);
    }

    public function update($id)
    {
        $model = new \Modules\Admin\Models\ServiceModel();

        $model->update($id, [
            'customer'    => $this->request->getPost('customer'),
            'device'      => $this->request->getPost('device'),
            'description' => $this->request->getPost('description'),
            'status'      => $this->request->getPost('status'),
        ]);

        return redirect()->to('/admin');
    }
}
