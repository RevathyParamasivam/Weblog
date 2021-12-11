<?php 
namespace App\Controllers;
use App\Models\ProfileModel;
use CodeIgniter\Controller;

class ProfileController extends Controller
{
    private $profile = '' ;
    public function __construct(){
      
        $this->profile = new ProfileModel();       
    }
    
    public function index()    {  
    
       $session = session();
       if(isset($_POST['source']))
        {
            $insertdata=['source'=>$_POST['source'],'benefits'=>$_POST['benefits'],'lid'=>$_SESSION['lid1']];
            $this->profile->save($insertdata);
        }
        if(isset($_SESSION['lid1']))
        {
         $data1['result']=$this->profile->where('lid',$_SESSION['lid1'])->findAll();
         $session = session();  
         $session->setFlashdata('id', $this->request->getVar('id'));
         $session->setFlashdata('lid1', $_SESSION['lid1']);
        return view('ProfileView',$data1);}
    }

    public function delete($data)    {  

              $deleteObject = new ProfileModel();
              $deleteObject->delete($data);
        
    return redirect()->to(base_url('ProfileController'));
    }


    public function update($sourceId)    {  
         $session = session();  
         $session->setFlashdata('sourceId', $sourceId);
          return view('UpdateView');
    }


    public function logout()    {  

        if(session()->has('id'))
          {
          session()->destroy('id');
         }
    return redirect()->to(base_url('Home'));
    }    

}