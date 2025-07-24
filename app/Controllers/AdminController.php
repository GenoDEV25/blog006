<?php
namespace App\Controllers;
use App\Models\PostModel;

class AdminController extends BaseController
{
    public function index()
    {
        $model = new PostModel();
        $data['posts'] = $model->orderBy('created_at', 'DESC')->findAll();
        return view('backend/dashboard', $data);
    }

    public function create()
    {
        return view('backend/post_form'); // Formulario vacío
    }

    public function store()
    {
        $model = new PostModel();

        // Manejo de imagen
        $imageFile = $this->request->getFile('image');
        $imageName = null;

        if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move('uploads', $imageName);
        }

        $model->save([
            'title' => $this->request->getPost('title'),
            // Nuevo atributo descripción
            'content' => $this->request->getPost('content'),
            'created_at' => $this->request->getPost('created_at'),
            'category' => $this->request->getPost('category'),
            'image' => $imageName
        ]);

        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $model = new PostModel();
        $data['post'] = $model->find($id);
        return view('backend/post_form', $data);
    }

    public function update($id)
    {
        $model = new PostModel();

        $imageFile = $this->request->getFile('image');
        $imageName = $this->request->getPost('current_image');

        if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move('uploads', $imageName);
        }

        $model->update($id, [
            'title' => $this->request->getPost('title'),
            // Nuevo atributo descripción
            'content' => $this->request->getPost('content'),
            'created_at' => $this->request->getPost('created_at'),
            'category' => $this->request->getPost('category'),
            'image' => $imageName
        ]);

        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $model = new PostModel();
        $model->delete($id);
        return redirect()->to('/admin');
    }
}