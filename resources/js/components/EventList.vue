<template>
	<div>
		<h1>HackerPair Events {{ events.length }}</h1>
		<table class="table table-striped table-responsive">		
		<thead>
				<tr>
					<th>Name</th>
					<th>Location</th>
					<th>Status</th>
				</tr>
		</thead>
		<tbody>
			<event-item v-for="event in events"
			:event = "event"
			:key="event.id">
			</event-item>
		</tbody>
		</table>

<pagination :data="events"
@pagination-change-page="getEvents"
></pagination>

	</div>
</template>

<script type="text/javascript">
	import EventItem from './EventItem'
	
	export default {
		components: {
			'event-item': EventItem
		},
		created() {
			this.getEvents()
		},
		methods:{
			getEvents(page) {
				if(typeof page == 'undefined'){
					page = 1
				}
				axios.get('/api/events?page=' + page)
				.then(response => {
					this.events = response.data
				})
				.catch(e => {
						this.error = "An error has occurred."
				})
			}
		},
		data() {
			return {
				error:'',
				events: [
			]
		}
	}
}
</script>