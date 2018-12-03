
<?php
session_start();
 
//读取服务器端的session_id，如果没有的话赋值为-1
$session_id = empty($_SESSION['session_id']) ? -1 : $_SESSION['session_id'];
 
//读取客户端的post_id,如果没有的话赋值为-2
$post_id = empty($_POST['post_id']) ? -2 : $_POST['post_id'];
 
//判断两个id是否相同，相同则说明已经处理过一次，不同则进行处理
if($session_id == $post_id){
	
	echo "<h1>已经处理过了，不管了</h1>";
	
}else{
	
	//如果页面还没有提交过表单，则显示表单，否则处理post过来的数据
	if($post_id == -2){		
?>
<html>
	<body>
		<form action="index.php" method="post">
			<input type="text" hidden="hidden" name="post_id" id="" value="<?php echo rand(1, 999999); ?>" />
			<input type="text" name="test" id="test" value="" />
			<input type="submit" value=""/>
		</form>
	</body>
</html>	
<?php		
	}else{
		
		echo "<h1>正在处理</h1>";
		
		//处理过后吧post_id存入session，方便下次比较
		$_SESSION['session_id'] = $post_id;
		
	}
 
}
?>