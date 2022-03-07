<ul>
	<?php foreach ($menu as $item): ?>
		<li>
			<a href=<?=$item['link']?>><?=$item['name']?></a>
			<?php if (array_key_exists('child_menu', $item)) : ?>
				<ul>
					<?php foreach ($item['child_menu'] as $_item): ?>
						<li>
							<a href=<?=$_item['link']?>><?=$_item['name']?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif;?>
		</li>
	<?php endforeach; ?>
</ul>
