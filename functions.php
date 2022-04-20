<?php

// 运行天数计算
date_default_timezone_set('Asia/Shanghai');
function getBuildTime() {
	$site_create_time = strtotime('2021-08-21');
	$time = time() - $site_create_time;
	if(is_numeric($time)) {
		$value = array(
		"year" => 0, "day" => 0,
		);
		if($time >= 86400) {
			$value["day"] = floor($time/86400);
			$time = ($time%86400);
		}
		$value["seconds"] = floor($time);
		echo '<span class="date">'.$value['day'].'天</span>';
	} else {
		echo '';
	}
}


/** 单文章字数 **/

function  art_count ($cid){
    $db=Typecho_Db::get ();
    $rs=$db->fetchRow ($db->select ('table.contents.text')->from ('table.contents')->where ('table.contents.cid=?',$cid)->order ('table.contents.cid',Typecho_Db::SORT_ASC)->limit (1));
    echo mb_strlen($rs['text'], 'UTF-8');
}






    /**
     * 全站字数
     */
    function AllarticlesNum() {
        $chars = 0;
        $db = Typecho_Db::get();
        $select = $db ->select('text')->from('table.contents');
        $rows = $db->fetchAll($select);
        foreach ($rows as $row) { $chars += mb_strlen(trim($row['text']), 'UTF-8'); }
        return $chars;
    } 
    
    function articleNum($archive) {
        return mb_strlen($archive->text,'UTF-8');
    }
  
    
  
  
  

function getHotComments($limit = 10){
    $db = Typecho_Db::get();
    $result = $db->fetchAll($db->select()->from('table.contents')
        ->where('status = ?','publish')
        ->where('type = ?', 'post')
        ->where('created <= unix_timestamp(now())', 'post') //添加这一句避免未达到时间的文章提前曝光
        ->limit($limit)
        ->order('commentsNum', Typecho_Db::SORT_DESC)
    );
    if($result){
        foreach($result as $val){            
            $val = Typecho_Widget::widget('Widget_Abstract_Contents')->push($val);
            $post_title = htmlspecialchars($val['title']);
            $permalink = $val['permalink'];
            echo '<li><a href="'.$permalink.'" title="'.$post_title.'">'.$post_title.'</a></li>';        
        }
    }
}











?>