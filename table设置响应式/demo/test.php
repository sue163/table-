<link href="css/rwd-table.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/rwd-table.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<div class="container">
	<div class="table_grad scroll_tablex">
		<table class="table_tab responsive">
			<thead>
				<tr>
					<th>ID</th>
			        <th>名稱</th>
			        <th>状态</th>
			        <th>类型</th>
			        <th>创建时间</th>
			        <th>初稿时间</th>
			        <th>预完成时间</th>
			        <th>完成时间</th>
			        <th>管理</th>
			    </tr>
			</thead>
		    <tbody>
		    <?php if(!empty($lists)) : ?>
	        <?php foreach($lists as $list) : ?> 
	        <tr onmouseover="this.style.backgroundColor='#d4e3e5';" onmouseout="this.style.backgroundColor='#fff';">
	          <td><?=$list['id'] ?></td>
	          <td><?=$list['name'] ?></td>
	          <td><?=$list['status'] ?></td>
	          <td><?=$list['type_name'] ?></td>
	          <td><?=$list['creation_date'] ?></td>
	          <td><?=$list['first_draft_date'] ?></td>
	          <td><?=$list['target_date'] ?></td>
	          <td><?=$list['completion_date'] ?></td>
	          <td><a href="add_project.php?id=<?=$list['id'] ?>">编辑</a></td>
	        </tr>
	        <?php endforeach; ?>
	        <?php else : ?>
	        <tr>
	            <td colspan="9" style="text-align: center;">沒有數據</td>
	        </tr>
	        <?php endif; ?>
	        </tbody>
		</table>
	</div>
</div>
<script>
	lay('#version').html('-v'+ laydate.v);
	laydate.render({
	  elem: '#date1', //指定元素
	  type: 'datetime'
	});
</script>
