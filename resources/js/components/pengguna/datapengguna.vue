<template>
    <div class="container">
        <ul>
            <li v-for="user in items" :key="user.id">
                {{ user.name }}
            </li>
         </ul>
     </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return {
                items: [
                {id: 1, name: 'pande'},
                {id: 2, name: 'made'},
                {id: 3, name: 'sindu'}
            ]
            }
        },
       
    }
</script>
