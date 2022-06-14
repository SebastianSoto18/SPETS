<?php

class PetsModel extends Model implements IModel{

    private $idMascota;
    private $nombreMascota;
    private $edadMascota;
    private $Raza;
    private $foto;
    private $userid;

    public function __construct()
    {
        parent:: __construct();
        $this->idMascota=0;
        $this->nombreMascota='';
        $this->edadMascota='';
        $this->Raza='';
        $this->userid=0;
    }

        public function save(){
            try{
                $query=$this->prepare('INSERT INTO Mascota(idMascota,nombreMascota,edad,Raza,foto,idPersona) VALUES(:idmascota,:nombreMascota,:edadMascota,:Raza,:foto,:user)');
                $query->execute([
                    'idmascota' => $this->idMascota,
                    'nombreMascota' => $this->nombreMascota,
                    'edadMascota' => $this->edadMascota,
                    'Raza' => $this->Raza,
                    'foto' => $this->foto,
                    'user' => $this->userid
                ]);
                
                
                

                return true;
            }catch(PDOException $e){
                error_log('PETSMODEL::SAVE ERROR '.$e);
                return false;
            }
        }
        public function getAll(){

            $items=[];
            try{
                $query=$this->prepare('SELECT * FROM Mascota' );
                $query->execute();
                $i=0;
                while($p = $query->fetch(PDO::FETCH_ASSOC)){
                    $item=new PetsModel();  

                    $item->setIdMascota($p['idMascota']);
                    $item->setNombreMascota($p['nombreMascota']);
                    $item->setEdad($p['edad']);
                    $item->setRaza($p['Raza']);
                    $item->setfoto($p['foto']);
                     $items[$i]=$item;
                    $i=$i+1;
                }
                return $items;
            }catch(PDOException $e){
                error_log('PETSMODEL::GETALL ERROR '.$e);
                return false;
            }

        }
        

        public function getAllbyId($id){
            $items = [];
            $i=0;
            try{
                $query = $this->prepare('SELECT * FROM Mascota WHERE :userid = idPersona');
                $query->execute([ "userid" => $id]);
                  while($p = $query->fetch(PDO::FETCH_ASSOC)){
                    $item=new PetsModel();  

                    $item->setIdMascota($p['idMascota']);
                    $item->setNombreMascota($p['nombreMascota']);
                    $item->setEdad($p['edad']);
                    $item->setRaza($p['Raza']);
                    $item->setfoto($p['foto']);
                    $items[$i]=$item;
                    $i=$i+1;
                }
         
               return $items;
    
            }catch(PDOException $e){
                echo $e;
            }
        }
        public function get($id){
            try{
                $query=$this->prepare('SELECT * FROM Mascota WHERE idMascota =:id' );
                $query->execute(['id' => $id]);
                
                    $p = $query->fetch(PDO::FETCH_ASSOC);
  

                    $this->idMascota=$p['idMascota'];
                    $this->edadMascota=$p['edad'];
                    $this->nombreMascota=$p['nombreMascota'];
                    $this->Raza=$p['Raza'];
                    $this->foto=$p['foto'];
                    $this->userid=$p['idPersona'];
                    
                
                return $this;

            }catch(PDOException $e){
                error_log('USERMODEL::GETID ERROR '.$e);
                return false;
            }

        }
       
        public function delete(){
            try{
                error_log($this->idMascota);
                error_log($this->getIdMascota());
                $query = $this->prepare('DELETE FROM Mascota WHERE idMascota = :id');
                $query->execute([ 'id' => $this->getIdMascota()]);
                return true;
            }catch(PDOException $e){
                echo $e;
                return false;
            }
        }
        
       public function actualizar(){
            try{
                $edad=$this->edadMascota;
                $id=$this->idMascota;
                $nombreMascota=$this->nombreMascota;
                $raza=$this->Raza;
                $imagen=$this->foto;
                $query=$this->prepare("UPDATE Mascota SET edad = :edad WHERE idMascota = :id");  
                $query->execute([ 'id' => $id,
                                   'edad' => $edad]);
                $query=$this->prepare("UPDATE Mascota SET nombreMascota = :nombreMascota WHERE idMascota= :id");  
                $query->execute([ 'id' => $id,
                                   'nombreMascota' => $nombreMascota]);
                 $query=$this->prepare("UPDATE Mascota SET Raza = :raza WHERE idMascota = :id");  
                $query->execute([ 'id' => $id,
                                   'raza' => $raza]);
                 $query=$this->prepare("UPDATE Mascota SET foto = :photo WHERE idPersona = :id");  
                $query->execute([ 'id' => $id,
                                   'photo' => $imagen]);
                return true;
            }catch(PDOException $e){
                echo $e;
                return false;
            }
        }

              
      public function getallnum(){
            try{
                $query=$this->prepare('SELECT COUNT(*) FROM Mascota' );
                  $query->execute();
                 return $query;
            }catch(PDOException $e){
                echo $e;
                return false;
            }
        }
        public function from($array){
            $this->idMascota=$array['idMascota'];
            $this->edadMascota=$array['edad'];
            $this->nombreMascota=$array['nombreMascota'];
            $this->Raza=$array['Raza'];
            $this->foto=$array['foto'];
            $this->userid=$array['idPersona'];
        }

        public function setNombreMascota($nombre){
            $this->nombreMascota=$nombre;
        }

        public function setEdad($edad){
            $this->edadMascota=$edad;
        }

        public function setIdMascota($id){
            $this->idMascota=$id;
        }

        public function setRaza($Raza){
            $this->Raza=$Raza;
        }
        
        public function setFoto($foto){
            $this->foto=$foto;
        }
        
        public function setuserid($id){
            $this->userid=$id;
        }

        public function getIdMascota(){
            return $this->idMascota;
        }

        public function getRaza(){
            return $this->Raza;
        }

        public function getNombreMascota(){
            return $this->nombreMascota;
        }

        public function getEdad(){
            return $this->edadMascota;
        }
        
        public function getFoto(){
            return $this->foto;
        }
        
        public function getuserid(){
            return $this->userid;
        }

}



?>