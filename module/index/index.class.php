<?php

    class index extends indexMain{
        function __construct()
        {
            parent::__construct();
            $this->db=new db("shows");
        }

        function init(){

            $result=$this->db->where("statu=3")->order("stime desc")->limit("0,5")->select();
            $category=$this->db->select("select * from category");

            $hitslist=$this->db->order("hits desc")->limit("0,5")->select();
            $lovelist=$this->db->order("good desc")->limit("0,5")->select();

            $this->smarty->assign("result",$result);
            $this->smarty->assign("category",$category);
            $this->smarty->assign("hitslist",$hitslist);
            $this->smarty->assign("lovelist",$lovelist);
            $this->smarty->display("index/index.html");
        }

        function xiang(){

            $catid=$this->db->select("select * from category");
            $arr=array();
            foreach ($catid as $v){
                if(!isset($v["son"])){
                    $v["son"]=array();
                }
                $v["son"]=$this->select_con($v["cid"]);
                $arr[]=$v;
            }

            $this->smarty->assign("xiang",$arr);

            $this->smarty->display("index/xiang.html");
        }

        function select_con($cid){
            return $result=$this->db->select("select * from shows where cid=$cid");
        }

    }
