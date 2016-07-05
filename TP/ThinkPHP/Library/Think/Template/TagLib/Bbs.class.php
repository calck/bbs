<?php
    namespace Think\Template\TagLib;
    use Think\Template\TagLib;
 
class Bbs extends TagLib{


	// ��ǩ����
	protected $tags = array(
			// ��ǩ���壺 attr �����б� close �Ƿ�պϣ�0 ����1 Ĭ��1�� alias ��ǩ���� level Ƕ�ײ��
			'editor' => array('attr' => 'id,editurl', 'close' => 1),
	);
	/**
	 +----------------------------------------------------------
	 * ueditor��ǩ���� ������ӻ��༭��
	 * ��ʽ�� <bbs:editor id="textContent" editurl="http://url" theme="default" config="editor_config" word="true" element="true" width="" height="" cleartdata="false"></bbs:editor>
	 +----------------------------------------------------------
	 * @access public
	 +----------------------------------------------------------
	 * @param string $attr ��ǩ����
	 +----------------------------------------------------------
	 * @return string|void
	 +----------------------------------------------------------
	*/
	public function _editor($attr, $content) {
		$web_config=C("SCENARIO_CONFIG");
	
		$id = !empty($tag['id']) ? $tag['id'] : 'textarea';
		$theme = !empty($tag['theme']) ? $tag['theme'] : 'default';
		$lang = !empty($tag['lang']) ? $tag['lang'] : 'zh-cn';
		$config=!empty($tag['config']) ? $tag['config'] : 'editor_config';
		$wordCount=!empty($tag['word']) ?$tag['word'] : 0;
		$elementPathEnabled=!empty($tag['element']) ? $tag['element'] : 0;
		$minFrameHeight=!empty($tag['height']) ? $tag['height'] : 0;
		$width=!empty($tag['width']) ? $tag['width'] : 0;
		$autoClearinitialContent=!empty($tag['cleartdata']) ?$tag['cleartdata'] : 0;
		$url=$tag["editurl"];
		$imageUrl=__APP__."?m=UploadFile&a=uploadimage";
		$imageManagerUrl=__APP__."?m=UploadFile&a=index";
		$getMovieUrl=__APP__."?m=UploadFile&a=getmovieurl";
		$weburl=C("TMPL_PARSE_STRING");
		$weburl=$weburl['__WEBSITE_URL__'];
		$parseStr = "
	<script type='text/javascript'>
	<!--
		window.UEDITOR_HOME_URL = '{$url}';
	//-->
	</script>
	<script type='text/javascript' src='{$url}{$config}.js'></script>
	<script type='text/javascript' src='{$url}editor_all.js'></script>
<script type='text/plain' id='".$id."' name='".$id."'  style='width:".$width."px'>
		".$content."
</script>
<script type='text/javascript'>
    UE.getEditor('".$id."', {
        theme:'".$theme."', 
        lang:'".$lang."', 
        minFrameHeight:$minFrameHeight,
        wordCount:$wordCount,
        elementPathEnabled:$elementPathEnabled,
        autoClearinitialContent:$autoClearinitialContent,
        imageUrl:'".$imageUrl."',
        imagePath:'',	
        fileUrl:'".$fileUrl."',
        filePath:'',
        imageManagerUrl:'".$imageManagerUrl."',
        imageManagerPath:'".$weburl."',
        wordImageUrl:'".$imageUrl."',
        wordImagePath:'',
        getMovieUrl:'".$getMovieUrl."',
        maxInputCount:2		
    });

</script>
";
		return $parseStr;
	}
	
	
	
}
?>