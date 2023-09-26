<?php

/**
 * Register
 */
class Register 
{
    private $pdo;

    public function __construct ()
    {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=itChallenge',"root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;

    }

    public function insertData(Array $data) : bool
    {
           $insert =  $this->pdo->prepare("INSERT INTO candidate (group_name,first_member,first_register,first_email,first_tel,first_bac,first_filiere,second_member,second_register,second_email,second_tel,second_bac,second_filiere,third_member,third_register,third_email,
            third_tel,third_bac,third_filiere,topic,theme
           ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);
           ");
           $insert->execute([$data['group_name'],$data['first_member'],$data['first_register'],$data['first_email'],$data['first_tel'],$data['first_bac'],$data['first_filiere'],$data['second_member'],$data['second_register'],$data['second_email'],$data['second_tel'],$data['second_bac'],$data['second_filiere'],$data['third_member'],$data['third_register'],$data['third_email'],
           $data['third_tel'],$data['third_bac'],$data['third_filiere'],$data['topic'],$data['theme']]);
        
        if($insert){
            return true;
        }else{
            return false;
        }
        
    }

    


}