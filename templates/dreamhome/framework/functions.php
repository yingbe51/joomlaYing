<?php
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$selectlogo = $this->params->get('selectlogo');
$sitetitle = $app->getCfg('sitename');
$user_count = ($this->countModules('user1')>0) + ($this->countModules('user2')>0) + ($this->countModules('user3')>0);
$user_width = $user_count > 0 ? 'user' . floor(99 / $user_count) : '';
$user2_count = ($this->countModules('user4')>0) + ($this->countModules('user5')>0) + ($this->countModules('user6')>0);
$user2_width = $user2_count > 0 ? 'user' . floor(99 / $user2_count) : '';
$user3_count = ($this->countModules('user7')>0) + ($this->countModules('user8')>0) + ($this->countModules('user9')>0);
$user3_width = $user3_count > 0 ? 'user' . floor(99 / $user3_count) : '';
$footer_count = ($this->countModules('footer1')>0) + ($this->countModules('footer2')>0) + ($this->countModules('footer3')>0) + ($this->countModules('footer4')>0) + ($this->countModules('footer5')>0);
$footer_width = $footer_count > 0 ? 'footer' . floor(99 / $footer_count) : '';
function getColumns ($left, $right){
if($left && !$right) { $columns = "-left-only"; }
if($right && !$left) { $columns = "-right-only"; }
if($left && $right) { $columns = "-left-right"; }
if(!$left && !$right) { $columns = "-wide"; }
return $columns; }
$columns = getColumns($this->countModules( 'left' ),$this->countModules( 'right' ));
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);
$doc->setMetaData( 'viewport', 'width=device-width, initial-scale=1.0' );
$doc->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/css/template.css', $type = 'text/css');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/bootstrap.js', 'text/javascript');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/respond.min.js', 'text/javascript');
function check_designer(){ $file = JPATH_BASE.'/templates/dreamhome/index.php';
$link = '<a href="http://www.joomlasaver.com" target="_blank">';
$filedata = fopen($file,'r'); $check = fread($filedata,filesize($file)); fclose($filedata); if(strpos($check, $link)==0){
echo '<br><center>If you want to remove our link<br />please purchase this template at <a href="http://www.joomlasaver.com" target="_blank">JoomlaSaver</a></center>'; die; } } check_designer();
?>