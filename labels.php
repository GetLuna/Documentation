<?php $section = "docs"; $dsection = "use";  $dpage = "labels"; include('../include/header.php') ?>
<div class="row main">
	<div class="col-sm-3">
		<?php include ('docsnav.php') ?>
	</div>
	<div class="col-sm-9">
		<h1>Labels</h1>
		<p>To indicate the status of a thread, Luna uses colored labels in front of the thread title in the forum and index view of the board. Below, we give an explanation to all these labels.</p>
		<table class="table">
			<thead>
				<tr>
					<th>Label</th>
					<th>Explanation</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><span class="fal fa-fw fa-check status-solved"></span></td>
					<td>Threads marked with a check are solved according to the author.</td>
				</tr>
				<tr>
					<td><span class="fal fa-fw fa-thumb-tack status-pinned"></span></td>
					<td>Pinned threads are usually important to read. It's worth it to take a look there.</td>
				</tr>
				<tr>
					<td><span class="fal fa-fw fa-map-marker status-important"></span></td>
					<td>Much like pinned threads, these are important, however, they do not stick to the top of the list.</td>
				</tr>
				<tr>
					<td><span class="fal fa-fw fa-lock status-closed"></span></td>
					<td>When a you see a closed label, it means you can't comment on that thread any more, unless you have a permission that overwrites this. The thread is still available to read, though.</td>
				</tr>
				<tr>
					<td><span class="fal fa-fw fa-arrows-alt status-moved"></span></td>
					<td>This thread has been moved to another forum. Admins and moderators can choose to show this notification, or simply not show it. The original forum where this thread was located in, won't show any thread stats anymore.</td>
				</tr>
				<tr>
					<td><span class="fal fa-fw fa-bell status-new"></span></td>
					<td>This thread has received a new comment since you last visited the board.</td>
				</tr>
				<tr>
					<td>&middot;</td>
					<td>This little dot appears when you have made a comment in this thread.</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<?php include '../include/footer.php' ?>