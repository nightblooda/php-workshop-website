<?php

    class User{
        
        private $db;
        
        public function __construct(){
            $this->db = new DB();
        }
        
        public function login($data){
            $this->db->query('SELECT * FROM users WHERE email=:email AND password=:password');
            $this->db->bind(":email", $data["email"]);
            $this->db->bind(":password", $data["password"]);
            $row_detail = $this->db->single();
            if($this->db->rowCount() > 0){
                return $row_detail;
            }else{
                return false;
            }
        }
        
        public function insertBill($data){
            if(empty($data->menu)){
                return false;
            }else{
                $this->db->query('SELECT * FROM bills WHERE billno=:billno');
                $this->db->bind(":billno", $data->billno);
                if($this->db->rowCount()>0){
                    return false;
                }else{
                    $this->db->query('SELECT id from users WHERE workshopname=:workshopname');
                    $this->db->bind(":workshopname", $_SESSION["workshopname"]);
                    $fid = $this->db->single();
                    $this->db->query('INSERT INTO `bills`(`billno`, `name`, `vehicleno`, `vehiclename`, `date`, `km`, `email`, `mobileno`, `fid`, `total`) VALUES (:billno, :name, :vehicleno, :vehiclename, :date, :km, :email, :mobileno, :fid, :total)');
                    $this->db->bind(":billno", $data->billno);
                    $this->db->bind(":name", $data->name);
                    $this->db->bind(":vehicleno", $data->vehicleno);
                    $this->db->bind(":vehiclename", $data->vehiclename);
                    $this->db->bind(":date", $data->date);
                    $this->db->bind(":km", $data->km);
                    $this->db->bind(":email", $data->email);
                    $this->db->bind(":mobileno", trim($data->mobileno));
                    $this->db->bind(":fid", $fid["id"]);
                    $this->db->bind(":total", $data->total);
                    if($this->db->execute()){
                        foreach($data->menu as $menu){
                            $this->db->query('INSERT INTO `particulars`(`bills_fid`, `particular`, `rate`, `amount`, `gst`, `quantity`) VALUES (:bills_fid, :particulars, :rate, :amount, :gst, :quantity)');
                            $this->db->bind(":bills_fid", $data->billno);
                            $this->db->bind(":particulars", $menu->particulars);
                            $this->db->bind(":rate", $menu->rate);
                            $this->db->bind(":amount", $menu->amount);
                            $this->db->bind(":gst", $menu->gst);
                            $this->db->bind(":quantity", $menu->quantity);
                            $this->db->execute();
                        }
                        return true;
                    }else{
                        false;
                    }
                
                }
            }
        }
      }
      ?>