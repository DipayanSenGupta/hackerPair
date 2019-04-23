<template>
	<tr>
		<td>
			{{event.name}}
		</td>
		<td>
			{{event.location}}
		</td>
		<td>
			<button class="btn btn-danger"> NOt attending Bro</button>
		</td>
	</tr>
</template>

<script type="text/javascript">
	export default{
		props:{
			event: Object,
			events:Object
		}
	}
</script>