<?php 
/*
*************************************************
*************************************************
    Author: Mr. Dharmendra Kumar
Author URI: http://www.dharmendramca.wordpress.com
       GIT: https://github.com/dharmendramca 

Description: SimpleNameArts is a PHP class that can beautify any word.  

*************************************************
*/

class SimpleNameArts{

public function design(array $data){


 ?><style type="text/css">
 .design {
  background: url('<?php echo $data['bg']?$data['bg']:'d0'; ?>.jpg') <?php echo $data['left']?$data['left']:0; ?>px <?php echo $data['right']?$data['right']:0; ?>px;
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
  font-weight: bold;
  font-size: <?php echo $data['fontsize']?$data['fontsize']:18; ?>px;
  font-family: <?php echo $data['font-family']?$data['font-family']:'arial, helvetica'; ?>;
  max-width: 600px;
  width: 100%;
  margin: 50px auto;
  text-align: center;
}	

 </style><div class="design"><?php echo $data['name']?$data['name']:'I Love My India';


  }
}
?>
