<?php 
/*
*************************************************
*************************************************
Author: Dharmendra Kumar
Author URI: http://www.dharmendramca.wordpress.com

Description: SimpleNameArts is a PHP class that can beautify any word.  

*************************************************
*/

class SimpleNameArts{

public function design(array $data){

if(!empty($name) )
 ?><style type="text/css">
 .design {
  background: url('inc/assets/img/<?php echo isset($data['bg'])?$data['bg']:'d1'; ?>.jpg') <?php echo isset($data['left'])?$data['left']:0; ?>px <?php echo isset($data['right'])?$data['right']:0; ?>px;
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
  font-weight: bold;
  font-size: <?php echo isset($data['fontsize'])?$data['fontsize']:18; ?>px;
  font-family: arial, helvetica;
  width: 600px;
  margin: 50px auto;
  text-align: center;
}	


 </style><span class="design"><?php echo isset($data['name'])?$data['name']:'Simple Design'; ?></span><?php

}



}