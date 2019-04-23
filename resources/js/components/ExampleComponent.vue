<template>
    <div>
        {{ greeting }}<br/>
        <button @click="updateTimestamp">Update</button>
    </div>
</template>

<script>

export default{
    props:{
        greeting: String
    },
    // data() {
    //     return {
    //         // greeting: new Date().toLocaleString()
    //     }
    // },
    methods: { 
        updateTimestamp() {
            // this.greeting = new Date().toLocaleString()
            this.greeting = 'Hackerpair'
        }
    }
    // mounted(){
    //     console.log('Component mounted.')
    // }
}

</script>