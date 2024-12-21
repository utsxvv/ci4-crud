<?php 
namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\Controller;

class CrudController extends Controller
{
    private $student;

    public function __construct() {
        $this->student = new StudentModel();       
    }
    
    public function index() {

        $model = new StudentModel(); 

        $data['students'] = $model->orderBy('id', 'DESC')->findAll();     
        return view('homepage', $data);
    }
    
    public function list() {
        $data = [
                "first_name" => $this->request->getVar('first_name'),
                "last_name" => $this->request->getVar('last_name'),
                "email" => $this->request->getVar('email'),
                "semester" => $this->request->getVar('semester'),
                "gender" => $this->request->getVar('gender'),
                "phone" => $this->request->getVar('phone'),
        ];
        $this->student->insert($data);    
        return redirect()->to('/homepage');
    }

    public function edit($id = null) {
        $data['student'] = $this->student->find($id);

        if ($data['student']) {
            return view('edit_student', $data);
        } else {
            return redirect()->to('/homepage');
        }
    }

    public function update() {
        $id = $this->request->getVar('hdnId');

        $data = [
                "first_name" => $this->request->getVar('first_name'),
                "last_name" => $this->request->getVar('last_name'),
                "email" => $this->request->getVar('email'),
                "semester" => $this->request->getVar('semester'),
                "gender" => $this->request->getVar('gender'),
                "phone" => $this->request->getVar('phone'),
        ];

        $this->student->update($id, $data);
        return redirect()->to('/homepage');
    }

    public function delete($id = null) {
        if ($id) {
            $this->student->delete($id);
        } else {

        }
        return redirect()->to('/homepage');
    }

}
