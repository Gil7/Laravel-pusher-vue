<template>
    <div>
        <li class="list-group-item" :class="className">{{text}}</li>
        <small class="badge float-right badge-danger" :class="badgeClass">You</small>    
    </div>
    

</template>

<script>
    export default {
        props: ['text','color'],
        mounted() {
            console.log('Component mounted.')
        },
        computed:{
            className(){
                return 'list-group-item-' + this.color
            },
            badgeClass(){
                return 'badge-' + this.color
            }
        }
    }
</script>
