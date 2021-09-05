<?php 

namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\StudentModel;
 
class Student extends Controller
{
 
	public function __construct()
    {
         helper(['form', 'url']);
    }
    public function index()
    {   
        return view('list');
    }
	
	function ajaxSearch(){
		$model = new StudentModel();
		$data = array();		
        $query=$model->like('first_name',$_REQUEST['q'])
                    ->select('id, first_name as text')
                    ->limit(10)->get();
		$data_result = $query->getResult();		
        echo json_encode($data_result);
    }  
 
}

?>