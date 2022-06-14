<?php

class UserModel extends Model implements IModel{

        private $idPersona;
        private $Rol;
        private $nombrePersona;
        private $correo;
        private $contrasena;
        private $edad;
        private $avatar;
        private $aux;

        public function __construct()
        {
            parent:: __construct();
            $this->idPersona=0;
            $this->Rol='user';
            $this->nombrePersona="";
            $this->correo="";
            $this->contrasena='';
            $this->edad=0;
            $this->avatar=NULL;
            $this->aux='';
        }

    

        public function save(){
            try{
                error_log($this->correo);
                
                $query=$this->prepare('INSERT INTO Persona (idPersona,nombrePersona,correo, contrasena,edad,Rol,avatar) VALUES(:id,:nombre,:email,:contrasena,:age,:rol,:photo)');
                $query->execute([
                    'id' => $this->idPersona,
                    'rol' => $this->Rol,
                    'nombre' => $this->nombrePersona,
                    'email' => $this->correo,
                    'contrasena' => $this->contrasena,
                    'age' => $this->edad,
                    'photo' =>$this->avatar
                ]);

                return true;
            }catch(PDOException $e){
                error_log('USERMODEL::SAVE ERROR '.$e);
                return false;
            }
        }
        
        
        public function getAll(){
            $items=[];
            try{
                $query=$this->prepare('SELECT * FROM Persona' );
                $query->execute();
                $i=0;
                while($p = $query->fetch(PDO::FETCH_ASSOC)){
                    $item = new UserModel();
                    $item->setId($p['idPersona']);
                    $item->setRol($p['Rol']);
                    $item->setcontrasena($p['contrasena']);
                    $item->setedad($p['edad']);
                    $item->setfoto($p['avatar']);
                    $item->setCorreo($p['correo']);
                    $item->setNombrePersona($p['nombrePersona']);
                    $items[$i]=$item;
                    $i=$i+1;
                }
                return $items;

            }catch(PDOException $e){
                error_log('USERMODEL::GETALL ERROR '.$e);
                return false;
            }
        }
        public function get($id){
            try{
                $query=$this->prepare('SELECT * FROM Persona WHERE idPersona =:id' );
                $query->execute(['id' => $id]);
                
                    $p = $query->fetch(PDO::FETCH_ASSOC);
  

                    $this->idPersona=$p['idPersona'];
                    $this->Rol=$p['Rol'];
                    $this->nombrePersona=$p['nombrePersona'];
                    $this->correo=$p['correo'];
                    $this->contrasena=$p['contrasena'];
                    $this->edad=$p['edad'];
                    $this->avatar=$p['avatar'];
                
                return $this;

            }catch(PDOException $e){
                error_log('USERMODEL::GETID ERROR '.$e);
                return false;
            }

        }
       
        public function delete(){
            try{
                error_log($this->getId());
                $query = $this->prepare('DELETE FROM `Persona` WHERE `Persona`.`idPersona` = :id');
                $query->execute([ 'id' => $this->getId()]);
                return true;
            }catch(PDOException $e){
                echo $e;
                return false;
            }
        }
        
           
        
        public function actualizar(){
            try{
                $edad=$this->edad;
                $id=$this->idPersona;
                $nombrePersona=$this->nombrePersona;
                $correo=$this->correo;
                $contrasena=$this->contrasena;
                $imagen=$this->avatar;
                $query=$this->prepare("UPDATE Persona SET edad = :edad WHERE idPersona = :id");  
                $query->execute([ 'id' => $id,
                                   'edad' => $edad]);
                $query=$this->prepare("UPDATE Persona SET nombrePersona = :nombrePersona WHERE idPersona = :id");  
                $query->execute([ 'id' => $id,
                                   'nombrePersona' => $nombrePersona]);
                 $query=$this->prepare("UPDATE Persona SET correo = :correo WHERE idPersona = :id");  
                $query->execute([ 'id' => $id,
                                   'correo' => $correo]);
                                
                 $query=$this->prepare("UPDATE Persona SET contrasena = :contrasena WHERE idPersona = :id");  
                $query->execute([ 'id' => $id,
                                   'contrasena' => $contrasena]);   
                 $query=$this->prepare("UPDATE Persona SET avatar = :photo WHERE idPersona = :id");  
                $query->execute([ 'id' => $id,
                                   'photo' => $imagen]);
                return true;
            }catch(PDOException $e){
                echo $e;
                return false;
            }
        }

        public function exists($correo){
            try{
                $query = $this->prepare('SELECT correo FROM Persona WHERE correo = :correo');
                $query->execute( ['correo' => $correo]);
                
                if($query->rowCount() > 0){
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                echo $e;
                return false;
            }
        }
        
        public function getallnum(){
            try{
                $query=$this->prepare('SELECT COUNT(*) FROM Persona' );
                  $query->execute();
                 return $query;
            }catch(PDOException $e){
                echo $e;
                return false;
            }
        }

        public function compareContrasena( $contrasena,$id){
                try {
                    $user=$this->get($id);
                    return password_verify($contrasena, $user->getcontrasena());
                } catch (PDOException $e) {
                    echo $e;
                    return false;
                }
        }
        public function from($array){
                    $this->idPersona=$array['idPersona'];
                    $this->Rol=$array['Rol'];
                    $this->nombrePersona=$array['nombrePersona'];
                    $this->correo=$array['correo'];
                    $this->contrasena=$array['contrasena'];
                    $this->edad=$array['edad'];
                    $this->foto=$array['avatar'];
        }

 
        public function setId($id){
            $this->idPersona=$id;
        }

        public function setRol($Rol){
            $this->Rol=$Rol;
        }

        public function setedad($edad){
            $this->edad=$edad;
        }
        public function setNombrePersona($nombre){
            $this->nombrePersona=$nombre;
        }

      
        public function setCorreo($correo){
            $this->correo=$correo;
        }

        private function getHasedPassword($contrasena){
            return password_hash($contrasena,PASSWORD_DEFAULT,['cost'=> 10]);
        }
   

        public function setContrasena($contrasena){
            $this->contrasena=$this->getHasedPassword($contrasena);
        }
        
       public function setfoto($foto){
           $this->avatar=$foto;
       }
       
        public function getfoto(){
            return $this->avatar;
        }
        public function getId(){
            return $this->idPersona;
        }

    

        public function getRol(){
            return $this->Rol;
        }

        public function getNombrePersona(){
            return $this->nombrePersona;
        }

        public function getedad(){
            return $this->edad;
        }

        public function getcorreo(){
            return $this->correo;
        }

        public function getcontrasena(){
            return $this->contrasena;
        }

        public function getaux(){
            return $this->aux;
        }
        
        public function setaux($aux){
             $this->aux=$aux;
        }


}

?>
