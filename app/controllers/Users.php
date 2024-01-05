<?php
class Users extends Controller{
private $userModal;
    public function __construct(){
        $this->userModal = $this->model('user');

    }
    public function index(){
        // Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          // Process form
          // Sanitize POST data
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
          // Init data
          $data =[
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'email_err' => '',
            'password_err' => '',      
          ];
          $pattern_mot_de_passe =  '/^.{8,}$/';
  
          // Validate Email
          if(empty($data['email'])){
            $data['email_err'] = 'Veuillez entrer email';
          }elseif($this->userModal->checkEmail($data['email'])){
      
          }else{
            $data['email_err'] = 'Aucun utilisateur trouvé';
          }
  
          // Validate Password
          if(empty($data['password'])){
            $data['password_err'] = ' Veuillez entrer le mot de passe';
          }elseif(!preg_match($pattern_mot_de_passe,$data['password'])){
              $data['password_err'] = 'Veuillez entrer un mot de passe valide (au moins 8 caractères)';
            }
  
          // Make sure errors are empty
          if(empty($data['email_err']) && empty($data['password_err'])){
            // Validated
            $logedInUser= $this->userModal->login($data['email'],$data['password']);
              if($logedInUser){
                $this->createUserSession($logedInUser);
                
              }else{
                $data['password_err'] = 'le mot de passe est invalide';
                $this->view('pages/login',$data);
              
            }
          } else {
            // Load view with errors
            $this->view('pages/login', $data);
          }
  
  
        } else {
          // Init data
          $data =[    
            'email' => '',
            'password' => '',
            'email_err' => '',
            'password_err' => '',        
          ];
  
          // Load view
          $this->view('pages/login', $data);
        }
      }

    public function register(){
            // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
  
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
        $data =[
          'nom' => trim($_POST['nom']),
          'prenom' => trim($_POST['prenom']),
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'date' => trim($_POST['date']),
          'name_err' => '',
          'prenom_err' => '',
          'date_err' => '',
          'email_err' => '',
          'password_err' => '',
        ];
        $pattern_nom_prenom = '/^[a-zA-ZÀ-ÖØ-öø-ÿ\s]{3,}$/u';
        $pattern_email = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        $pattern_mot_de_passe =  '/^.{8,}$/';

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Veuillez entrer email';
        }elseif(!preg_match($pattern_email, $data['email'])){
            $data['email_err'] = 'Password must be at least 6 characters';
          }elseif($this->userModal->checkEmail($data['email'])){
            $data['email_err'] = 'Email déjà utilisé';
          }

        // Validate Name
        if(empty($data['nom'])){
          $data['name_err'] = 'Veuillez entrer un nom';
        }elseif(!preg_match($pattern_nom_prenom, $data['nom'])){
            $data['name_err'] = 'Veuillez entrer un nom valide (au moins 3 caractères)';
          }
          if(empty($data['date'])){
            $data['date_err'] = 'Veuillez entrer la date';
          }

        if(empty($data['prenom'])){
           $data['prenom_err'] = 'Veuillez entrer un prenom';
         }elseif(!preg_match($pattern_nom_prenom, $data['prenom'])){
           $data['prenom_err'] = 'Veuillez entrer un nom valide (au moins 3 caractères)';
          }

        // Validate Password
        if(empty($data['password'])){
          $data['password_err'] = 'Veuillez enter le mot de passe';
        } elseif(!preg_match($pattern_mot_de_passe,$data['password'])){
          $data['password_err'] = 'Veuillez entrer un mot de passe valide (au moins 8 caractères)';
        }

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['prenom_err']) && empty($data['date_err'])){
          
            // Hash Password
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

            // Register User
            if($this->userModal->register($data)){
              redirect('users/validation');
            } else {
              die('Something went wrong');
            }
        } else {
          // Load view with errors
          $this->view('pages/register', $data);
        }

      } else {
        // Init data
        $data =[
          'nom' => '',
          'prenom' => '',
          'email' => '',
          'password' => '',
          'date' => '',
          'name_err' => '',
          'prenom_err'  => '',
          'email_err' => '',
          'password_err' => '',
          'date_err' => '',
        ];

        // Load view
        $this->view('pages/register', $data);
      }
 
    }
    public function createUserSession($user){
        $_SESSION['user_id'] = $user->UserID;
        $_SESSION['user_email'] = $user->Email;
        $_SESSION['user_nom'] = $user->Nom;
        $_SESSION['user_prenom'] = $user->Prenom;
        $_SESSION['date'] = $user->DateDeNaissance;
        redirect('pages/dashboard');
      }

    public function validation(){
        $this->view('pages/validation');
  
      }
    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_nom']);
        unset( $_SESSION['user_prenom']);
        session_destroy();
        redirect('users/index');
      }


} ?>