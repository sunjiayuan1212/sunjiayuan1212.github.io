<?php

     class Form{

             private $action;

             private $shape;

             function _construct($action="index.php"){

                     $this->action = $action;

                     $this->shape = isset($_REQUEST["action"]) ? $_REQUEST["action"]:"rect";

              }

             function _toString(){

                      $form='<form action="'.$this->action.'" method="post">';

                      switch($this->shape){

                           case"rect":

                                $form.=$this->getRect();

                                break;

                           case"triangle":

                                $form.=$this->getTriangle();

                                break;

                           case"circle":

                                $form.=$this->getcircle();
                                 break;
                           default:
                                $form.='请选择一个形状';
                       }
                       $form.='<input type="submit" name="sub" value="计算">';
                      $form.='</form>';
                      return $form;
     }
              private function getRect(){
                             $input='<b>请输入|矩形|的长和宽：</b><p>';
                             $input.='宽度：<input type="text" name="width" value="'.$_POST['width'].'"><br>';
                             $input.='高度：<input type="test" name="height" value="'.$_POST['height'].'"><br>';
                             $input.='<input type="hidden" name="action" value="rect">';
                             return $input;
}
              private function getTriangle(){
                            $input='<b>请输入|三角形|的三边：</b><p>';
                            $input='<b>请输入|三角形|的三边：</b><p>';
                            $input.='第一边：<input type="text" name="side1" value="'.$_POST['side1'].'"><br>';
                            $input.='第二边：<input type="test" name="side2" value="'.$_POST['side2'].'"><br>';
                            $input.='第三边：<input type="test" name="side3" value="'.$_POST['side3'].'"><br>';
                            $input.='<input type="hidden" name="action" value="triangle">';
                            return $input;
}
              private function getCircle(){
                           $input='<b>请输入|圆形|的半径：</b><p>';
                           $input.='半径：<input type="text" name="radius" value="'.$_POST['radius'].'"><br>';
                           $input.='<input type="hidden" name="action" value="circle">';
                           return $input;
}
}
?>
