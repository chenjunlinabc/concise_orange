<?php

// 运行天数计算
date_default_timezone_set('Asia/Shanghai');
function getBuildTime() {
	$site_create_time = strtotime('2021-03-17');
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

// avatar换源

define("__TYPECHO_GRAVATAR_PREFIX__", "https://sdn.geekzu.org/avatar/");



function  art_count ($cid){
    $db=Typecho_Db::get ();
    $rs=$db->fetchRow ($db->select ('table.contents.text')->from ('table.contents')->where ('table.contents.cid=?',$cid)->order ('table.contents.cid',Typecho_Db::SORT_ASC)->limit (1));
    echo mb_strlen($rs['text'], 'UTF-8');
}






    /**
     * 全站字数
     */
    function allOfCharacters() {
        $chars = 0;
        $db = Typecho_Db::get();
        $select = $db ->select('text')->from('table.contents');
        $rows = $db->fetchAll($select);
        foreach ($rows as $row) { $chars += mb_strlen(trim($row['text']), 'UTF-8'); }
        $unit = '';
        if($chars >= 10000)     { $chars /= 10000; $unit = '万'; } 
        else if($chars >= 1000) { $chars /= 1000;  $unit = '千'; }
        $out = sprintf('%.2lf %s',$chars, $unit);
        return $out;
    } 
/**
    
    /**
     * 加载耗时
     */
    function timer_start() {
        global $timestart;
        $mtime = explode( ' ', microtime()  );
        $timestart = $mtime[1] + $mtime[0];
        return true; 
    }
    timer_start();
    function timer_stop( $display = 0, $precision = 3  ) {
        global $timestart, $timeend;
        $mtime = explode( ' ', microtime()  );
        $timeend = $mtime[1] + $mtime[0];
        $timetotal = number_format( $timeend - $timestart, $precision  );
        $r = $timetotal < 1 ? $timetotal * 1000 . " ms" : $timetotal . " s";
        if ( $display  ) {
            echo $r;
        }
        return $r;
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